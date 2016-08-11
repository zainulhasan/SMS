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
use Illuminate\Support\Facades\DB;

class ChaptersController extends Controller
{
    public function index($id,$class_id,$sub_id,$term_id)
    {


        $condition=['chapterStatus'=>0,'term_id'=>$term_id];
        $count=Chapter::where($condition)->count();
        $term=Term::find($term_id);
//
//        $chapterCount = DB::select(
//                DB::raw
//                ('SELECT COUNT(*) FROM chapters WHERE term_id=1 and chapterStatus = 0'));
        if($count==0)
        {

           $term->termStatus=1;
            $term->save();
        }



        $session=Session::find($id);
        $classes=Classes::find($class_id);
        $subject=Subject::find($sub_id);



        $condations=['term_id'=>$term_id,'status'=>0];
        $chapters=Chapter::where($condations)->get();
        return view('Academic.chapters',compact('session','classes','subject','term','chapters','id','class_id','sub_id','term_id'));
    }



    public  function create($id,$class_id,$sub_id,$term_id)
    {

        return view('Academic.create_chapter',compact('id','class_id','sub_id','term_id'));
    }



    public  function edit($id,$class_id,$sub_id,$term_id,$chapter_id)
    {

        $chapter=Chapter::find($chapter_id);
        return view('Academic.edit_chapter',compact('id','class_id','sub_id','term_id','chapter'));
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




    public function deleteChapter(Request $request)
    {
        $chapter_id=$request->get('chapter_id');
        $chapter=Chapter::find($chapter_id);
        $chapter->status=1;
        $chapter->save();


        return "1";


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



    public function editStore(Request $request)
    {

        $chapters=$request->get('chapters');
        $fromPages=$request->get('fromPages');
        $toPages=$request->get('toPages');
        $term_id=$request->get('term_id');
        $chapter_id=$request->get('chapter_id');


            $chapter=Chapter::find($chapter_id);
            $chapter->chapter=$chapters;
            $chapter->formPage=$fromPages;
            $chapter->toPage=$toPages;
            $chapter->term_id=$term_id;
            $chapter->save();


        return 1;

    }


}
