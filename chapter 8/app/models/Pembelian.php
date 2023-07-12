<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';

    protected $fillable = ['id_pembelian', 'id_barang', 'nama_barang', 'tanggal_pembelian', 'banyak_barang', 'harga_barang', 'jumlah_pengeluaran', 'id_supplier'];
    protected $primaryKey = 'id_pembelian';

}
