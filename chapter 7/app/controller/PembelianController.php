<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{

    public function index()
    {
        $pembelian = Pembelian::get();
        return view('data.pembelian.index', ["pembelian" => $pembelian]);
    }

    public function tambah()
    {
        return view('data.pembelian.form');
    }
    public function simpan(Request $request)
    {
        $pembelian = [
            'id_pembelian' => $request->id_pembelian,
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'banyak_barang' => $request->banyak_barang,
            'harga_barang' => $request->harga_barang,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
            'id_supplier' => $request->id_supplier
        ];

        Pembelian::create($pembelian);
        return redirect()->route('pembelian');
    }
    public function edit($id_pembelian)
    {
        $pembelian = Pembelian::find($id_pembelian);
        return view('data.pembelian.form', compact('pembelian'));
    }
    public function update($id_pembelian, Request $request)
    {
        $pembelian = [
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'banyak_barang' => $request->banyak_barang,
            'harga_barang' => $request->harga_barang,
            'jumlah_pengeluran' => $request->jumlah_pengeluran,
            'id_supplier' => $request->id_supplier,
        ];
        Pembelian::find($id_pembelian)->update($pembelian);
        return redirect()->route('pembelian');
    }
    public function hapus($id_pembelian)
    {
        Pembelian::find($id_pembelian)->delete();
        return redirect()->route('pembelian');
    }
}
