<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lravel 9 | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<style>
    .navbar {
        background: rgb(118, 52, 250);
        background: linear-gradient(90deg, rgba(118, 52, 250, 1) 0%, rgba(114, 45, 250, 1) 100%);
        box-shadow: -1px -5px 56px 4px rgba(114, 45, 250, 0.49);
        -webkit-box-shadow: -1px -5px 56px 4px rgba(114, 45, 250, 0.49);
        -moz-box-shadow: -1px -5px 56px 4px rgba(114, 45, 250, 0.49);
    }
</style>

<body>

    {{-- navbar  --}}

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Yasz Avellia!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @yield('home_nav')" aria-current="page" href="@yield('go_home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('anime_nav')" href="/animes">anime</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('kontak_nav')" href="/kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('about_nav')" href="/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- End Navbar  --}}


    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </script>
</body>

</html>