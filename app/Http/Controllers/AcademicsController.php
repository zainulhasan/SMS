<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Teacher;
use App\Term;
use Illuminate\Http\Request;
use DebugBar\DebugBar;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Session;
use App\Classes;

class AcademicsController extends Controller
{
    public function session()
    {
       $sessions=Session::orderBy('id','asc')->get();


        return view('Academic/sessions',compact('sessions'));
    }


    public function getSession()
    {
        return view('Academic/create_session');
    }



    public function storeSession(Request $request)
    {
        $formDate=Input::get('startingDate');
        $toDate=Input::get('endingDate');
        Session::create([
            "startingDate" =>$formDate,
            "endingDate" =>$toDate,


        ]);


        return redirect()->route('seassions');
    }


    public function sessionDetail($id)
    {
        $title="Details";
        $classes=Classes::where('id', 'LIKE', $id)->get();


        $teacher=Session::all();

         return view('Academic/classes',compact('classes'));
    }


    public function sessionEdit($id)

    {
        $title="Edit";
         return view('Test/index',compact('id','title'));
    }

    public function sessionDelete($id)
    {
        $title="Delete";
         return view('Test/index',compact('id','title'));
    }


    public function test()
    {


        $tmp=Term::all();


        return view('Test/index',compact('tmp'));
    }


}
