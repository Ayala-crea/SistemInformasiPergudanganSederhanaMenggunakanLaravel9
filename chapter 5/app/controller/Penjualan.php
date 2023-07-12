<?php

namespace App\Http\Controllers;

use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class Penjualan extends Controller
{
    public function index()
    {
        $penjualan = PenjualanModel::get();
        return view('data.penjualan.index', ["penjualan" => $penjualan]);
    }
    public function tambah()
    {
        return view('data.penjualan.form');
    }
    public function simpan(Request $request)
    {
        $penjualan = [
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'jumlah_terjual' => $request->jumlah_terjual,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'harga_terjual' => $request->harga_terjual
        ];
        PenjualanModel::create($penjualan);
        return redirect()->route('penjualan');
    }
    public function edit($id_penjualan)
    {
        $penjualan = PenjualanModel::find($id_penjualan);
        return view('data.penjualan.form', compact('penjualan'));
    }
    public function update($id_penjualan, Request $request)
    {
        $penjualan = [
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'jumlah_terjual' => $request->jumlah_terjual,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'harga_terjual' => $request->harga_terjual,
            'id_supplier' => $request->id_supplier,
        ];
        PenjualanModel::find($id_penjualan)->update($penjualan);
        return redirect()->route('penjualan');
    }
    public function hapus($id_penjualan)
    {
        PenjualanModel::find($id_penjualan)->delete();
        return redirect()->route('penjualan');
    }
}
