<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable=['chapter','pages','status','term_id','chapterStatus'];


    public  function term()
    {
        return $this->belongsTo('App\Term');
    }


}


