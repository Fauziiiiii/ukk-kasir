@extends('layout.app')

@section('content')
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Default form</h4>
        <p class="card-description">
            Basic form layout
        </p>
        <form class="forms-sample" method="post" action="{{'/pelanggan/' . $data->id}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan nama pelanggan" value="{{$data->nama_pelanggan}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" value="{{$data->alamat}}">
            </div>
            <div class="form-group">
                <label for="username">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan nomor telepon" value="{{$data->nomor_telepon}}">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a href="/pelanggan" class="btn btn-light">Cancel</a>
        </form>
        </div>
    </div>
    </div>
    @endsection
