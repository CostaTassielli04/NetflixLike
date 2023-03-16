<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*$orders=DB::table('films'),
        ->join('category_to_films', 'categories.id', '=', 'category_to_films.category_id')
        ->join('category_to_films', 'films.id', '=', 'category_to_films.film.id')
        ->select('films.title','films.image','categories.type')
        ->orderBy('category.title')
        ->get();*/

        return view('home');
    }

    
}
