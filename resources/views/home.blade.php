    @extends('layout.layout')

    @section('main-content')
    <main class="card-container">

        <div class="container">
            @foreach ($comics as $comic )
                <div class="card">
                    <div class="img-container">
                        <img src="{{ $comic['thumb'] }} " alt="{{ $comic['series'] }}">
                    </div>
                    <h6>{{$comic['series']}}</h6>
                </div>
            @endforeach
        </div>
    </main>
    @endsection