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