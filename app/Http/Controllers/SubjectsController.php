<?php

namespace App\Http\Controllers;

use App\Book;
use App\Classes;
use App\Session;
use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectsController extends Controller
{
    public function index($id, $class_id)
    {


        $session=Session::find($id);
        $condations=['classes_id'=>$class_id,'status'=>0];
        $classes=Classes::find($class_id);
        $subjects = Subject::where($condations)->get();
        return view('Academic/subjects', compact('session','subjects', 'class_id', 'id','classes'));
    }


    public function getSubject($id, $class_id)
    {

        $books=Book::all();
//        $teachers = $tmp =
//            DB::select(
//                DB::raw
//                ('select teachers.id,name from teachers where teachers.id not in (select teacher_id from subjects)'));


        $classes=Classes::find($class_id);
        $session=Session::find($id);
        $teachers=Teacher::all();
        return view('Academic/create_subject', compact('session','classes','teachers', 'id', 'class_id','books'));
    }


    public function storeSubject(Request $request)
    {
        Subject::create([

            'title' => $request->get('name'),
            'teacher_id' => $request->get('teacherId'),
            'classes_id' => $request->get('classId'),
            'book_id' => $request->get('bookId')

        ]);

        return "1";
    }


    public function deleteSubject(Request $request)
    {

        if($request->ajax())
        {
            $sub_id=$request->get('subject_id');
            $subject=Subject::find($sub_id);
            $subject->status=1;
            $subject->save();

            return "1";
        }

    }




    public function editSubject($id, $class_id,$sub_id)
    {

        $books=Book::all();
        $teachers=Teacher::all();
        $subject=Subject::find($sub_id);
        return view('Academic.edit_subject', compact('subject','teachers', 'id', 'class_id','books'));
    }

    public function store(Request $request)
    {
        if($request->ajax())
        {
            $title = $request->get('name');
            $teacher_id = $request->get('teacherId');
            $classes_id = $request->get('classId');
            $book_id = $request->get('bookId');
            $sub_id = $request->get('sub_id');
            $subject=Subject::find($sub_id);

            $subject->title=$title;
            $subject->teacher_id=$teacher_id;
            $subject->classes_id=$classes_id;
            $subject->book_id=$book_id;
            $subject->save();



            return "1";
        }
    }


}
