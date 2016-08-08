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

        $session=Session::find($id);

        $consations=['session_id'=>$id,'status'=>0];

        $classes=Classes::where($consations)->get();


        return view('Academic/classes',compact('classes','id','session'));


    }


    public function getClass($id)
    {
//        $teachers=$tmp=
//            DB::select(DB::raw('select teachers.id,name from teachers where teachers.id not in (select teacher_id from classes)'));


        $teachers=Teacher::all();
        $session=Session::find($id);
        return view('Academic/create_class',compact('id','session','teachers'));
    }



    public function storeClass(Request $request)
    {

        if($request->ajax())
        {
            $className=$request->input('className');
            $section=$request->input('section');
            $capacity=$request->input('capacity');
            $teacher_id=$request->input('teacherName');
            $session_id=$request->input('sessionId');



            $classes=new Classes();


            $classes->name=$className;
            $classes->section=$section;
            $classes->capacity=$capacity;
            $classes->teacher_id=$teacher_id;
            $classes->session_id=$session_id;
            $classes->save();
        }




        return "1";
    }





    public function classEdit($id,$class_id)

    {
        $session=Session::find($id);
        $class=Classes::find($class_id);
        $teachers=Teacher::all();

        return view('Academic.edit_class',compact('teachers','id','class','session'));
    }



    public function classEditPost(Request $request)
    {

            $className=$request->input('className');
            $section=$request->input('section');
            $capacity=$request->input('capacity');
            $teacher_id=$request->input('teacherName');
            $session_id=$request->input('sessionId');
            $class_id=$request->input('class_id');


            $classes=Classes::find($class_id);


            $classes->name=$className;
            $classes->section=$section;
            $classes->capacity=$capacity;
            $classes->teacher_id=$teacher_id;
            $classes->session_id=$session_id;


            $classes->save();

            return "1";

    }


    public function classDelete(Request $request)
    {

        if($request->ajax())
        {


            $class_id=$request->get('class_id');
            $class=Classes::find($class_id);
            $class->status=1;
            $class->save();
            return "1";
        }

    }


}

