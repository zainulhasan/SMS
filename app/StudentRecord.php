<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    protected $fillable=['class','roll','session','school','student_id'];

    public function student(){

        return $this->belongsTo('App\Student');
    }
}
