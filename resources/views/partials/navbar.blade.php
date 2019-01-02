<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a href="{{ url('/') }}" style="text-decoration: none"><h3 style="padding-right: 10px; color: #fff">YukCetak!<span class="text-desainer">Desainer</span></h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/landing-page') }}">Home<span class="sr-only"></span></a>
        </li>
        @if (!auth()->guest())
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('desainer/profil') }}/{{ Auth::user()->id }}">Profil</a>
        </li>
        @endif
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/job-desain') }}">Job Desain<span class="sr-only"></span></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        @if (auth()->guest())
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/register') }}">Daftar</a>
            </li>
            <li class="nav-item active" style="padding-right: 80px">
                <a class="nav-link" href="{{ url('/login') }}">Masuk</a>
            </li>
        @else
            @if (Auth::user()->id)
            <li class="nav-item active" style="padding-right: 80px">
                <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
            </li>
            @endif
        @endif
    </ul>
    </div>
</nav>