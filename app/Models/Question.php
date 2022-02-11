<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $fillable = ['label', 'test_id'];

    public function answers(){
        return $this->belongsToMany('App\Models\Answer')->withPivot('question_id','answer_id', 'alphaOrder');
    }

    public function test(){
        return $this->belongsToMany('App\Models\Test')->withPivot('question_id', 'test_id', 'numOrder');
    }

}
