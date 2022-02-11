<?php

namespace App\Http\Controllers;

use App\Models\CategoryTest;
use Illuminate\Http\Request;

class CategoryTestController extends Controller
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
     * @param  \App\CategoryTest  $categoryTest
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryTest $categoryTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryTest  $categoryTest
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryTest $categoryTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryTest  $categoryTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryTest $categoryTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryTest  $categoryTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryTest $categoryTest)
    {
        //
    }
}
