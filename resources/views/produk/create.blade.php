
<div class="col-md-5 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Tambah Produk Form</h4>
        <p class="card-description">
            Tambahkan Produk
        </p>
        <form class="forms-sample" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Alamat">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label><br>
                <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok">
            </div>
            <button type="submit" class="btn btn-primary me-2" id="simpan">Simpan</button>
        </form>
        </div>
    </div>
</div>
