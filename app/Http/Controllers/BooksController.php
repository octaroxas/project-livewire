<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function __invoke()
    {
        return view('books.books-all');
    }

    public function form()
    {
        return view('books.books-form');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.books-edit', compact('id', 'book'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        $name = $book->name;
        $genero = $book->genero;
        return view('books.books-show', compact('book'));
    }
}
