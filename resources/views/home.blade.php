    @if (session('status'))
        {{ session('status') }}
                        
    @endif
        <script>
            alert("You are logged in, welcome!");
        </script>
 

@extends("layouts/layout")
@section('content')

    
    <div id="page">
        <div class="featured_movie">
            <div class="row">
                
                @foreach ($orders as $order) {

                    <div class="col-12 col-lg-4 col-sm-4">
                        <h1 class="title">{{ $order->title }}</h1><br>
                        <p class="caption">{{ $order->summary }}</p>
                    </div>

                }

                @endforeach
                
            </div>
        </div>
        <hr />

        
        <div class="list">
        <h3 class="category">Categoria 1</h3>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <figure>
                        <img src="#" alt="Film Title" class="film_photo">
                        <figcaption class="film_title">{{title}}</figcaption>
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
