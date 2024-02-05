
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6"> 
            <h4 class="card-title">Data Transaksi Laundry</h4>
        </div>
        <div class="col-md-6 text-end"> 
            <a href="/transaksi/create" class="btn btn-primary btn-md"><i class="mdi mdi-account-plus"></i> Tambah Transaksi</a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                Kode Invoice
              </th>
              <th>
                Outlet
              </th>
              <th>
                Nama Member
              </th>
              <th>
                Batas Waktu
              </th>
              <th>
                Status
              </th>
              <th>
                Status Dibayar
              </th>
              <th>
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
                
            
            <tr>
              <td class="py-1">
                {{$item->kode_invoice}}
              </td>
              <td>
                {{$item->outlet->nama}}
              </td>
              <td>
                {{$item->member->nama}}
              </td>
              <td>
                {{$item->batas_waktu}}
              </td>
              <td>
                {{$item->status}}
              </td>
              <td>
                {{$item->dibayar}}
              </td>
              <td>
                <a class="btn btn-outline-secondary btn-sm" href="#" data-toggle="modal" data-target="#detailModal{{$item->id}}">Detail</a>
                <a class="btn btn-outline-warning btn-sm" href="{{ url('/transaksi/'.$item->id.'/edit') }}">Edit</a>
                <form action="{{ '/transaksi/'.$item->id }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger btn-sm">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>