<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\DB;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $type=$request->input('type');

        $films=DB::table('category_to_films')
        ->leftJoin('films', 'films.id', '=', 'category_to_films.film_id')
        ->join('categories', 'categories.id', '=', 'category_to_films.category_id')
        ->select('films.title','films.background_image','categories.type')
        ->where('films.type','=',"$type")
        ->orderBy('categories.type')
        ->get();

        return view('films.index',compact($films));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $video_id= Film::find($id);
        $video= DB::table('videos')
        ->select('*')
        ->where('videos.id','=',$video_id)
        ->get();
        return view('films.show',compact($video));
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
