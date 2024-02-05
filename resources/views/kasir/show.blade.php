<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Menu</h4>
        <div class="menu-container align-content-center">
          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0 mt-2">
              <div class="card">
                <img src="img/desktop.jpg" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h5 class="card-subtitle mb-2 text-body-secondary harga">10000</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary add-order-btn">Tambah Pesanan</a> <!-- Tambahkan class dan id di sini -->
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0 mt-2">
              <div class="card">
                <img src="img/desktop.jpg" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">PC</h5>
                  <h5 class="card-subtitle mb-2 text-body-secondary harga">10000000</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary add-order-btn">Tambah Pesanan</a> <!-- Tambahkan class dan id di sini -->
                </div>
              </div>
            </div>
            <!-- Menambahkan lebih banyak menu di sini -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tabel Daftar Pesanan</h4>
            <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan</label>
                <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" placeholder="Masukkan ID Pelanggan">
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="order-list">
                    </tbody>
                </table>
                <div id="total-price" class="m-3">Total: $0</div> <!-- Menampilkan total harga di sini -->
            </div>
            <button type="button" class="btn btn-primary simpan-penjualan-btn">Simpan</button>
        </div>
    </div>
</div>

