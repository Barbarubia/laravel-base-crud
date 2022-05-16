<header class="bg-white p-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <div class="logo">
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-uppercase">
                    <a class="nav-link" href="{{ route('homepage') }}">Characters</a>
                    <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                    <a class="nav-link" href="{{ route('homepage') }}">Movies</a>
                    <a class="nav-link" href="{{ route('homepage') }}">TV</a>
                    <a class="nav-link" href="{{ route('homepage') }}">Games</a>
                    <a class="nav-link" href="{{ route('homepage') }}">Collectibles</a>
                    <a class="nav-link" href="{{ route('homepage') }}">Videos</a>
                    <a class="nav-link" href="{{ route('homepage') }}">Fans</a>
                    <a class="nav-link" href="{{ route('homepage') }}">News</a>
                    <a class="nav-link" href="{{ route('homepage') }}">Shop</a>
                </div>
            </div>
        </div>
    </nav>
</header>

    {{-- <header>

    <div class="header-top">
        <div class="container">
            <ul>
                <li>
                    <a href="#">DC Power<sup>SM</sup> Visa <i class="fa-regular fa-registered"></i></a>
                </li>
                <li>
                    <a href="#">Additional DC Sites</a>
                </li>
            </ul>
        </div>
    </div>

<div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <ul>
                    @php
                        $headermenu = config('headermenu')
                    @endphp

                    @foreach ($headermenu as $menuitem)
                        <li class="{{ in_array(Route::currentRouteName(), $menuitem['route']) ? 'active' : '' }}">
                            <a href="{{ route($menuitem['route'][0]) }}">{{ $menuitem['route'][0] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>

</header> --}}
