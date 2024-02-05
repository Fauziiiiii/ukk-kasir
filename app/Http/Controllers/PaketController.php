<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Paket::with('outlet')->get();
        return view("paket.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Paket::all();
        $dataOutlet = Outlet::all();
        $jenis = ['kiloan', 'selimut','bed_cover','kaos','lain'];
        return view("paket.create", compact('data', 'dataOutlet', 'jenis'));
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
            'id_outlet' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',
        ],[
            'id_outlet.required'=> 'Pilih Outlet terlebih dahulu!!',
            'jenis.required' => 'Pilih Jenis Paket terlebih dahulu11',
            'nama_paket' => 'Nama Paket wajib diisi!!',
            'harga.required' => 'Harga Paket wajib diisi!!',
        ]);

        $input['id_outlet'] = $request->input('id_outlet');
        $input['jenis'] = $request->input('jenis');
        $input['nama_paket'] = $request->input('nama_paket');
        $input['harga'] = $request->input('harga');

        Paket::create($input);
        return redirect()->route('paket')->with('success', 'Berhasil menambahkan Paket baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Paket::find($id);
        $dataPaket = Paket::all();
        $dataOutlet = Outlet::find($id);
        return view("paket.edit", compact('data', 'dataPaket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_outlet' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',
        ],[
            'id_outlet.required'=> 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harfa'=> 'required',
        ]);

        $input = $request->all();
        Paket::find($id)->update($input);
        return redirect()->route('paket')->with('success','Data Paket berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paket::find($id)->delete();
        return redirect()->route('paket')->with('success','Data Paket berhasil dihapus');
    }
}
