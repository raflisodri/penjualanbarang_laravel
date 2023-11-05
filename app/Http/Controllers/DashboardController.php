<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $jumlah_user = User::count();
        $jumlah_barang = Barang::count();
        $transaksi = Transaksi::Select()->orderBy ('tgl_bayar','DESC')
        ->limit(5)
        ->get();

        $today = Carbon::today();
        $start = Carbon::today()->subDays(7);
        $total_minggu = Transaksi::Select(Transaksi::raw ('SUM(jumlah) as total_price'))
       
        ->whereBetween('tgl_bayar',[$start, $today])->first();

        return view('dashboard',compact('jumlah_user','jumlah_barang','transaksi'),['total_minggu'=>$total_minggu]);
    }

}
