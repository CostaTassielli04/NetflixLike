<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyListsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/','/login');

Route::get('/login', function () {
    return route('auth.login');
})->name('/');

Route::get('/films',[FilmsController::class,'index'])->name('films.index'); // con questa route mostro tutte le mie serie o film del database
Route::get('films/{id}',[FilmsController::class,'show'])->name('films.show'); // con questa route ti indirizzo verso le informazioni del film o la serie su cui ho cliccato
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mylist',[MyListsController::class,'index'])->name('mylist.index');