<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=['name','cnic','phone','designation'];

    public function classes()
    {
        return $this->hasOne('App\Classes');
    }


    public function subject()
    {
        return $this->hasOne('App\Subject');
    }
}
