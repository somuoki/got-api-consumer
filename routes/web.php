<?php

use App\Http\Controllers\ConsumeController;
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

Route::get('/', [ConsumeController::class, 'getBooks'])->name('home');
Route::get('book/{id}', [ConsumeController::class, 'getBook'])->name('book');
Route::get('books', [ConsumeController::class, 'getBooks'])->name('books');
Route::get('houses', [ConsumeController::class, 'getHouses'])->name('houses');
Route::get('house/{id}', [ConsumeController::class, 'getHouse'])->name('house');
Route::get('characters', [ConsumeController::class, 'getCharacters'])->name('characters');
Route::get('character/{id}', [ConsumeController::class, 'getCharacter'])->name('character');
Route::post('book/{id}/comment', [ConsumeController::class, 'sendComment']);
