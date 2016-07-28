<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subjects';
    protected $fillable=['title','teacher_id','classes_id'];


    public function classes()
    {
        return $this->belongsTo('App\Classes','classes_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher','teacher_id');
    }

    public function terms()
    {
        return $this->hasMany('App\Term');
    }
}
