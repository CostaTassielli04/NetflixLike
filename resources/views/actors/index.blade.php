@extends("layouts/layout")
@section('content')
    <div class="list">
        <div class="row">
            
            @foreach ($actors as $actor)

            <div class="col-12 col-lg-3">
                    <figure>
                        <img src="{{ $actor->img}}" alt="Film Title"  width="150px" height="200px">
                        <figcaption class="film_title"> {{ $actor->name }} {{$actor->surname}}<br> <b>{{$actor->role}}</b></figcaption>
                    </figure>
            </div>

            @endforeach

        </div>
    </div>
@endsection