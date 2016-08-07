<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Session;
use App\Subject;
use App\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index($id,$class_id,$sub_id)
    {

        $session=Session::find($id);
        $classes=Classes::find($class_id);
        $subject=Subject::find($sub_id);
        $condations=['subject_id'=>$sub_id,'status'=>0];
        $terms=Term::where($condations)->get();
        return view('Academic/terms',compact('session','classes','subject','terms','id','class_id','sub_id'));
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
            'status' => '0',
            'subject_id' => $request->input('subject_id')
        ]);


        return "1";
    }




    public function DeleteTerm(Request $request)
    {


        $term_id=$request->get('term_id');
        $term=Term::find($term_id);
        $term->status=1;
        $term->save();
        return "1";
    }
}
