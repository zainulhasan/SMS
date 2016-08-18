<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $fillable = ['name', 'section', 'capacity', 'teacher_id', 'session_id'];


    public function session()
    {
        return $this->belongsTo('App\Session', 'session_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }


    public function subjects()
    {
        return $this->hasMany('App\Subject', 'subject_id');
    }


    public function students()
    {
        return $this->hasMany('App\Student');
    }

}
