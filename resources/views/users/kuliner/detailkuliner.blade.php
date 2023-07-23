@extends('template')
@section('content')
<div class="row mt-5 mb-5 justify-content-center">
    @if(auth()->user()->role == 'admin')
    <div class="col-md-1">
        <a href="{{url("admin/kuliner")}}"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    @else
    <div class="col-md-1">
        <a href="/"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    @endif
    <div class="col-md-5">
        <img src="{{asset('storage/'.$kuliner->image)}}" alt="">
    </div>
    <div class="col-md-5">
        <span class="fw-bold fs-2">{{$kuliner->nama}}</span>
        <div class="mb-5" style="height: 150px">{{$kuliner->deskripsi}}</div>
        <div class="row">
            <span>Mulai Dari</span><br>
            <span class="fw-bold">IDR </span><br>
            <span class="fw-bold">{{$kuliner->harga}}</span>
        </div>
    </div>
</div>
@endsection
