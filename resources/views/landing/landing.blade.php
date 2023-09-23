@extends('component.app')
@section('title', 'Landing Page')

@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid d-flex align-items-center"
        style="background-image: url({{asset('images/jumbo.jpg')}}); height: 40vh; font-family: 'Open Sans', sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="font-weight: 800">Welcome!</h1>
                    <h2 style="font-weight: 400"><span id="element"></span></h2>
                    <a href="https://github.com/Rosyieed">
                        <i class="fa-brands fa-github fa-2x" style="color: black"></i>
                    </a>
                    <a href="https://www.instagram.com/ohsy.id/" class="p-2">
                        <i class="fa-brands fa-instagram fa-2x" style="color: black"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/rosyid-eko-nugroho/" class="p-2">
                        <i class="fa-brands fa-linkedin fa-2x" style="color: black"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Jumbotron End --}}

    {{-- Content --}}
    <div class="container mt-3 text-center font-family: 'Open Sans', sans-serif;">
        <div class="text">
            <h2><span class="pb-2 d-inline-block" style="border-bottom: 2px solid #000;">About Me</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="card m-3 shadow" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('images/person1.jpg') }}" class="img rounded mx-auto d-block pb-3" alt="Foto Manusia"
                        width="100%">
                    <h5 class="card-title">Profile</h5>
                    <p class="card-text">Check out my profile below</p>
                    <a class="btn btn-outline-secondary" href="{{ route('profile') }}" role="button">Profile</a>
                </div>
            </div>
            <div class="card m-3 shadow" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('images/logounsika.png') }}" class="img rounded mx-auto d-block pb-2"
                        alt="logo Unsika" width="68%">
                    <h5 class="card-title">College</h5>
                    <p class="card-text">Check out my college below</p>
                    <a class="btn btn-outline-secondary" href="{{ route('kampus') }}" role="button">Kampus</a>
                </div>
            </div>
        </div>
        {{-- Content End --}}
    @endsection
