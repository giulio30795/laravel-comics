@extends('layout.layout')

@section('main-content')
    <main class="comic-detail">
        <div class="jumbo">
            <div class="container">
                <div class="comic-container">
                    <div class="img-container">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        <span class="comic">COMIC BOOK</span>
                        <span class="gallery">VIEW GALLERY</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex comic-description">
            <div class="description">
                <h3>{{ $comic['title'] }}</h3>
                <div class="available">
                    <div class="d-flex">
                        <div>
                            <span>U.S Price:</span>
                            {{ $comic['price'] }}
                        </div>
                        <div class="availability">
                            Available
                        </div>
                    </div>

                    <div>
                        check Availability &#9660;
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="adv">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" alt="ADV">
            </div>
        </div>
    </main>
@endsection