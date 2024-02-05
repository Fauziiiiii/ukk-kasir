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
              <th>Nama Member</th>
              <th>Alamat</th>
              <th>Jenis Kelamin</th>
              <th>Nomor Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $item)
              <tr>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->jenis_kelamin}}</td>
                  <td>{{$item->tlp}}</td>
                  <td>
                    <a class="btn btn-outline-secondary btn-sm" href="#" data-toggle="modal" data-target="#detailModal{{$item->id}}">Detail</a>
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/member/'.$item->id.'/edit') }}">Edit</a>
                    <form action="{{ '/member/'.$item->id }}" method="post" class="d-inline">
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
                              <p><strong>Nama Member :</strong> {{ $item->nama }}</p>
                              <p><strong>Alamat:</strong> {{ $item->alamat }}</p>
                              <p><strong>Jenis Kelamin:</strong> {{ $item->jenis_kelamin }}</p>
                              <p><strong>Nomor Telepon:</strong>{{$item->tlp}}</p>
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
@include('member.create')