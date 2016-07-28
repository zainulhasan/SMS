<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classes;
class Session extends Model
{
    protected $fillable=['startingDate','endingDate'];

    public function classes()
    {
        return $this->hasMany('App\Classes','session_id');
    }
}
