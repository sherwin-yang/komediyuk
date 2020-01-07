<nav class="nav-main">
    <div class="toggle-btn" onclick="toggleNav()"></div>
    <a class="navbar-brand" href="/">
        <span class="yuk">AYO</span>
        <span class="komedi">KOMEDI</span>
    </a>
</nav>

<aside class="nav-sidebar">
    <ul>
        <li><span>Project</span></li>
        <li><a href="/">Home</a></li>
        <li><a href="#">Komika</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Tiket</a></li>
        <li>
            <div class="col-4 d-flex align-items-center justify-content-end login-register-logout">
                @guest
                <div class="guests">
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-outline-light login">Masuk</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button type="button" class="btn btn-success" onclick="{{ route('register') }}">Daftar</button>
                    </a>
                </div>
                @else
                <div class="logout">
                    <a class="dropdown-item logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button type="button" class="btn btn-danger" onclick="{{ route('logout') }}">Logout</button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                @endguest
            </div>
        </li>
    </ul>
</aside>