@extends('template')
@section('content')
<div class="row pt-5">
    <div class="col-md-1">
        <a href="/"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <h1 class="fw-bold">Destinasi</h1>
    </div>
</div>
<div class="row pt-5">
    @foreach($data as $destinasi)
    <div class="col-md-3">
        <a class="text-decoration-none text-black" href="{{ route('destinasi.show', ['destinasi' => $destinasi->id]) }}">
            <div class="card shadow" style="width: 16rem;">
                <img src="assets/img/imgdestinasi.png" class="card-img-top" alt="...">
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

@endsection
