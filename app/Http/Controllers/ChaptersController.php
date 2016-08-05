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
use Illuminate\Support\Facades\Redirect;

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




    public function deleteChapter($id,$class_id,$sub_id,$term_id,$chapter_id)
    {
        $chapter=Chapter::find($chapter_id);
        $chapter->status=1;
        $chapter->save();


        return Redirect::route('chapters',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id,'term_id'=>$term_id]);


    }
    public function inserChapters(Request $request)
    {

        $chapters=$request->get('chapters');
        $fromPages=$request->get('fromPages');
        $toPages=$request->get('toPages');
        $term_id=$request->get('term_id');

        for($i=0;$i<count($chapters);$i++)
        {
            $chapter=new Chapter();
            $chapter->chapter=$chapters[$i];
            $chapter->formPage=$fromPages[$i];
            $chapter->toPage=$toPages[$i];
            $chapter->status=0;
            $chapter->chapterStatus=0;
            $chapter->term_id=$term_id;
            $chapter->save();
        }

        return 1;

    }
}
