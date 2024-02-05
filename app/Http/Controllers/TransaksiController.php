<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Member;
use App\Models\Outlet;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        $outlet = Outlet::all();
        $member = Member::all();
        $status = ['baru', 'proses', 'selesai', 'diambil'];
        $dibayar = ['dibayar', 'belum_dibayar'];
        return view("transaksi.index", compact('outlet','member','transaksi', 'status', 'dibayar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $outlet = Outlet::all();
        $member = Member::all();
        return view("transaksi.create", compact('outlet','member','transaksi'));
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
            'id_outlet'=> 'required',
            'id_member'=> 'required',
            'batas_waktu'=> 'required',
            'biaya_tambahan'=> 'required',
            'diskon'=> 'required',
            'pajak' => 'required',
            'status'=> 'required',
            'dibayar'=> 'required',
        ]);

        $timestamp = time();
        $kode_invoice = 'INV' . $timestamp . mt_rand(1000, 9999);

        $dataTransaksi = [
            'id_outlet'=> $request->input('id_outlet'),
            'kode_invoice' => $kode_invoice,
            'id_member'=> $request->input('id_member'),
            'tgl'=> now(),
            'batas_waktu'=> $request->input('batas_waktu'),
            'biaya_tambahan'=> $request->input('biaya_tambahan'),
            'diskon'=> $request->input('diskon'),
            'pajak'=> $request->input('pajak'),
            'status'=> $request->input('status'),
            'dibayar'=> $request->input('dibayar'),
            'id_user'=> auth()->user()->id,
        ];

        // dd($dataTransaksi);
        Transaksi::create($dataTransaksi);
        return redirect()->route('transaksi')->with('success','Berhasil menambahkan transaksi baru');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
