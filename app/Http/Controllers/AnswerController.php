<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnswerController extends Controller
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
    public function testQuestionCreate(Question $question)
    {

        $title = 'Ajouter des responses à la question '. $question->label;
        return view('dashboard/questions/answers', compact('title', 'question'));
    }

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
    public function getAnswers(Request $request, $question)
    {

        $request->validate([
            'answer_1' => 'required',
            'answer_2' => 'required',
            'answer_3' => 'required',
        ]);

        $answers = [

            'answer_1' => $request->answer_1,
            'answer_2' => $request->answer_2,
            'answer_3' => $request->answer_3,
        ];

        if($request->answer_4){

            $answers = [

                'answer_1' => $answers['answer_1'],
                'answer_2' => $answers['answer_2'],
                'answer_3' => $answers['answer_3'],
                'answer_4' => $request->answer_4,
            ];

            if($request->answer_5){

                $answers = [

                    'answer_1' => $answers['answer_1'],
                    'answer_2' => $answers['answer_2'],
                    'answer_3' => $answers['answer_3'],
                    'answer_4' => $answers['answer_4'],
                    'answer_5' => $request->answer_5,
                ];
            }

        }

        else{

            if($request->answer_5){
                return back()->with('answer5', 'Vueillez d\'abord remplir la question N° 4');
            }
        }

        Cookie::queue(Cookie::make('answers', serialize($answers), 120));
        return redirect(route('answers.show', $question));

    }

    public function store(Request $request, Question $question){

        $answers = unserialize(Cookie::get('answers'));

        if($request->answer_1 == true){

            $ans_1 = Answer::create([
                'label' => $answers['answer_1'],
                'status' => true,
            ]);

            DB::table('answer_question')->insert([
                'alphaOrder' => 'a',
                'question_id' => $question->id,
                'answer_id' => $ans_1->id,
            ]);
        }

        return redirect(route('questions.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $answers = unserialize(Cookie::get('answers'));
        $title =  'Choisir la meilleur reponse';
        return view('dashboard/questions/answers2', compact('answers', 'title', 'question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
