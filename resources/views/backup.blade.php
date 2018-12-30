            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('percetakan.login') }}">Login Percetakan</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                            <a href="{{ route('percetakan.register') }}">Register Percetakan</a>
                        @endif
                    @endauth
                </div>
            @endif