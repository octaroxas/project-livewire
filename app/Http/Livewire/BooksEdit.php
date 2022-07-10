<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BooksEdit extends Component
{
    public $id_book;
    public $name;
    public $genero;
    public $modalShow = false;

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        $book->name = $this->name;
        $book->genero = $this->genero;
        $book->save();
        return redirect('/');
    }

    public function openModal()
    {
        $this->modalShow = true;
    }

    public function render()
    {
        return view('livewire.books-edit');
    }
}
