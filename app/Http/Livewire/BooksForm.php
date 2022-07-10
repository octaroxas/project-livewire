<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BooksForm extends Component
{

    public $name = '';
    public $genero = '';

    public function store()
    {
        // dd('olaaaa');
        $book = Book::create([
            'name' => $this->name,
            'genero' => $this->genero
        ]);

        return redirect('books');
    }

    public function render()
    {
        return view('livewire.books-form');
    }
}
