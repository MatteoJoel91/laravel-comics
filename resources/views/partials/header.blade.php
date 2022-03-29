<header>
    <div class="contenitore">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="logo-dc">
        </div>

        <nav>
            <ul>
                <li>
                    <a href="#">CHARACTERS</a>

                    <a class="
                        @if (Request::route()->getName() == 'comics' || Request::route()->getName() == 'comic')
                            active
                        @endif
                            "
                        href="{{route('comics')}}">
                        COMICS
                    </a>

                    <a href="#">MOVIES</a>
                    <a href="#">TV</a>
                    <a href="#">GAMES</a>
                    <a href="#">COLLECTIBLES</a>
                    <a href="#">VIDEOS</a>
                    <a href="#">FANS</a>
                    <a href="#">NEWS</a>
                    <a href="#">SHOP</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="jumbo">
      
    </div>
</header>