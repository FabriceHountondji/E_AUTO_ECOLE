<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePermis extends Model
{

    public $fillable = ['label','description'];

    public function test(){
        return $this->hasMany('App\Models\Test');
    }
}
