@extends("layouts/layout")
@section('content')
    <div class="film">
        <div class="row">
            
            @foreach ($films as $film)

            <div class="col-12 col-lg-3">
                    <figure>
                        <img src="{{ $film->background_image}}" alt="Film Title"  width="150px" height="200px">
                        <figcaption class="film_title">{{ $film->title }}</figcaption>
                    </figure>
            </div>

            @endforeach

        </div>
    </div>
@endsection
