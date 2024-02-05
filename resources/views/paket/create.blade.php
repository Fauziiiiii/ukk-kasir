@extends('layout.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card align-content-center align-items-center">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Tambah Paket form</h4>
        <p class="card-description">
            Basic form layout
        </p>
        <form class="forms-sample" method="post" action="">
            @csrf
            <div class="form-group">
                <label for="nama_outlet">Outlet</label>
                <select class="form-select" id="id_outlet" name="id_outlet">
                    <option selected>--- Pilih Outlet ---</option>
                    @foreach ($dataOutlet as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Paket</label><br>
                <select class="form-select" name="jenis" id="jenis">
                    <option selected>--- Pilih Paket ---</option>
                    @foreach ($jenis as $item)
                        <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_paket">Nama Paket</label>
                <input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="Masukkan nomor telepon baru ...">
            </div>
            <div class="form-group">
                <label for="harga">Harga Paket</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan nomor telepon baru ...">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a class="btn btn-light" href="/paket">Cancel</a>
        </form>
        </div>
    </div>
</div>
@endsection