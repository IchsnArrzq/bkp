<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo">{{ config('app.name','Laravel') }}</a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            @auth
            @if(Auth()->user()->role === 'admin')
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-palette"></i>
                        <span class="d-lg-none">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-planet"></i>
                        <span class="notification">5</span>
                        <span class="d-lg-none">Notification</span>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Notification 1</a>
                        <a class="dropdown-item" href="#">Notification 2</a>
                        <a class="dropdown-item" href="#">Notification 3</a>
                        <a class="dropdown-item" href="#">Notification 4</a>
                        <a class="dropdown-item" href="#">Another notification</a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nc-icon nc-zoom-split"></i>
                        <span class="d-lg-block">&nbsp;Search</span>
                    </a>
                </li>
            </ul>
            @endif
            @endauth
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">Dropdown</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @else
                @if(Auth::user()->role === 'siswa')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.siswa.profil') }}">
                        <span class="no-icon">{{ Auth::user()->name  }}</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->role === 'guru')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.guru.profil') }}">
                        <span class="no-icon">{{ Auth::user()->name  }}</span>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="" onclick="return logout()">
                        <i class="nc-icon nc-icon nc-button-power"></i>
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                    <script>
                        function logout() {
                            if (confirm('Logout?')) {
                                event.preventDefault();
                                document.getElementById('logout-form').submit();
                            }
                        }
                    </script>
                </li>
            </ul>
        </div>
        @endguest
    </div>
</nav>