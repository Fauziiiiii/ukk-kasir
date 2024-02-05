<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6"> 
              <h4 class="card-title">Data Paket Laundry</h4>
          </div>
          <div class="col-md-6 text-end"> 
              <a href="/paket/create" class="btn btn-primary btn-md"><i class="mdi mdi-account-plus"></i> Tambah Paket</a>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Jenis Paket</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{$item->jenis}}</td>
                  <td>{{$item->nama_paket}}</td>
                  <td>Rp. {{number_format($item->harga, 0, ',', '.')}},00</td>
                  <td>
                    <a class="btn btn-outline-secondary btn-sm" href="#" data-toggle="modal" data-target="#detailModal{{$item->id}}">Detail</a>
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/paket/'.$item->id.'/edit') }}">Edit</a>
                    <form action="{{ '/paket/'.$item->id }}" method="post" class="d-inline">
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
                                <p><strong>Jenis Paket:</strong> {{ $item->jenis }}</p>
                                <p><strong>Milik Outlet:</strong> {{ $item->outlet->nama }}</p>
                                <p><strong>Nama Paket:</strong> {{ $item->nama_paket }}</p>
                                <p><strong>Harga:</strong> Rp. {{number_format($item->harga, 0, ',', '.')}},00 {{ $item->tlp }}</p>
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