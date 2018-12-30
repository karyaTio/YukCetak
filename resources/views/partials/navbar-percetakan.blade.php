<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <a href="{{ url('/percetakan/dashboard') }}" style="text-decoration: none"><h3 style="padding-right: 10px; color: #fff">YukCetak!<span class="text-desainer">Percetakan</span></h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/percetakan/profil') }}/{{ Auth::user()->id }}">Home<span class="sr-only"></span></a>
        </li>
        @if (Auth::user()->id)
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/percetakan/orders') }}/{{Auth::user()->id}}">Pesanan Cetak<span class="sr-only"></span></a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/percetakan/design') }}">Pasang Job<span class="sr-only"></span></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        @if (Auth::user()->id)
            <li class="nav-item" style="padding-right: 80px">
                <a class="nav-link" href="{{ url('/percetakan/logout') }}">Logout</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/daftarPercetakan') }}">Daftar</a>
            </li>
            <li class="nav-item" style="padding-right: 80px">
                <a class="nav-link" href="{{ url('/loginPercetakan') }}">Masuk</a>
            </li>
        @endif
    </ul>
    </div>
</nav>