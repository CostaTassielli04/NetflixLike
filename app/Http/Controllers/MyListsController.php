<?php

namespace App\Http\Controllers;

use App\Models\List_to_film;
use App\Models\Mylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyListsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mylist=DB::table('list_to_films')
        ->join('mylists','mylists.id','=','list_to_films.mylist_id')
        ->join('users','users.id','=','mylist.user_id')
        ->join('films','films.id','=','list_to_films.film_id')
        ->select('films.title','films.background_image')
        ->orderBy('films.title')
        ->get();
        return view('mylist.index',$mylist);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $film= new List_to_film();
      //  $film->
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
