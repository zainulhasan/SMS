<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Subject;
use App\Teacher;
use App\Term;
use App\User;
use Illuminate\Http\Request;
use DebugBar\DebugBar;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Session;
use App\Classes;
use App\Book;



class AcademicsController extends Controller
{
    public function session()
    {
       $sessions=Session::where('status',0)->get();


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


        return redirect()->route('sessions');
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

    public function sessionDelete($del_id)
    {
        $session=Session::find($del_id);

        $session->status=1;
        $session->save();

        return redirect()->route('sessions');
    }
















    /****Testing Actions ****/
    public function posttest(Request $request)
    {


        $chapters=$request->get('chapters');
        $fromPages=$request->get('fromPages');
        $toPages=$request->get('toPages');
        $term_id=$request->get('term_id');

        for($i=0;$i<count($chapters);$i++)
        {
            $chapter=new Chapter();
            $chapter->chapter=$chapters[$i];
            $chapter->formPage=$fromPages[$i];
            $chapter->toPage=$toPages[$i];
            $chapter->status=0;
            $chapter->chapterStatus=0;
            $chapter->term_id=$term_id;
            $chapter->save();
        }

        return 1;
    }


















    public function test()
    {
        $chapter=Chapter::find(1);


        return dd($chapter->term->startingDate);
    }



    public function api()
    {


        $tmp=User::all();


         return response()->json($tmp);
    }


    public function  testLogin()
    {
        $user=User::find(1);
        Auth::loginUsingId($user->id);

        return "CHeck now";
    }


}
