@extends('template')
@section('content')
<div class="row mt-5 mb-5 justify-content-center">
    @if(auth()->user()->role == 'admin')
    <div class="col-md-1">
        <a href="{{url("admin/homestay")}}"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    @else
    <div class="col-md-1">
        <a href="/"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    @endif
    <div class="col-md-5">
        <img src="{{asset('storage/'.$homestay->image)}}" alt="">
    </div>
    <div class=" col-md-5">
        <span class="fw-bold fs-2">Delux Garden Room</span>
        <div class="col-md-12">
            <span class=" fs-3">Fasilitas</span> <br>
            <span>{{$homestay->deskripsi}}</span>
        </div>
        <div class="col-md-6">
            <span>Mulai Dari</span><br>
            <span class="fw-bold">IDR </span><br>
            <span class="fw-bold">{{$homestay->harga}}/malam</span>
        </div>
        <div class="row">
            <a href="/booking" type="button" class="btn text-white btn-lg" style="background-color:#04450B; ">Book Now!</a>
        </div>
    </div>
</div>
@endsection
