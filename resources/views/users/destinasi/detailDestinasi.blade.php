@extends('template')
@section('content')
<div class="row mt-5 mb-5 justify-content-center">
    @if(auth()->user()->role == 'admin')
    <div class="col-md-1">
        <a href="{{url("admin/destinasi")}}"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    @else
    <div class="col-md-1">
        <a href="/"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    @endif
    <div class="col-md-5">
        <img src="{{asset('storage/'.$destinasi->image)}}" alt="">
    </div>
    <div class="col-md-5">
        <h1 class="fw-bold">{{$destinasi->nama}}</h1>
        <p>{{$destinasi->deskripsi}}</p>
        <div class="row mt-5">
            <span>Start From</span><br>
            <span class="fw-bold">IDR {{$destinasi->harga}}</span>
        </div>
    </div>
</div>
@endsection
