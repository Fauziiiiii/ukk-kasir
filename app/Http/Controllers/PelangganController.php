<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        // dd($data);
        return view("pelanggan.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pelanggan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required'
        ],[
            'nama_pelanggan.required' => 'Nama Pelanggan harus diisi!!',
            'alamat.required' => 'Alamat harus diisi!!',
            'nomor_telepon' => 'Nomor Telepon harus diisi!!'
        ]);

        Pelanggan::create($request->all());
        return redirect("/pelanggan")->with("success", "Berhasil menambahkan Pelanggan baru");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan, $id)
    {
        $data = Pelanggan::find($id);
        return view("pelanggan.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan, $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->nomor_telepon = $request->nomor_telepon;

        $pelanggan->save();

        return redirect("/pelanggan")->with("success", "Berhasil mengupdate Pelanggan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan, $id)
    {
        Pelanggan::find($id)->delete();
        return redirect()->route('pelanggan')->with('success','Data Pelanggan berhasil dihapus');
    }
}
