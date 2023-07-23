@extends('template')
@section('content')
<div class="row pt-5">
    <div class="col-md-1">
        <a href="/"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <h1 class="fw-bold">Culinary</h1>
    </div>
</div>

<div class="row mb-5">
    @foreach($data as $kuliner)
    <div class="col-md-3 mb-5">
        <a class="text-decoration-none text-black" href="{{ route('kuliner.show', ['kuliner' => $kuliner->id]) }}">
            <div class="card shadow" style="width: 16rem;">
                <img src="{{asset('storage/'.$kuliner->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row" style="margin-top: -12px; margin-bottom: 12px">
                        <div class="col-md-12 text-center">
                            <span class="fw-bold">{{$kuliner->nama}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <span class="bg-success rounded-pill px-3 pb-1 text-white">{{$kuliner->kategori->nama}}</span>
                        </div>
                        <div class="col-md-7 text-end">
                            <span class="fw-normal">IDR {{$kuliner->harga}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

@endsection
