<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'id_pembelian',
        'id_detail_barangs',
        'nama_barang',
        'kategori_barang',
        'harga',
        'stok',
    ];

    // Relasi dengan model DetailBarang
    public function detailBarang()
    {
        return $this->hasOne(DetailBarang::class, 'id_barang', 'id_barang');
    }
}
