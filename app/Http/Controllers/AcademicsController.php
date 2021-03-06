<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Classes;
use App\Session;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class AcademicsController extends Controller
{
    public function session()
    {
        $sessions = Session::where('status', 0)->get();


        return view('Academic/sessions', compact('sessions'));
    }


    public function getSession()
    {
        return view('Academic/create_session');
    }


    public function storeSession(Request $request)
    {
        $formDate = Input::get('startingDate');
        $toDate = Input::get('endingDate');
        Session::create([
            "startingDate" => $formDate,
            "endingDate" => $toDate,


        ]);


        return "1";
    }


    public function sessionDetail($id)
    {
        $title = "Details";
        $classes = Classes::where('id', 'LIKE', $id)->get();


        $teacher = Session::all();

        return view('Academic/classes', compact('classes'));
    }


    public function sessionDelete(Request $request)
    {

        if($request->ajax())
        {
            $id=$request->get('session_id');

            $session = Session::find($id);



            $session->status = 1;
            $session->save();
            return "1";
        }

        else{
            return "0";
        }

    }


    /**
     *  Get Session edit
     * @param $id
     * @return edit_session Template
     */

    public function sessionEdit($id)

    {
        $session = Session::find($id);

        return view('Academic.edit_session', compact('session'));
    }


    /**
     * Post Edit Session
     * @param Request $request
     * @return bool
     */
    public function storeEditSession(Request $request)

    {

        if ($request->ajax()) {
            $id = $request->get('id');
            $startingDate = $request->get('startingDate');
            $endingDate = $request->get('endingDate');
            $session = Session::find($id);

            $session->startingDate = $startingDate;
            $session->endingDate = $endingDate;
            $session->save();


            return 1;
        } else
            return 0;
    }

    /**** End Session Edit ****/


    /****Testing Actions ****/
    public function posttest(Request $request)
    {

        $subjects=$request->input('subjects');
        return $subjects;
    }





    public function test()
    {
        $student=Student::first();

        return dd();
    }

    public function api()
    {


        $tmp = User::all();


        return response()->json($tmp);
    }

    public function testLogin()
    {
        $user = User::find(1);
        Auth::loginUsingId($user->id);

        return "CHeck now";
    }


}
