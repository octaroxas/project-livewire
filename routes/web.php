<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {

        Route::get('/', BooksController::class)->name('index');

        Route::prefix('books')->name('books.')->group(function () {
            Route::get('/', BooksController::class)->name('index');
            Route::get('/form', [BooksController::class, 'form'])->name('form');
            Route::get('/{id}/edit', [BooksController::class, 'edit'])->name('edit');
            Route::get('/{id}/show', [BooksController::class, 'show'])->name('show');
        });


        // Route::post('/books', []);

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
