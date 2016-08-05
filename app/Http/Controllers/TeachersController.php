<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::where('status',0)->get();
        return view('Academic/teachers', compact('teachers'));
    }

    public function create()
    {

        return view('Academic/create_teacher');
    }


    public function store(Request $request)
    {

        Teacher::create([
            'name' => $request->get('name'),
            'cnic' => $request->get('cnic'),
            'phone' => $request->get('phone'),
            'designation' => $request->get('designation'),
        ]);

        return redirect()->route('teachers');
    }




    public function delete($teacher_id)
    {

        $teacher=Teacher::find($teacher_id);
        $teacher->status=1;
        $teacher->save();

        return redirect()->route('teachers');
    }

}
