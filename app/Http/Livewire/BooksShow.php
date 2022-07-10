<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BooksShow extends Component
{

    public $book;

    public function backToListage()
    {
        return redirect('/books');
    }

    public function render()
    {
        return view('livewire.books-show');
    }
}
