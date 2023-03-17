<?php

namespace App\Http\Controllers;

use App\Models\List_to_film;
use App\Models\Mylist;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class MyListsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mylist=DB::table('list_to_films')
        ->join('mylists','mylists.id','=','list_to_films.mylist_id')
        ->join('users','users.id','=','mylists.user_id')
        ->join('films','films.id','=','list_to_films.film_id')
        ->select('films.title','films.background_image')
        ->orderBy('films.title')
        ->get();

        if($mylist->exists()){ //se ci sono film o serie tv nella mia lista li visualizzo altrimenti mostro la stringa che non ci sono resultati
            return view('mylist.index')->with('mylist',$mylist);
        }else{
            $list=new Mylist();
            if(!isset($mylist->id)){ //se non ho accesso ancora nella sezione la mia lista la creo
                /*$user_id=Auth::user()->id;
                $list->user_id=$user_id;
                $last_id=DB::table('mylists')->orderBy('id','DESC')->first();
                $list->id=$last_id+1;
                $list->save();*/
                $last_id=DB::table('mylists')->orderBy('id','DESC')->first();
                $list->create([
                    'user_id'=> auth()->user()->id,
                    'id'=> $last_id+1,
                ]);
            }
            return "You haven't any film or tv serie in your list";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,string $id) //con questa funziona aggiungo un film alla mia lista
    {
        $film= new List_to_film();
        $film->film_id=Film::find($id);
        $film->mylist_id=DB::table('mylists')
                        ->join('users','user.id','=','mylists.user_id')
                        ->select('mylists.id')
                        ->get();
        $film->save();
        
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
