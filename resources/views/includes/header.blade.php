<nav class="navbar navbar-light bg-light">
    <div class="container d-flex justify-content-start">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="Dc Comics Logo" width="100">
        </a>
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item mx-3">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link {{ request()->routeIs('comics.index') ? 'active' : '' }}"
                    href="{{ route('comics.index') }}">Comics</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link {{ request()->routeIs('comics.create') ? 'active' : '' }}"
                    href="{{ route('comics.create') }}">Crea Fumetto</a>
            </li>
        </ul>
    </div>
</nav>
