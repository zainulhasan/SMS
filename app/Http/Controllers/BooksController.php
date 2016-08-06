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

    public function delete($book_id)
    {

        $book=Book::find($book_id);
        $book->status=1;
        $book->save();
        return Redirect::route('books');

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

        return Redirect::route('books');
    }


}