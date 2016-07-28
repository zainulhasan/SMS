<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;
use Illuminate\Support\Facades\DB;

class SubjectsController extends Controller
{
    public  function  index($id,$class_id)
    {

        $subjects=Subject::with('teacher','classes')->get();
        return view('Academic/subjects',compact('subjects','class_id','id'));
    }


    public function getSubject($id,$class_id)
    {
        $teachers=$tmp=
            DB::select(
                DB::raw
                ('select teachers.id,name from teachers where teachers.id not in (select teacher_id from subjects)'));


        return view('Academic/create_subject',compact('teachers','id','class_id'));
    }



    public function storeSubject(Request $request)
    {


       Subject::create([

            'title' =>$request->get('name'),
            'teacher_id' =>$request->get('teacherId'),
            'classes_id' =>$request->get('classId')


        ]);



        return redirect()->route('subjects',['id'=>$request->input('id'),'class_id'=>$request->input('classId')]);


    }}
