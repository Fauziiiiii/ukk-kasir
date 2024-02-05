@extends('layout.app')

@section('content')
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Edit Produk Form</h4>
        <p class="card-description">
            Edit Produk
        </p>
        <form class="forms-sample" method="post" action="{{'/produk/' . $data->id}}">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" value="{{$data->nama_produk}}">
            </div>
            <div class="form-group">
            <label for="alamat">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="{{ number_format($data->harga)}}">
            </div>
            <div class="form-group">
                <label for="alamat">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="{{$data->stok}}">
            </div>
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <a href="/produk" class="btn btn-light">Cancel</a>
        </form>
        </div>
    </div></div>
    @endsection
