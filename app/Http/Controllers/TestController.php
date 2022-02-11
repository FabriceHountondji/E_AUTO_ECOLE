<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\CategoryTest;
use App\Models\TypePermis;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Liste des épreuves';
        $tests = Test::all();
        // dd($tests);
        return view('dashboard/tests/index', compact('title','tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = TypePermis::all();
        $categories = CategoryTest::all();
        $title = 'Nouveau Test';
        return view('dashboard/tests/create', compact('title', 'categories', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('bon');

        $request->validate([
            'label' => 'required',
            'duration' => 'required|numeric|min:300',
        ]);

        $test = Test::create([

            'label' => $request->label,
            'duration' => $request->duration,
            'user_id' => Auth::id(),
            'categoryTest_id' => $request->category,
            'typePermis_id' => $request->type,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // dd($test);
        return redirect(route('test_questions.create', $test))->with('success', 'votre test a été crée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        $title = $test->label;
        return view('dashboard/tests/show', compact('title', 'test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
    public function compose(Test $test)
    {
        $title = 'Composition de test '.$test->label;
        return view('dashboard/exam/compose', compact('title'));
    }
}
