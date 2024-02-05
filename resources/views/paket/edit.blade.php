@extends('layout.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card align-content-center align-items-center">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Tambah Paket form</h4>
        <p class="card-description">
            Basic form layout@extends('layout.app')

            @section('content')
            <div class="col-md-12 grid-margin stretch-card align-content-center align-items-center">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Tambah Paket form</h4>
                    <p class="card-description">
                        Basic form layout
                    </p>
                    <form class="forms-sample" method="post" action="{{'/paket/'. $data->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_outlet">Pilih Outlet</label><br>
                            <select class="form-select" name="id_outlet" id="id_outlet">
                                <option value="{{$data->id_outlet}}">{{$data->outlet->nama}}</option>
                                @foreach ($dataPaket as $item)
                                    <option value="{{$item->id}}">{{$item->nama_paket}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Paket</label><br>
                            <select class="form-select" name="jenis" id="jenis">
                                <option value="{{$data->jenis}}">{{$data->jenis}}</option>
                                @foreach ($dataPaket as $item)
                                    <option value="{{$item->jenis}}">{{$item->jenis}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="Masukkan nomor telepon baru ..." value="{{$data->nama_paket}}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Paket</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan nomor telepon baru ..." value="{{$data->harga}}">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="/paket">Cancel</a>
                    </form>
                    </div>
                </div>
            </div>
            @endsection
        </p>
        <form class="forms-sample" method="post" action="">
            @csrf
            
            <div class="form-group">
                <label for="nama">Pilih Outlet</label>
                {{-- <div class="navbar-menu-wrapper d-flex align-items-top"> 
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3" >
                            <p class="mb-0 font-weight-medium float-left">Select category</p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                            <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                            <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                            <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                            <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                            </div>
                        </a>
                        </div>
                        </li>
                    </ul>
                </div> --}}
                <select name="outlet" id="outlet">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
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
            <a class="btn btn-light" href="/paket">Cancel</a>
        </form>
        </div>
    </div>
</div>
@endsection