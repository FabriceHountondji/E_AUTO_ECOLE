<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    public $fillable = ['label','duration','user_id','categoryTest_id','typePermis_id'];

    public function typePermis(){
        return $this->belongsTo('App\Models\TypePermis', 'typePermis_id');
    }

    public function category(){
        return $this->belongsTo('App\Models\CategoryTest', 'categoryTest_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function questions(){
        return $this->belongsToMany('App\Models\Question')->withPivot('question_id', 'test_id', 'numOrder');
    }
}
