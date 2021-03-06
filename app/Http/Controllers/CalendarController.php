<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $title = 'Calendrier';
        return view('dashboard/calendar/index', compact('title'));
    }
}
