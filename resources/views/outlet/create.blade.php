@extends('layout.app')

@section('content')
<div class="col-md-10 grid-margin stretch-card align-content-center align-items-center">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Tambah Outlet form</h4>
        <p class="card-description">
            Basic form layout
        </p>
        <form class="forms-sample" method="post" action="">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Outlet</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan alamat baru ..." value="{{old('nama')}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control h-100" name="alamat" id="alamat" cols="30" rows="10" placeholder="Masukkan alamat baru ...">{{old('alamat')}}</textarea>
            </div>
            <div class="form-group">
                <label for="tlp">Nomor Telepon</label>
                <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukkan nomor telepon baru ..." value="{{old('tlp')}}">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a class="btn btn-light" href="/outlet">Cancel</a>
        </form>
        </div>
    </div>
</div>
@endsection