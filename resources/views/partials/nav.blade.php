<nav class="navbar">
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>--}}

    <ul class="navbar_nav">
        <li class="nav-item"><a class="nav_link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav_link" href="/posts">Blog</a></li>
        <li class="nav-item"><a class="nav_link" href="/posts">Recursos</a></li>
        <li class="nav-item"><a class="nav_link" href="/posts">Galeria</a></li>
        <li class="nav-item"><a class="nav_link" href="/posts">Sobre mi</a></li>
        <li class="nav-item"><a class="nav_link" href="/posts">Contacto</a></li>
        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('posts.new_test') }}">newTest</a></li> --}}
        {{--@if (auth()->check())
            <li class="nav-item"><a class="nav-link" href="/posts/crear">Creator</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/logout">Logout
                    ({{ auth()->user()->login }})</a></li>
        @else
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        @endif--}}

        {{-- @foreach ($links as $link => $name)
        <li class="nav-item"><a class="nav-link" href="/" {{ $link }}>{{ $name }}</a></li>
    @endforeach --}}
    </ul>
    {{--<p>Date: {{ getFecha('d/m/y') }}</p>--}}

</nav>
