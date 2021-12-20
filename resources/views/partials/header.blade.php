<header id="site_header">
    <div class="little_header">
        <div class="container d-flex justify-content-end align-items-center">
            <p>Dc power&trade; visa&reg; </p>
            <p>Additional dc sites<span>&dtrif;</span></p>
        </div>
    </div>
    <nav class="nav_menu">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
                </a>
            </div>
            <ul>
                <li><a href="{{ route('characters') }}">Characters</a></li>
                <li><a href="{{ route('comics') }}">Comics</a></li>
                <li><a href="{{ route('movies') }}">Movies</a></li>
                <li><a href="{{ route('tv') }}">Tv</a></li>
                <li><a href="{{ route('games') }}">Games</a></li>
                <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
                <li><a href="{{ route('videos') }}">Videos</a></li>
                <li><a href="{{ route('fans') }}">Fans</a></li>
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="{{ route('shop') }}">Shop <span>&dtrif;</span></a></li>
            </ul>
            <div class="search">
                <input type="search" placeholder="Search">
                <img height="20" src="{{ asset('img/search-solid.svg') }}" alt>
            </div>
        </div>
    </nav>
    <div class="hero_image"></div>
</header>