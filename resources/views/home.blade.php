@extends('template')
@section('content')
{{-- Start Hero --}}
<div class="row mt-5">
    <div class="col-md-6 mt-4">
        <h1 style="font-size: 42px;">Desa Wisata</h1>
        <h1 class='fw-bold text-green' style="font-size: 60px;">Saung Eling</h1>
        <p>"Saung Eling adalah tempat yang di bangun oleh swadaya dan gotong royong
            masyarakat dengan memanfaatkan potensi yang ada di lingkungannya."</p>
        <a href="#travel" class="text-decoration-none text-white"><button class='btn btn-lg-primary'> Make Reservation</button></a>
    </div>
    <div class="col-md-6" style="height: 500px">
        <img class="position-absolute end-0 top-2" src="assets/img/imgbg.png">
    </div>
</div>
{{-- End Hero --}}


{{-- Start Travel Package --}}
<div id="travel" class="row mt-5">
    <div class="col-md-6">
        <h1 class="fw-bold mb-3">Travel Package</h1>
    </div>
    <div class="col-md-6 text-end pt-1">
        <a class="text-decoration-none text-color" href="/travel"><span class="fs-4">see more...</span></a>
    </div>
</div>

<div class="row mb-5 pb-5">
    @foreach ($datatravel as $travel)
    <div class="col-md-3">
        <a class="text-decoration-none text-black" href="{{ route('travel.show', ['travel' => $travel->id])}}">
            <div class="card shadow" style="width: 16rem;">
                <img src="assets/img/travel.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <span class="fw-bold" style="font-size: 17px">{{$travel->nama}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span>Mulai Dari</span><br>
                            <span class="fw-bold">IDR {{$travel->harga}}/pax</span>
                        </div>
                        <div class="col-md-6 text-end">
                            <span>Minimal</span><br>
                            <span class="fw-bold">{{$travel->min_pax}} Pax</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
{{-- End Travel Package --}}


{{-- Start Fasilitas --}}
<div id='fasilitas' class="row mt-5 justify-content-between">
    <div class="col-md-4 ms-5">
        <img src="assets/img/orang.png">
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 44px">Dapatkan Kenyamanan dengan <span class="fw-bold">Fasilitas</span> yang kami miliki</h1>
                <p>Nikmati kenyamanan dan kemudahan dalam setiap langkah, sambil menjelajahi fitur-fitur eksklusif yang kami tawarkan:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <img src="assets/img/wifi.png" width="48px" class="me-3"><span>Wifi</span>
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/wifi.png" width="48px" class="me-3"><span>Kesehatan dan Medis</span>
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/wifi.png" width="48px" class="me-3"><span>Parkir</span>
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/wifi.png" width="48px" class="me-3"><span>Makanan dan Minuman</span>
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/wifi.png" width="48px" class="me-3"><span>Outbond</span>
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/wifi.png" width="48px" class="me-3"><span>Fasilitas dan Kamar</span>
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/wifi.png" width="48px" class="me-3"><span>Olahraga</span>
            </div>
            <div class="col-md-6 mb-3">
                <img src="assets/img/wifi.png" width="48px" class="me-3"><span>Konektivitas</span>
            </div>
        </div>
    </div>
</div>
{{-- End Fasilitas --}}


{{-- Start Destinasi --}}
<div id='destinasi' class="row mt-5">
    <div class="col-md-6">
        <h1 class='fw-bold mb-3'>Destination</h1>
    </div>
    <div class="col-md-6 text-end pt-1 ">
        <a class="text-decoration-none text-color" href="/destinasi"><span class="fs-4">See more...</span></a>
    </div>
</div>
<div class="row">
    @foreach($datadestinasi as $destinasi)
    <div class="col-md-3">
        <a class="text-decoration-none text-black" href="{{ route('destinasi.show', ['destinasi' => $destinasi->id]) }}">
            <div class="card shadow" style="width: 16rem;">
                <img src="{{asset('storage/'.$destinasi->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="fw-bold">{{$destinasi->nama}}</span>
                        </div>
                        <div class="col-md-6 text-end">
                            <span class="bg-success rounded-pill px-3 pb-1 text-white">{{($destinasi->is_active) ? "Ready":"No"}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>


{{-- End Destinasi --}}


{{-- Start Homestay --}}
<div id='hotel' class="row mt-5 ">
    <div class="col-md-6">
        <h1 class="fw-bold mb-3">Homestay</h1>
    </div>
    <div class="col-md-6 text-end pt-1">
        <a class="text-decoration-none text-color" href="/homestay"><span class="fs-4">See more...</span></a>
    </div>
</div>
<div class="row mb-5">
    @foreach($datahomestay as $homestay)
    <div class="col-md-3">
        <a class="text-decoration-none text-black" href="{{ route('homestay.show', ['homestay' => $homestay->id]) }}">
            <div class="card shadow" style="width: 16rem; ">
                <div class="row p-1 align-items-center" style="height: 200px">
                    <img src="{{asset('storage/'.$homestay->image)}}" style="height: 90%;" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <div class="row" style="margin-top: -12px; margin-bottom: 12px">
                        <div class="col-md-12 text-center">
                            <span class="fw-bold">{{$homestay->nama}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            @if($homestay->is_active)
                            <span class="bg-success rounded-pill px-1 pb-1 text-white">Available</span>
                            @else
                            <span class="bg-danger rounded-pill px-3 pb-1 text-white">Not</span>
                            @endif
                        </div>
                        <div class="col-md-7 text-end">
                            <p>Max <span class="fw-bold">{{$homestay->max_pax}} orang</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
{{-- End Homestay- --}}


{{-- Start Kuliner --}}
<div id=kuliner class="row mt-5 ">
    <div class="col-md-6">
        <h1 class="fw-bold mb-3">Culinary</h1>
    </div>
    <div class="col-md-6 text-end pt-1">
        <a class="text-decoration-none text-color" href="/kuliner"><span class="fs-4">See more...</span></a>
    </div>
</div>
<div class="row mb-5">
    @foreach($datakuliner as $kuliner)
    <div class="col-md-3">
        <a class="text-decoration-none text-black" href="{{ route('kuliner.show', ['kuliner' => $kuliner->id]) }}">
            <div class="card shadow" style="width: 16rem;">
                <div class="row p-1 align-items-center" style="height: 200px">
                    <img src="{{asset('storage/'.$kuliner->image)}}" style="height: 90%;" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <div class="row" style="margin-top: -12px; margin-bottom: 12px">
                        <div class="col-md-12 text-center">
                            <span class="fw-bold">{{$kuliner->nama}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <span class="bg-success rounded-pill px-1 pb-1 text-white">{{$kuliner->kategori->nama}}</span>
                        </div>
                        <div class="col-md-5 text-end">
                            <span class="fw-bold">IDR {{$kuliner->harga}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
{{-- End Kuliner --}}


{{-- Start Galeri --}}
<div class="col-md-6">
    <h1 class="fw-bold mb-3">Galeri</h1>
</div>
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
    </div>
</div>
{{-- End Galeri --}}


{{-- Start Location --}}
<div class="col-md-6">
    <h1 class="fw-bold mb-3">Location</h1>
</div>
<div class="row">
    <div class="col-md-12 text-center mb-5">
        <iframe class="rounded-5 border border-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.931504005791!2d106.78089607428868!3d-6.655412065060914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf72ccdeb2ed%3A0x9a612e071d317655!2sSaung%20Eling!5e0!3m2!1sen!2sid!4v1687757945660!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
{{-- End Location --}}
@endsection
