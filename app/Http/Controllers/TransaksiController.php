<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Barang;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact(['transaksi','barang']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('transaksi.tambah',compact(['barang']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idb = $request->id_barang;
        $barang = Barang::find($idb);
        $total = $barang->harga * $request->jumlah;

        Transaksi::create([
            'id_barang' => $request->id_barang,
            'id_petugas' =>Auth()->User()->id,
            'tgl_bayar' => $request->tgl_bayar,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'total' => $total,
            $request->except(['_token']),
        ]);

        $barang->update([
            'stok' => $barang->stok - $request->jumlah,
            $request->except(['_token']),
        ]);

        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::all();
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',compact(['transaksi','barang']));
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
        $transaksi = Transaksi::find($id);

        // Hitung perbedaan jumlah transaksi yang baru dengan jumlah transaksi yang lama
        $jumlahTransaksiLama = $transaksi->jumlah;
        $jumlahTransaksiBaru = $request->jumlah;
        $selisihJumlah = $jumlahTransaksiBaru - $jumlahTransaksiLama;

        $barang = Barang::find($request->id_barang);
        $total = $barang->harga * $request->jumlah;
       
        $transaksi = Transaksi::find($id);
        $transaksi->update([
            'id_barang' => $request->id_barang,
            'id_petugas' => Auth()->User()->id,
            'tgl_bayar' => $request->tgl_bayar,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'total' => $total,
            $request->except(['_token']),
        ]);
        
        $barang = Barang::find($request->id_barang);
        $stokBaru = $barang->stok - $selisihJumlah;
        $barang->update([
            'stok' => $stokBaru,
        ]); 

        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $idb = $transaksi->id_barang;
        $jumlah = $transaksi->jumlah;
        $barang = Barang::find($idb);

        // ieu jang nu delete ketika di delete data nu engges di kurang 
        //nambah deui
        $barang->update([
            'stok' => $barang->stok + $jumlah
        ]);
        $transaksi->delete();
        return redirect('/transaksi');
    }

    public function cetak()
    {
        $transaksi = Transaksi::all();
        $barang = Barang::all();
        $user = User::all();
        return view('transaksi.cetak',compact(['transaksi','barang','user']));
    }

    
    public function struk($id)
    {
      

        $transaksi = Transaksi::find($id);
        $barang = Barang::all();
        $user = User::all();
        return view('transaksi.struk',compact(['transaksi','barang','user']));
    }
}
