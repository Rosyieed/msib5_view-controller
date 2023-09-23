@extends('component.app')
@section('title', 'Profile Page')

<body style="background-color:rgb(235, 235, 235)">
    @section('content')
        <div class="container">
            <a class="btn btn-outline-secondary mt-1" href="{{ route('landing') }}" role="button" style="width: 10vh    ">Back</a>
            <div class="row">

                <div class="col-md-5 mt-2">
                    <div class="card rounded shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/rounded-person.jpg') }}"
                                class="img rounded-circle mx-auto d-block pb-3" alt="Cinque Terre">
                            @foreach ($data as $desc)
                                <h5 class="text-center">{{ $desc['studentName'] }}</h5>
                                <hr>
                                <div class="desc" style="font-weight: 500">
                                    <p>Student ID : {{ $desc['studentID'] }}</p>
                                    <p>Class : {{ $desc['class'] }}</p>
                                    <p>Mentor : {{ $desc['mentor'] }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mt-4 ms-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="p-2"><i class="fa-regular fa-copy"></i> General Information</h5>
                        <table class="table table-bordered">
                            @foreach ($data as $general)
                            @endforeach
                            <tr>
                                <td style="width: 20vh">Academic Year</td>
                                <td style="width: 1px">:</td>
                                <td>{{ $general['academic_year'] }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20vh">Gender</td>
                                <td style="width: 1px">:</td>
                                <td>{{ $general['gender'] }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20vh">Religion</td>
                                <td style="width: 1px">:</td>
                                <td>{{ $general['religion'] }}</td>
                            </tr>
                            <tr>
                                <td style="width: 20vh">Blood</td>
                                <td style="width: 1px">:</td>
                                <td>{{ $general['blood'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-5 mt-auto ms-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="p-2"><i class="fa-regular fa-copy"></i> Other Information</h5>
                        <p>Saya, Rosyid Eko Nugroho, saat ini sedang menempuh studi di Universitas Singaperbangsa Karawang,
                            jurusan Informatika. Selain itu, saya juga tengah mengikuti program Study Independent Web
                            Developer
                            di GITS Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
