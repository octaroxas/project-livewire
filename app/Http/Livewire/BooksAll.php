<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BooksAll extends Component
{
    public $openModalDelete = false;
    public $idToBeDeleted;

    public function openModalDelete($id)
    {
        $this->idToBeDeleted = $id;
        $this->openModalDelete = true;
    }

    public function destroy()
    {
        // dd($this->idToBeDeleted);
        // Book::findOrFail($id)->delete();
        Book::destroy($this->idToBeDeleted);
        return redirect('/books');
    }

    public function render()
    {
        return view('livewire.books-all', [
            // 'books' => Book::orderBy('id')->get(),
            'books' => Book::all(),
        ]);
    }
}
