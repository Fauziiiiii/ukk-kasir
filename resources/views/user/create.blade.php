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
        <h4 class="card-title">Tambah User Form</h4>
        <p class="card-description">
            Tambahkan User
        </p>
        <form class="forms-sample" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="id_outlet">Pilih Outlet</label><br>
                <select class="form-select" name="id_outlet" id="id_outlet">
                    <option selected> --- Pilih Outlet --- </option>
                    @foreach ($outlet as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="role">Pilih Role User</label><br>
                <select class="form-select" name="role" id="role">
                    <option selected> --- Pilih Role --- </option>
                    @foreach ($role as $item)
                        <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a href="/user" class="btn btn-light">Cancel</a>
        </form>
        </div>
    </div>
    </div>
    @endsection