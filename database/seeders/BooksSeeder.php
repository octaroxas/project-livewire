<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'name' => 'One Piece',
            'genero' => 'Aventura'
        ]);

        Book::create([
            'name' => 'Dragon Ball',
            'genero' => 'Aventura'
        ]);

        Book::create([
            'name' => 'HunterxHunter',
            'genero' => 'Aventura'
        ]);
    }
}
