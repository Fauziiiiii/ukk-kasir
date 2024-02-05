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
                <label for="nama">Nama Member</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan alamat baru ..." value="{{old('nama')}}">
            </div>
            <div class="form-group">
                <label for="batas_waktu">Batas Waktu</label>
                <input id="batas_waktu" name="batas_waktu" class="form-control" type="date" />
            </div>
            <label for="diskon" class="mb-2">Diskon</label>
            <div class="input-group mb-4">
                <input type="text" class="form-control" name="diskon" id="diskon">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
            <label for="pajak" class="mb-2">Pajak</label>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                </div>
                <input type="text" class="form-control" name="pajak" id="pajak">
                <div class="input-group-append">
                    <span class="input-group-text">,00</span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a class="btn btn-light" href="/transaksi">Cancel</a>
        </form>
        </div>
    </div>
</div>
@endsection