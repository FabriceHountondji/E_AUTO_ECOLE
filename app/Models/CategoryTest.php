<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTest extends Model
{

    public $fillable = ['label'];

    public function test(){
        return $this->hasMany('App\Models\Test');
    }
}
