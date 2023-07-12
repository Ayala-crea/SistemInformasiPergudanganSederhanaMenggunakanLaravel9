<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    use HasFactory;

    protected $table = 'detail_barang';
    protected $primaryKey = 'id_detail_barangs';
    protected $fillable = [
        'id_barang',
        'banyak',
        'pabrik',
        'alamat_pabrik',
        'supplier',
        'keterangan',
    ];

    // Relasi dengan model Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
