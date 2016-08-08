<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class BooksController extends Controller

{
    public function index()
    {
        $condations = ['status' => 0];
        $books = Book::where($condations)->get();
        return view('Academic.books', compact('books'));
    }

    public function delete(Request $request)
    {
        $book_id=$request->get('book_id');

        $book=Book::find($book_id);
        $book->status=1;
        $book->save();
        return "1";

    }

    public function create()
    {

        return view('Academic.create_book');
    }


    public function store(Request $request)
    {

        Book::create([

            'name' =>$request->get('name'),
            'description' =>$request->get('description'),
            'status' =>0,

        ]);

        return "1";
    }


    public function editStore(Request $request)
    {



            $book_id=$request->get('book_id');
            $book=Book::find($book_id);
            $name =$request->get('name');
            $description =$request->get('description');



        return "1";
    }




    public function edit($book_id)
    {

        $book=Book::find($book_id);
        return view('Academic.edit_book',compact('book'));
    }


}
