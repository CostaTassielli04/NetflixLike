@extends("layouts/layout")
@section('content')
    <div id="page">
        <div class="film">
            <div class="row">
                @foreach ($films as $film){
                    <div class="col-12 col-lg-2">
                        <figure>
                            <img src="{{ img }}" alt="Film Title">
                            <figcaption class="film_title">{{ $film->title }}</figcaption>
                        </figure>
                    </div>
                </div>
                }
                <hr />
            </div>
        </div>
    </div>
@endsection