<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $fillable = ['label', 'status', 'question_id'];

    public function questions(){
        return $this->belongsToMany('App\Models\Question')->withPivot( 'question_id', 'answer_id', 'alphaOrder');
    }
}
