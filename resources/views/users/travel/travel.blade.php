@extends('template')
@section('content')
<div class="row pt-5">
    <div class="col-md-1">
        <a href="/"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-6">
        <h1 class="fw-bold">Travel Package</h1>
    </div>
</div>
<div class="row mb-5 pb-5">
    @foreach($data as $travel)
    <div class="col-md-3 mb-5">
        <a class="text-decoration-none text-black" href="{{ route('travel.show', ['travel' => $travel->id]) }}">
            <div class="card shadow" style="width: 16rem;">
                <img src="assets/img/travel.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <span class="fw-bold" style="font-size: 17px">{{$travel ->nama}}</span>
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
@endsection
