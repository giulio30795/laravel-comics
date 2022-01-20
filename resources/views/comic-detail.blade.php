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
                <div>
                    {{ $comic['price'] }}
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div>
                <img src="{{ asset('/images/dc-logo.png') }}" alt="ADV">
            </div>
        </div>
    </main>
@endsection