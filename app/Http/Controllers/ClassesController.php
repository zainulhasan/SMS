<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Session;


class ClassesController extends Controller
{




    public function classes($id)
    {

        $consations=['session_id'=>$id,'status'=>0];

        $classes=Classes::where($consations)->get();


        return view('Academic/classes',compact('classes','id'));


    }


    public function getClass($id)
    {
        $teachers=$tmp=
            DB::select(DB::raw('select teachers.id,name from teachers where teachers.id not in (select teacher_id from classes)'));







        $session=Session::find($id);
        return view('Academic/create_class',compact('id','session','teachers'));
    }



    public function storeClass(Request $request)
    {



       Classes::create([
            'name'=>$request->input('className'),
            'section'=>$request->input('section'),
            'capacity'=>$request->input('capacity'),
            'teacher_id'=>$request->input('teacherName'),
            'session_id'=>$request->input('sessionId')


        ]);




        return redirect()->route('classes',['id'=>$request->input('sessionId')]);
    }


    public function sessionDetail($id)
    {
        $title="Details";
        return "Detaild  of classes";#view('Test/index',compact('id','title'));
    }


    public function sessionEdit($id)

    {
        $title="Edit";
        return "Detaild  of classes";
        #view('Test/index',compact('id','title'));
        #;#view('Test/index',compact('id','title'));
    }

    public function classDelete($id,$class_id)
    {


        $class=Classes::find($class_id);
        $class->status=1;
        $class->save();
        return redirect()->route('classes',['id'=>$id]);

    }


}

