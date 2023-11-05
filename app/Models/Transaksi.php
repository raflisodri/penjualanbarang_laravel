<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id_barang','id_petugas','tgl_bayar','jumlah','keterangan','total'];
    protected $table = 'transaksis'; 
    public function Barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_petugas', 'id');
    }
}
