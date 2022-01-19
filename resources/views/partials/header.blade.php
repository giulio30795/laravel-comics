<header>
    <div class="container">
        <a href="{{ route ('home') }}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </a>
        <a class=" @if(Request::route()->getName() === 'home')
            active @endif link" href="{{ route ('home') }}">Comics</a>

        <a class=" @if(Request::route()->getName() === 'news')
            active @endif link" href="{{ route ('news') }}">News</a>
    </div>
</header>