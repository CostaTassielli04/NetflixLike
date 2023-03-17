@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                hello, you are in homepage. Here you insert all films and tv series
            </div>
        </div>
    </div>
</div>
@endsection



@extends("layouts/layout")
    @section('content')
    <div id="page">
        <div class="featured_movie">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h1 class="title">Titolo</h1><br>
                    <p class="caption">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit fuga voluptatibus iure eos corporis, voluptate sed tenetur, reiciendis at corrupti dolores ex officiis cupiditate iusto neque sapiente dolore assumenda libero.</p>
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <button class="action"><svg class="button" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                            <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
                            </svg></button>
                        </div>
                        <div class="col-12 col-lg-3">
                            <button class="action"><svg class="button" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                            </svg></button>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <hr />

        <div class="list">
        <h3 class="category">Categoria 1</h3>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title">
                        <figcaption class="film_title">Titolo</figcaption>
                    </figure>
                </div>
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title">
                        <figcaption class="film_title">Titolo</figcaption>
                    </figure>
                </div>
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title">
                        <figcaption class="film_title">Titolo</figcaption>
                    </figure>
                </div>
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title">
                        <figcaption class="film_title">Titolo</figcaption>
                    </figure>
                </div>
            </div><hr />

            <h3 class="category">Categoria 2</h3><br />
            <div class="row">
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title">
                        <figcaption class="film_title">Titolo</figcaption>
                    </figure>
                </div>
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title">
                        <figcaption class="film_title">Titolo</figcaption>
                    </figure>
                </div>
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title">
                        <figcaption class="film_title">Titolo</figcaption>
                    </figure>
                </div>
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title">
                        <figcaption class="film_title">Titolo</figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </div>
    @endsection
