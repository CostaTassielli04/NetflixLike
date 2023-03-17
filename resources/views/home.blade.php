    @if (session('status'))
        {{ session('status') }}
                        
    @endif
        <script>
            alert("You are logged in, welcome!");
        </script>
 

@extends("layouts/layout")
@section('content')

    
        <div class="featured_movie">
            <div class="row">
                    <div class="col-12 col-lg-6 col-sm-4">
                        <h1 class="title">{{$orders[8]->title}}</h1><br>
                        <p class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sapiente sunt aperiam obcaecati quia enim repellat dignissimos dicta, soluta quo, mollitia atque? Laudantium ipsum est laboriosam, eligendi cupiditate deleniti illo</p>
                    </div>

                    <div class="col-12 col-lg-6 col-sm-4">
                        <img src="{{ $orders[8]->background_image}}">
                    </div>

            </div>
        </div>
        <hr />
        
        <div class="list">
                <h3 class="category">{{$orders[0]->type}}</h3>
                <div class="row">
                    @foreach ($orders as $order) 
                        <div class="col-12 col-lg-3 col-sm-2">
        
                            <figure>
                                <img src="{{$order->background_image}}" alt="Film Title" width="150px" height="200px" id="cover_image">
                                <figcaption class="film_title">{{$order->title}}</figcaption>
                            </figure>
                        
                        </div><hr id="hr">

                    @endforeach
            

                </div>

        </div>
    @endsection
