<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $fillable=['startingDate','endingDate','status','subject_id'];

    public function subject()
    {
        return $this->belongsTo('App\Subject','subject_id');
    }


    public  function chapters()
    {
        return $this->hasMany('App\Chapter');
    }



}
