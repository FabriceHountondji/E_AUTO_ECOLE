<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
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
        $title = 'Liste des questions';
        $questions = Question::orderBy('id', 'DESC')->get();
        return view('dashboard/questions/index', compact('title', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testQuestionCreate(Test $test)
    {

        $title = 'Ajouter des questions au test'. $test->label;
        return view('dashboard/questions/create', compact('title', 'test'));
    }

    public function create()
    {

        $title = 'Ajouter des questions';
        return view('dashboard/questions/create2', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Test $test)
    {
        // dd('bb');
        if($request->question_1){
            $q1 = Question::create([

                'label'  => $request->question_1,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q1->id,
                'numOrder' => 1,
            ]);
        }

        if($request->question_2){
            $q2 = Question::create([

                'label'  => $request->question_2,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q2->id,
                'numOrder' => 2,
            ]);
        }

        if($request->question_3){
            $q3 = Question::create([

                'label'  => $request->question_3,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q3->id,
                'numOrder' => 3,
            ]);
        }

        if($request->question_4){
            $q4 = Question::create([

                'label'  => $request->question_4,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q4->id,
                'numOrder' => 4,
            ]);
        }

        if($request->question_5){
            $q5 = Question::create([

                'label'  => $request->question_5,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q5->id,
                'numOrder' => 5,
            ]);
        }

        if($request->question_6){
            $q6 = Question::create([

                'label'  => $request->question_6,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q6->id,
                'numOrder' => 6,
            ]);
        }

        if($request->question_7){
            $q7 = Question::create([

                'label'  => $request->question_7,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q7->id,
                'numOrder' => 7,
            ]);
        }

        if($request->question_8){
            $q8 = Question::create([

                'label'  => $request->question_8,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q8->id,
                'numOrder' => 8,
            ]);
        }

        if($request->question_9){
            $q9 = Question::create([

                'label'  => $request->question_9,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q9->id,
                'numOrder' => 9,
            ]);
        }

        if($request->question_10){
            $q10 = Question::create([

                'label'  => $request->question_10,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q10->id,
                'numOrder' => 10,
            ]);
        }

        if($request->question_11){
            $q11 = Question::create([

                'label'  => $request->question_11,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q11->id,
                'numOrder' => 11,
            ]);
        }

        if($request->question_12){
            $q12 = Question::create([

                'label'  => $request->question_12,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q12->id,
                'numOrder' => 12,
            ]);
        }

        if($request->question_13){
            $q13 = Question::create([

                'label'  => $request->question_13,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q13->id,
                'numOrder' => 13,
            ]);
        }

        if($request->question_14){
            $q14 = Question::create([

                'label'  => $request->question_14,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q14->id,
                'numOrder' => 14,
            ]);
        }

        if($request->question_15){
            $q15 = Question::create([

                'label'  => $request->question_15,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q15->id,
                'numOrder' => 15,
            ]);
        }

        if($request->question_16){
            $q16 = Question::create([

                'label'  => $request->question_16,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q16->id,
                'numOrder' => 16,
            ]);
        }

        if($request->question_17){
            $q17 = Question::create([

                'label'  => $request->question_17,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q17->id,
                'numOrder' => 17,
            ]);
        }

        if($request->question_18){
            $q18 = Question::create([

                'label'  => $request->question_18,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q18->id,
                'numOrder' => 18,
            ]);
        }

        if($request->question_19){
            $q19 = Question::create([

                'label'  => $request->question_19,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q19->id,
                'numOrder' => 19,
            ]);
        }

        if($request->question_20){
            $q20 = Question::create([

                'label'  => $request->question_20,
            ]);

            DB::table('question_test')->insert([
                'test_id' => $test->id,
                'question_id' => $q20->id,
                'numOrder' => 20,
            ]);
        }
        //dd('cc');
        return redirect(route('tests.index'));
    }

    public function store2(Request $request)
    {
        // dd('eddd');
        $request->validate([

            'label' => 'required',
        ]);

        $question = Question::create([

            'label' => $request->label,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect(route('questionAnswers.create', $question));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
