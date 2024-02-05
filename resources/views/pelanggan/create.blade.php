@extends('layout.app')

@section('content')
@if (Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success')}}
    </div>
@elseif(Session::get('error'))
<div class="alert alert-danger">
    {{ Session::get('error')}}
</div>
@endif
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Tambah Pelanggan Form</h4>
        <p class="card-description">
            Tambahkan Pelanggan
        </p>
        <form class="forms-sample" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan">
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a href="/pelanggan" class="btn btn-light">Cancel</a>
        </form>
        </div>
    </div>
    </div>
    @endsection
