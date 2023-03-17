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
    public function index() //restituisco i record di tutti i film
    {
        $orders=DB::table('category_to_films')
        ->leftJoin('films', 'films.id', '=', 'category_to_films.film_id')
        ->join('categories', 'categories.id', '=', 'category_to_films.category_id')
        ->select('films.title','films.background_image','categories.type')
        ->orderBy('categories.type')
        ->get();

        return view('home')->with('orders',$orders);
    }

    
}
