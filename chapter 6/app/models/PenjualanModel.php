<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanModel extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $primaryKey = 'id_penjualan';

    protected $fillable = ['id_penjualan', 'id_barang', 'nama_barang', 'jumlah_terjual','tanggal_penjualan', 'harga_terjual', 'id_distributor'];
}
