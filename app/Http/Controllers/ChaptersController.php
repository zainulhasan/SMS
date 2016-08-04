<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Session;
use App\Classes;
use App\Subject;
use App\Term;
use Illuminate\Support\Facades\Input;

class ChaptersController extends Controller
{
    public function index($id,$class_id,$sub_id,$term_id)
    {

        $session=Session::find($id);
        $classes=Classes::find($class_id);
        $subject=Subject::find($sub_id);
        $term=Term::find($term_id);


        $condations=['term_id'=>$term_id,'status'=>0];
        $chapters=Chapter::where($condations)->get();
        return view('Academic.chapters',compact('session','classes','subject','term','chapters','id','class_id','sub_id','term_id'));
    }



    public  function create($id,$class_id,$sub_id,$term_id)
    {

        return view('Academic.create_chapter',compact('session','classes','subject','term','chapters','id','class_id','sub_id','term_id'));
    }

    public function update(Request $request)
    {

        $status= Input::get('status');
        $index =Input::get('index');
        $chapter=Chapter::find($index);

        $chapter->chapterStatus=$status;
        $chapter->save();

        return "Done";
    }
}
