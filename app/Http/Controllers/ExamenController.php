<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Test;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Dotenv\Result\Result;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function choose()
    {
        $title = 'Choix d\'Examen';
        $tests = Test::all();
        return view('dashboard/exam/choose', compact('tests', 'title'));
    }

    public function compose($cpt, Test $test)
    {


        $cpt = $cpt +1;

        $title = 'Composition '.$test->label;
        if($cpt == 1){
            if(MyCV(Auth::user(), $test) == true){

                return redirect(route('tests.result', $test));
            }
            else{
                $question = DB::table('question_test')->where('test_id', $test->id)->first();
            }
        }
        else{

            if($cpt <= 20){

                $question = DB::table('question_test')
                            ->where('test_id', $test->id)
                            ->where('numOrder', $cpt)
                            ->first();
            }
            else{

                return redirect(route('tests.result', $test));
            }
        }
        // $user_answers = DB::table('question_user')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        return view('dashboard/exam/compose', compact('title', 'question', 'test'));

    }



    public function composeStore(Request $request, $cpt, Test $test, Question $question)
    {
        // dd($request->all());
        if($request->checkboxa){

            DB::table('question_user')->insert([
                'user_id' => Auth::id(),
                'test_id' => $test->id,
                'question_id' => $question->id,
                'alphaOrder' => $request->checkboxa,
                'status' => 0,
                'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
            ]);

        }

        if($request->checkboxb){
            DB::table('question_user')->insert([
                'user_id' => Auth::id(),
                'test_id' => $test->id,
                'question_id' => $question->id,
                'alphaOrder' => $request->checkboxb,
                'status' => 0,
                'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
            ]);
        }

        if($request->checkboxc){

            DB::table('question_user')->insert([
                'user_id' => Auth::id(),
                'test_id' => $test->id,
                'question_id' => $question->id,
                'alphaOrder' => $request->checkboxc,
                'status' => 0,
                'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
            ]);
        }

        if($request->checkboxd){

            DB::table('question_user')->insert([
                'user_id' => Auth::id(),
                'test_id' => $test->id,
                'question_id' => $question->id,
                'alphaOrder' => $request->checkboxd,
                'status' => 0,
                'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
            ]);
        }

        if($request->checkboxe){

            DB::table('question_user')->insert([
                'user_id' => Auth::id(),
                'test_id' => $test->id,
                'question_id' => $question->id,
                'alphaOrder' => $request->checkboxe,
                'status' => 0,
                'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
            ]);
        }



        return redirect(route('tests.compose', ['cpt' => $cpt, 'test' => $test ]));
    }



    public function resultExam(Request $request,Test $test, Question $question){

        $answers = DB::table('question_user')->select('question_id', DB::raw('count(*) as total', 'alphaOrder'))->where([['test_id' , '=' , $test->id], ['user_id' , '=' , Auth::id()]])->groupBy('question_id')->get();

        $note = 0;
        // dd(count($answers));
        foreach($answers as $answer){

            // dd(verifyAnswer($answer->question_id));
            if(verifyAnswer($answer->question_id) == true){

                $note = $note + 1;

                DB::table('question_user')->select('status')->where('id','=',$answer->question_id)->update(['status' => 1,]);

            }
            $note = $note + 0;

        }
        $title = 'Resultat de la composition du test '.$test->label;
        return view('dashboard/exam/result', compact('title', 'test', 'note'));

    }
}
