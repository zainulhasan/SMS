<?php

namespace App\Http\Controllers;

use App\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index($id,$class_id,$sub_id)
    {
        $terms=Term::where('subject_id',$sub_id)->get();
        return view('Academic/terms',compact('terms','id','class_id','sub_id'));
    }

    public function getTerm($id,$class_id,$sub_id)
    {
        return view('Academic/create_term',compact('id','class_id','sub_id'));
    }


    public function storeTerm(Request $request)
    {

        Term::create([
            'startingDate' => $request->input('startingDate'),
            'endingDate' => $request->input('endingDate'),
            'chapter' => $request->input('chapter'),
            'page' => $request->input('page'),
            'status' => '0',
            'subject_id' => $request->input('subject_id')
        ]);


        return redirect()->route('terms', ['id' => $request->input('session_id'), 'class_id' => $request->input('class_id'), 'sub_id' => $request->input('subject_id')]);
    }




    public function DeleteTerm($id,$class_id,$sub_id,$term_id)
    {


        Term::destroy($term_id);
        return redirect()->route('terms', ['id' => $id, 'class_id' => $class_id, 'sub_id' => $sub_id]);
    }
}
