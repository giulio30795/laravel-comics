@extends('layout.layout')

@section('main-content')
    <main class="comic-detail">
        <div class="jumbo">
            <div class="container">
                <div class="comic-container">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </div>
            </div>
        </div>

        <div class="container d-flex comic-description">
            <div>
                <h3>{{ $comic['title'] }}</h3>
                <div class="available">
                    <div>
                        <span>U.S Price:</span>
                        {{ $comic['price'] }}
                    </div>
                    <div>
                        Available
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="adv">
                <img src="{{ asset('/images/adv.jpg') }}" alt="ADV">
            </div>
        </div>
    </main>
@endsection