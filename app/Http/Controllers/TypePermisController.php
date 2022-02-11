<?php

namespace App\Http\Controllers;

use App\Models\TypePermis;
use Illuminate\Http\Request;

class TypePermisController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypePermis  $typePermis
     * @return \Illuminate\Http\Response
     */
    public function show(TypePermis $typePermis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypePermis  $typePermis
     * @return \Illuminate\Http\Response
     */
    public function edit(TypePermis $typePermis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypePermis  $typePermis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypePermis $typePermis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypePermis  $typePermis
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypePermis $typePermis)
    {
        //
    }
}
