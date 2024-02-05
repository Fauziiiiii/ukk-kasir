<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Paket;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    
    public function index()
    {
        $data = Outlet::all();
        return view("outlet.index", compact("data"));
    }
    public function create()
    {
        $data = Outlet::all();
        return view("outlet.create", compact("data"));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            "nama"=> "required",
            "alamat"=> "required",
            "tlp"=> "required",
        ],[
            "nama.required"=> "Nama Outlet wajib diisi!!",
            "alamat"=> "Alamat Outlet wajib diisi!!",
            "tlp.required"=> "Nomor Telepon wajib diisi!!",
        ]);
        Outlet::create($request->all());
        return redirect()->route('outlet.index')->with('success', 'Berhasil menambahkan Outlet baru');
    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        $data = Outlet::find($id);
        return view("outlet.edit", compact("data"));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',
        ],[
            'nama.required' => 'Nama Outlet wajib diisi!!',
            'alamat.required' => 'Alamat wajib diisi!!',
            'tlp.required' => 'Nomor Telepon wajib diisi!!',
        ]
        );

        Outlet::find($id)->update($request->all());
        return redirect('/paket')->with('success','Data Paket berhasil diupdate');
        
    }   
    // public function isReferenced($id)
    // {
    //     // Lakukan pengecekan referensi di sini
    //     // Contoh: cek apakah outlet masih terkait dengan transaksi atau data lain
    //     $outlet = Outlet::find($id);

    //     if ($outlet->transaksi->count() > 0) {
    //         // Jika masih terkait dengan transaksi
    //         return true;
    //     }

    //     return false;
    // }

    public function isReferenced_tb_transaksi($id) {
        // return $this->hasMany(Transaksi::class, 'id_outlet');
        $referencedCount = Transaksi::where('id_outlet', $id)->count();

    return $referencedCount > 0;
    }
    
    public function isReferenced_tb_paket($id) {

        $referencedCount = Paket::where('id_outlet', $id)->count();

        return $referencedCount > 0;
    }
    
    public function isReferenced_tb_user($id) {
        $referencedCount = User::where('id_outlet', $id)->count();

    return $referencedCount > 0;
    }

    public function destroy($id)
    {
        if ($this->isReferenced_tb_transaksi($id) || $this->isReferenced_tb_paket($id) ||  $this->isReferenced_tb_user($id)) {
            return redirect('/outlet')->with('error', 'Outlet ini tidak dapat dihapus karena masih terkait dengan transaksi atau data lain.');
        }else{
            Outlet::find($id)->delete();
            return redirect('/outlet')->with('success', 'Data Outlet berhasil dihapus');
        }
    }

}
