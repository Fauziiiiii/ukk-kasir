@extends('layout.app')

@section('content')
<div class="col-md-5 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Tambah Member Form</h4>
        <p class="card-description">
            Tambahkan Member
        </p>
        <form class="forms-sample" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{$data->nama}}">
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{$data->alamat}}">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="{{$data->jenis_kelamin}}" selected>{{$data->jenis_kelamin}}</option>
                        @if ($data->jenis_kelamin == 'L')
                        <option value="P">P</option>
                        @elseif ($data->jenis_kelamin == 'P')
                        <option value="L">L</option>
                        @endif
                </select>
            </div>
            <div class="form-group">
            <label for="tlp">Nomor Telepon</label>
            <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Nomor Telepon" value="{{$data->tlp}}">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a href="/member" class="btn btn-light">Cancel</a>
        </form>
        </div>
    </div></div
    @endsection>