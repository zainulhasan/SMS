<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGuardian extends Model
{
    protected $fillable=['firstName','lastName','gender','dob','fatherName','language','nationality','religion','cnic','cnicImage','passport','passportImage','contact1','contact2','landline','city','province','country'];


    public function student()
    {
        return $this->belongsTo('App\Student');
    }



}
