<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['name','description'];

    public function subject()
    {
        return $this->hasOne('App\Subject');
    }


}
