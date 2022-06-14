<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
          crossorigin="anonymous">
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
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'jikan' ? 'active' : '' }}" href="/jikan">Jikan</a>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@yield('script')
</body>

</html>
