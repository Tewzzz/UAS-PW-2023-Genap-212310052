@extends('template')
@section('content')
<div class="row mt-5 mb-5 justify-content-center">
    @if(auth()->user()->role == 'admin')
    <div class="col-md-1">
        <a href="{{url("admin/travel")}}"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    @else
    <div class="col-md-1">
        <a href="/"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    @endif
    <div class="col-md-5">
        <img src="{{asset('storage/'.$travel->image)}}" alt="">
    </div>
    <div class="col-md-5">
        <span class="fw-bold fs-2">{{$travel->nama}}</span>
        <div class="mb-5" style="height: 150px;">{{$travel->deskripsi}}</div>
        <div class="row">
            <div class="col-md-6">
                <span>Mulai Dari</span><br>
                <span class="fw-bold">IDR </span><br>
                <span class="fw-bold">{{$travel->harga}}/pax</span>
            </div>
            <div class="col-md-6 text-end">
                <span>Minimal</span><br>
                <span class="fw-bold">{{$travel->min_pax}} pax</span>
            </div>
        </div>
        <div class="row">
            <a href="/booking" type="button" class="btn text-white btn-lg" style="background-color:#04450B; ">Book Now!</a>
        </div>
    </div>
</div>
@endsection
