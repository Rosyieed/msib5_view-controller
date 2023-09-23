@extends('component.app')

@section('title', 'Informasi Kampus Page')

<body
    style="background-image: url({{ asset('images/kampus.jpg') }}); background-size: cover; background-repeat:no-repeat;">
    @section('content')
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card m-md-n5 mt-5" style="border-radius: 15px; opacity:0.9">
                        <div class="card-body p-4">
                            <a class="btn btn-outline-secondary" href="{{ route('landing') }}" role="button" style="width: 10vh">Back</a>
                            <div class="logo-unsika">
                                <img src="{{ asset('images/unsika.png') }}" class="mx-auto d-block pb-2"
                                    style="height: 22%; width:22%;">
                            </div>
                            <h2 class="text-center">Universitas Singaperbangsa Karawang</h2>
                            <hr style="border: 1px solid black;">
                            <p style="text-align: justify">Universitas Singaperbangsa Karawang adalah lembaga pendidikan tinggi di Indonesia yang
                                terletak di Kabupaten Karawang, Jawa Barat. Universitas ini dikenal karena komitmennya
                                terhadap pendidikan berkualitas dan pemberdayaan masyarakat. Dengan berbagai program studi
                                yang luas, termasuk bidang Informatika, Universitas Singaperbangsa memberikan kesempatan
                                bagi mahasiswa untuk mengembangkan potensi mereka. <br> <br> Selain pendidikan, universitas ini juga aktif dalam kegiatan penelitian dan pengabdian
                                kepada masyarakat. Fasilitas modern, fakultas berpengalaman, dan kerjasama dengan industri
                                membuat Universitas Singaperbangsa Karawang menjadi tempat yang ideal untuk menggali ilmu
                                dan berkontribusi pada perkembangan Indonesia. Dengan demikian, universitas ini terus
                                berusaha menjadi pusat pendidikan unggulan yang mendukung pertumbuhan ekonomi dan sosial.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
