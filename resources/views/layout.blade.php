<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css" />

    <title>{{ $title }}</title>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
    <div class="container-xxl">
        <!-- Page title / brand -->
        <a href="/" class="navbar-brand">
            <img src="/img/logoHZ.png" alt="logo hz" />
        </a>

        <!-- collapsed navbar button (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('grades*') ? 'active' : '' }}" href={{ route('grades.index') }}>Grades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'profile' ? 'active' : '' }}" href="/profile">Profiles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'faq' ? 'active' : '' }}" href="/faq">FaQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('articles*') ? 'active' : '' }}" href="/articles">Articles</a>
                </li>
                <li class="nav-item dropdown">
                    @if(Auth::check())
                        <div class="dropdown">
                            <button class="btn dropdown-toggle nav-link notranslate" role="button" id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                                {{ Auth::user()->name }}
                            </button>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                {{--                                    <a href="{{ route('supports.index') }}" class="dropdown-item"><i class="fa fa-support"></i> Support</a>--}}
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Uitloggen</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>

                @elseif(!Auth::check())
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle nav-link notranslate" role="button" id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                            Account
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/login"><i class="fa fa-user"></i> Login</a>
                        </ul>
                    </li>
                    @endif
                    </li>
            </ul>
        </div>
    </div>
</nav>

<!-- All the content displayed on the site-->
    @yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
@yield('script')
</body>

</html>
