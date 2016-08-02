<?php

namespace App\Http\Controllers;

use App\Book;
use App\Classes;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectsController extends Controller
{
    public function index($id, $class_id)
    {

        $condations=['classes_id'=>$class_id,'status'=>0];
        $classes=Classes::find($class_id);
        $subjects = Subject::where($condations)->get();
        return view('Academic/subjects', compact('subjects', 'class_id', 'id','classes'));
    }


    public function getSubject($id, $class_id)
    {

        $books=Book::all();
        $teachers = $tmp =
            DB::select(
                DB::raw
                ('select teachers.id,name from teachers where teachers.id not in (select teacher_id from subjects)'));


        return view('Academic/create_subject', compact('teachers', 'id', 'class_id','books'));
    }


    public function storeSubject(Request $request)
    {
        Subject::create([

            'title' => $request->get('name'),
            'teacher_id' => $request->get('teacherId'),
            'classes_id' => $request->get('classId'),
            'book_id' => $request->get('bookId')

        ]);

        return redirect()->route('subjects', ['id' => $request->input('id'), 'class_id' => $request->input('classId')]);
    }


    public function deleteSubject($id,$class_id,$sub_id)
    {
        $subject=Subject::find($sub_id);
        $subject->status=0;
        $subject->save();
        return redirect()->route('subjects',['id'=>$id,'class_id'=>$class_id]);


    }

}
