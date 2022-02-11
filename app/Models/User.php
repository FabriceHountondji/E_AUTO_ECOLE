<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable

{

    public $fillable = ['name','phone','birthday','sex','address','avatar','email','password','role_id'];

    public function test(){
        return $this->hasMany('App\Models\Test');
    }

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

}
