<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body style="background-color: #fff">

    {{-- Navbar --}}

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid me-5 ms-5">
            <a class="navbar-brand" href="{{ route('landing') }}"
                style="font-size: 30px; font-weight:200; font-family: 'Pacifico', cursive; font-weight:800">Rosyid</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="font-family: 'Crimson Text', serif; font-size:2vh; font-weight:700">
                    <a class="nav-link {{ Request::is('landing') ? 'active' : '' }}" href="{{route('landing')}}">Home</a>
                    <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="{{route('profile')}}">Profile</a>
                    <a class="nav-link {{ Request::is('kampus') ? 'active' : '' }}" href="{{route('kampus')}}">College</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Navbar End --}}

    {{-- Content --}}
        @yield('content')
    {{-- Content End --}}

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
        var typed = new Typed('#element', {
            strings: ["I'm a Student", "I'm a Web Developer", "I'm a Programmer"],
            typeSpeed: 60,
            backSpeed: 20,
            loop: true,
            showCursor: true
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
