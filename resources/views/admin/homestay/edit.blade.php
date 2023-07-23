@extends('tamplateadmin')
@section('content')

<div class="col-md-12 text-center">
    <h1 class="mt-3 fw-bold">Edit Post Homestay</h1>
</div>
<div class="row">
    <div class="col-md-2">
        <a href="/admin/homestay">
            <img src="{{url('../assets/img/arrow.png')}}" alt="">
        </a>
    </div>
    {{-- start form --}}
    <div class="d-flex col-md-8 mb-3 justify-content-center">
        <div class="col-md-10 mt-3 ">
            <div class="card shadow ">
                <div class="card-header">
                    Form Homestay
                </div>
                <form action="{{route('homestay.update', ['homestay' => $homestay->id])}}" enctype="multipart/form-data" class="p-2">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" required value="{{ old('nama', $homestay->nama)}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea class="form-control description" name="dekripsi">{{$homestay->deskripsi}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga</label>
                        <input type="text" class="form-control price" name="harga" placeholder="IDR" required value="{{ old('harga', $homestay->harga)}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <div class="d-flex">
                            <label class="me-3">
                                <input type="radio" class="is_active_Y" name="is_active" value="1">Ready
                            </label>
                            <label class="me-3">
                                <input type="radio" class="is_active_N" name="is_active" value="0">No
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Maksimal Pax</label>
                        <input type="text" class="form-control" name="max_pax" placeholder="Pax" required value="{{ old('max_pax', $homestay->max_pax)}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept=" .png, .jpg, .jpeg" id="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button class="btn btn-danger" type="reset">Clear</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- end form --}}
    </div>
</div>
@endsection
