<div class="modal fade" id="tambahTransaksiModal" tabindex="-1" role="dialog" aria-labelledby="tambahTransaksiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahTransaksiModalLabel">Tambah Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="silang">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_member">Nama Member</label>
                        <select class="form-select" id="id_member" name="id_member">
                            <option selected>--- Pilih Member ---</option>
                            @foreach ($member as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_outlet">Outlet</label>
                        <select class="form-select" id="id_outlet" name="id_outlet">
                            <option selected>--- Pilih Outlet ---</option>
                            @foreach ($outlet as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_outlet">Status </label>
                        <select class="form-select" id="status" name="status">
                            <option selected>--- Pilih Status ---</option>
                            @foreach ($status as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_outlet">Status Bayar</label>
                        <select class="form-select" id="dibayar" name="dibayar">
                            <option selected>--- Pilih Status Bayar ---</option>
                            @foreach ($dibayar as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Diskon</span>
                        <input type="text" class="form-control" id="diskon" name="diskon">
                        <span class="input-group-text">%</span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Pajak</span>
                        <input type="text" class="form-control" id="pajak" name="pajak">
                        <span class="input-group-text">%</span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Biaya Tambahan</span>
                        <input type="text" class="form-control" id="biaya_tambahan" name="biaya_tambahan">
                    </div>
                    <div class="form-group">
                        <label for="tgl_transaksi">Batas Waktu</label>
                        <input type="date" class="form-control" id="batas_waktu" name="batas_waktu">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
                </form>
            </div>
            <div class="modal-footer">
                
                <a class="btn btn-secondary" data-dismiss="modal" class="close" id="tutup">Tutup</a>
            </div>
        </div>
    </div>
    
  </div>
  