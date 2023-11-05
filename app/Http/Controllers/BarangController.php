<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Suplier;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $suplier = Suplier::all();
        return view('barang.index', compact(['barang','suplier']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suplier = Suplier::all();
        return view('barang.tambah',compact(['suplier']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'id_suplier' => $request->id_suplier,
            'nama_barang' => $request->nama_barang,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'tanggal_masuk' => $request->tanggal_masuk,
            'expired' => $request->expired,
            $request->except(['_token']),
        ]);
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        $suplier = Suplier::all();
        return view('barang.edit',compact(['barang','suplier']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->update([
            'id_suplier' => $request->id_suplier,
            'nama_barang' => $request->nama_barang,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'tanggal_masuk' => $request->tanggal_masuk,
            'expired' => $request->expired,
            $request->except(['_token']),
        ]);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
