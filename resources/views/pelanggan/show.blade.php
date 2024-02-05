<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <h4 class="card-title">Data User 2</h4>
        </div>
        <div class="col-md-6 text-end">
            <a href="/pelanggan/create" class="btn btn-primary btn-md"><i class="mdi mdi-account-plus"></i> Tambah Pelanggan</a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nama Pelanggan</th>
              <th>Alamat</th>
              <th>Nomor Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $item)
              <tr>
                  <td>{{$item->nama_pelanggan}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->nomor_telepon}}</td>
                  <td>
                    <a class="btn btn-outline-secondary btn-sm" href="#" data-toggle="modal" data-target="#detailModal{{$item->id}}">Detail</a>
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/pelanggan/'.$item->id.'/edit') }}">Edit</a>
                    <form action="{{ '/pelanggan/'.$item->id }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm">Hapus</button>
                    </form>
                  </td>
                </tr>
                <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="detailModalLabel">Detail Outlet</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <p><strong>Nama Pelanggan :</strong> {{ $item->nama_pelanggan }}</p>
                              <p><strong>Alamat:</strong> {{ $item->alamat }}</p>
                              <p><strong>Nomor Telepon:</strong>{{$item->nomor_telepon}}</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
