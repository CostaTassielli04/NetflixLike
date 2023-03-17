@extends("layouts/layout")
<<<<<<< HEAD
@extends("layouts.app")
    @section('content')
    <div id="page">
        <div class="film">
            <h3 class="category">Categoria 1</h3>
            <div class="row">
            @foreach ($films as $film){
                <div class="col-12 col-lg-2">
=======
@section('content')
    <div class="film">
        <div class="row">
            
            @foreach ($films as $film)

            <div class="col-12 col-lg-3">
>>>>>>> origin/other_pages
                    <figure>
                        <img src="{{ $film->background_image}}" alt="Film Title"  width="150px" height="200px">
                        <figcaption class="film_title">{{ $film->title }}</figcaption>
                    </figure>
            </div>

            @endforeach

        </div>
    </div>
<<<<<<< HEAD
    @endsection
=======
@endsection
>>>>>>> origin/other_pages
