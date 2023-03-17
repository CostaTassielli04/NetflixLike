<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors=DB::table('actor_to_videos')
        ->join('actors','actors.id','=','actor_to_videos.actor_id')
        ->join('videos','videos.id','=','actor_to_videos.video_id')
        ->select('actors.name', 'actors.surname','actors.img','actors.role')
        ->orderBy('actors.surname')
        ->get();
        
        return view('actors.index',$actors);
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
        $actor= Actor::find($id);
        return view('actors.show',compact('actor'));
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
