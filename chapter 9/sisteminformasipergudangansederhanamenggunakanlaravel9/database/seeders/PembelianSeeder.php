<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = DB::table('barang')->select('id_barang', 'nama_barang')->first();
        $penjualan = DB::table('penjualan')->select('id_penjualan')->first();
        DB::table('pembelian')->insert([
            'id_barang' => $barang->id_barang,
            'nama_barang' => $barang->nama_barang,
            'tanggal_pembelian' => now(),
            'banyak_barang' => '1200',
            'harga_barang' => 'Rp21500000',
            'jumla_pengeluaran' => 'Rp20000000',
            'id_penjualan' => $penjualan->id_penjualan,
        ]);
    }
}
