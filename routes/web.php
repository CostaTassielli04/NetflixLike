<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\Auth\LoginController;
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


//Route::view('/','auth.login');
Route::redirect('/casa','/home');

Route::get('/films',[FilmsController::class,'index'])->name('films.index'); // con questa route mostro tutte le mie serie o film del database
Route::get('films/{id}',[FilmsController::class,'show'])->name('films.show'); // con questa route ti indirizzo verso le informazioni del film o la serie su cui ho cliccato

Auth::routes(); //utente

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //ti indirizzo alla homepage

Route::get('/mylist',[MyListsController::class,'index'])->name('mylist.index');

Route::get('/actors',[ActorController::class,'index'])->name('actors.index'); //con questa route ti mostro il cast di un episodio su cui hai cliccato
Route::get('/actors/{id}',[ActorController::class,'show'])->name('actors.show'); //con questa route ti mostro tutte le informazioni dell'attore

