    @extends('layout.layout')

    @section('main-content')
    <main class="card-container">

        <div class="container">
            @foreach ($comics as $index => $comic )
            <div class="card">
                    <a href="{{ route('comic-detail', ['id' => $index ])}}">
                    <div class="img-container">
                        <img src="{{ $comic['thumb'] }} " alt="{{ $comic['series'] }}">
                    </div>
                    <h6>{{$comic['series']}}</h6>
                </a>
                </div>
            @endforeach
                <div class="btn">
                    Load More
                </div>
        </div>
    </main>
    @endsection