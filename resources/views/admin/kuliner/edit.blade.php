@extends('tamplateadmin')
@section('content')

<div class="col-md-12 text-center">
    <h1 class="mt-3 fw-bold">Edit Post Culinary</h1>
</div>
<div class="row">
    <div class="col-md-2">
        <a href="/admin/kuliner">
            <img src="{{url('../assets/img/arrow.png')}}" alt="">
        </a>
    </div>
    {{-- start form --}}
    <div class="d-flex col-md-8 mb-3 justify-content-center">
        <div class="col-md-10 mt-3">
            <div class="card shadow ">
                <form method="post" action="/admin/kuliner/{{$kuliner->id}}" enctype="multipart/form-data" class="p-2">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label" for="kategori">Kategori</label>
                        <select class="form-select" name="kategori_id">
                            <option selected>Open this select menu</option>
                            @foreach($kategoris as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" required value="{{ old('nama', $kuliner->nama)}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea class="form-control description" name="deskripsi" required>{{$kuliner->deskripsi}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control price @error('harga') is-invalid @enderror" placeholder="IDR" required value="{{ old('harga', $kuliner->harga)}}">
                        @error('harga')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Post Image</label>
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
    </div>
    {{-- end form --}}
</div>

@endsection
