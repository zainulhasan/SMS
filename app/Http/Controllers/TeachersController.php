<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
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

        Teacher::destroy($teacher_id);

        return redirect()->route('teachers');
    }

}
