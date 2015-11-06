<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->isbn = $request->input('isbn');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->publisher = $request->input('publisher');
        $book->image = $request->input('image');

        if($book->save()){
            $books = Book::all();

            return view('books.index', compact('books'));
        }
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)

    {
        $book = Book::find($id);
        return view('books.edit',compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        $book->isbn = $request->input('isbn');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->publisher = $request->input('publisher');
        $book->image = $request->input('image');

        if($book->save()){
            $books = Book::all();
            return view('books.index', compact('books'));
        }
    }

    public function destroy($id)
    {
        Book::destroy($id);
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
