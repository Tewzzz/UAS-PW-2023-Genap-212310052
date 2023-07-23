@extends('template')
@section('content')
<div class="row pt-5">
    <div class="col-md-1">
        <a href="/"><img src="{{url('../assets/img/arrow.png')}}" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <h1 class="fw-bold">Homestay</h1>
    </div>
</div>

<div class="row mb-5 mt-5">
    @foreach($data as $homestay)
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

@endsection
