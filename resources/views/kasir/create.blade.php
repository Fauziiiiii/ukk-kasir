
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
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
           
            <div class="form-group">
            <label for="tlp">Nomor Telepon</label>
            <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Nomor Telepon">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a href="/user" class="btn btn-light">Cancel</a>
        </form>
        </div>
    </div></div>
