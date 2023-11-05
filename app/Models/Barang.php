<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [ 'id_suplier','nama_barang','jenis','harga','stok','tanggal_masuk','expired'];
    protected $table = 'barangs';

    public function Suplier()
    {
        return $this->belongsTo(Suplier::class, 'id_suplier', 'id');
    }
    public function Barang()
    {
        return $this->hasMany(Barang::class, 'id_barang', 'id');
    }
}
