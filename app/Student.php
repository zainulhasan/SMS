<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable=['firstName','lastName','gender','dob','fatherName','language','nationality','religion','cnic','cnicImage','passport','passportImage','contact1','contact2','landline','city','province','country','session_id','class_id'];


    public function session()
    {
        return $this->belongsTo('App\Session');
    }

    public function classes()
    {
        return $this->belongsTo('App\Classes');
    }



    public function studentRecord()
    {
        return $this->hasOne('App\StudentRecord');
    }

    public function StudentGuardian ()
    {
        return $this->hasOne('App\StudentGuardian');
    }

}
