<?php

// namespace App\Models;
// namespace App;

use App\Models\Question;
use App\Models\Test;
use App\Models\User;
use App\Models\Answer;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


function redirectTo($redirectTo){

    if($redirectTo == 'candidats.create'){

        return 'candidats.index';
    }

    if($redirectTo == 'users.create'){

        return 'users.index';
    }
}

function getQuestionKey(Test $test, $key){

    foreach($test->questions as $question){

        if($question->pivot->numOrder == $key){

            return 'd-none';
        }
    }
}

function getQuestion($id){

    $question = Question::find($id);
    return $question;
}

function getAllUsers(){

    $users = User::whereRoleId(1)->orWhere('role_id', 2)->get();
    return count($users);
}

function getCandidate(){

    $candidate = User::whereRoleId(3)->get();
    return count($candidate);
}


function MyCV($user, $test){

    $exams = DB::table('question_user')
                ->select('id', 'user_id', 'test_id')
                ->where('user_id', $user->id)
                ->distinct('test_id')
                ->get();

    foreach($exams as $exam){

        if($exam->test_id == $test->id){

            return true;
        }
        return false;
    }

}

function getAlphaOrder($index){
    if($index == 1){
        return 'a';
    }
    if($index == 2){
        return 'b';
    }
    if($index == 3){
        return 'c';
    }
    if($index == 4){
        return 'd';
    }
    if($index == 5){
        return 'e';
    }
}

function verifyAnswer($question_id){

    $questions = DB::table('question_user')->where('question_id' , $question_id)->get();

    foreach($questions as $question){

        return getReponse($question->question_id, $question->alphaOrder);
    }

}

function getReponse($question, $alphaOrder){

    $reponse = DB::table('answer_question')->where([['question_id' , $question], ['alphaOrder', $alphaOrder]])->first();

    $answer = Answer::find($reponse->answer_id);

    return $answer->status;

}

function getPermission(User $user){

    $role = $user->role->name;

    return $role;
}




