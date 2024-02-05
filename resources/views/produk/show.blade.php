<div class="col-lg-7 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <h4 class="card-title">Data Member </h4>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nama Produk</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $item)
              <tr>
                  <td>{{$item->nama_produk}}</td>
                  <td>{{$item->harga}}</td>
                  <td>{{$item->stok}}</td>
                  <td>
                    <a class="btn btn-outline-secondary btn-sm" href="#" data-toggle="modal" data-target="#detailModal{{$item->id}}">Detail</a>
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/produk/'.$item->id.'/edit') }}">Edit</a>
                    <form action="{{ '/produk/'.$item->id }}" method="post" class="d-inline">
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
                              <h5 class="modal-title" id="detailModalLabel">Detail Produk</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <p><strong>Nama Produk :</strong> {{ $item->nama_produk }}</p>
                              <p><strong>Harga:</strong> {{ $item->harga }}</p>
                              <p><strong>Stok:</strong> {{ $item->stok }}</p>
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
@include('produk.create')
