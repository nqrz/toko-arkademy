@extends('layouts.app')

@section('content')
<div class="container bg-light rounded px-5">
    <h1 class="text-center text-info">Toko Arkademy</h1>
    <h4 class="">Edit Produk</h4>
    <div class="mx-4 py-2">
        <form method="POST" action="/{{ $produk->id }}">
        @csrf
        @method('PATCH')

            <div class="form-group row mb-2">
                <label for="nama_produk" class="col-md-4 col-form-label">Nama Produk</label>

                <div class="col-md-6">
                    <input id="nama_produk" type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ $produk->nama_produk }}" required autocomplete="nama_produk" autofocus>

                    @error('nama_produk')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-2">
                <label for="keterangan" class="col-md-4 col-form-label">Keterangan</label>

                <div class="col-md-6">
                    <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $produk->keterangan }}" required autocomplete="keterangan" autofocus>

                    @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-2">
                <label for="harga" class="col-md-4 col-form-label">Harga</label>

                <div class="col-md-6">
                    <input id="harga" type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $produk->harga }}" required autocomplete="harga" autofocus>

                    @error('harga')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-2">
                <label for="jumlah" class="col-md-4 col-form-label">Jumlah</label>

                <div class="col-md-6">
                    <input id="jumlah" type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ $produk->jumlah }}" required autocomplete="jumlah" autofocus>

                    @error('jumlah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-success">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection