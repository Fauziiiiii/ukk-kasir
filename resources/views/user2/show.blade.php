<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <h4 class="card-title">Data User 2</h4>
        </div>
        <div class="col-md-6 text-end">
            <a href="/user2/create" class="btn btn-primary btn-md"><i class="mdi mdi-account-plus"></i> Tambah User</a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nama User</th>
              <th>Username</th>
              <th>Role</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $item)
              <tr>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->username}}</td>
                  <td>{{$item->role}}</td>
                  <td>
                    <a class="btn btn-outline-secondary btn-sm" href="#" data-toggle="modal" data-target="#detailModal{{$item->id}}">Detail</a>
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/user2/'.$item->id.'/edit') }}">Edit</a>
                    <form action="{{ '/user2/'.$item->id }}" method="post" class="d-inline">
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
                              <p><strong>Nickname :</strong> {{ $item->nama }}</p>
                              <p><strong>Username:</strong> {{ $item->username }}</p>
                              <p><strong>Role:</strong>{{$item->role}}</p>
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
