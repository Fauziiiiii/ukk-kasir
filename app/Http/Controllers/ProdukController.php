<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index()
    {
        $data = Produk::all();
        return view('produk.index', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ],[
            'nama_produk.required'=> 'Nama Produk wajib diisi!!',
            'harga.required'=> 'Harga wajib diisi!',
            'stok.required'=> 'Stok wajib diisi!!',
        ]);

        Produk::create($request->all());
        return redirect('/produk')->with('success','Berhasil menambahkan Produk baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk, $id)
    {
        $data = Produk::find($id);
        return view('produk.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk, $id)
    {
        // $validatedData = $request->validate([
        //     'nama_produk' => 'required|string|max:255',
        //     'harga' => 'required|numeric',
        //     'stok' => 'required|integer',
        // ]);

        $product = Produk::findOrFail($id);
        $product->nama_produk = $request->nama_produk;
        $product->harga = str_replace(',', '', $request->harga);
        $product->stok = $request->stok;
        $product->save();
        // dd($product);

        return redirect('/produk')->with('success', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk, $id)
    {
        Produk::find($id)->delete();
        return redirect()->route('produk')->with('success','Data Produk berhasil dihapus');
    }
}
