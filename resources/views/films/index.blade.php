<<<<<<< HEAD
@extends('layouts.app');
@section('content')
hello,you are in index .Here you insert all films or tv series
@endsection
=======
@extends("layouts/layout")
    @section('content')
    <div id="page">
        <div class="film">
            <h3 class="category">Categoria 1</h3>
            <div class="row">
            @foreach ($films as $film){
                <div class="col-12 col-lg-2">
                    <figure>
                        <img src="{{ img }}" alt="Film Title">
                        <figcaption class="film_title">{{ title }}</figcaption>
                    </figure>
                </div>
            </div>
            }
            <hr />
        </div>
    </div>
    @endsection
>>>>>>> c57a02a9cebe0888d253538122af2def42ebeec7
