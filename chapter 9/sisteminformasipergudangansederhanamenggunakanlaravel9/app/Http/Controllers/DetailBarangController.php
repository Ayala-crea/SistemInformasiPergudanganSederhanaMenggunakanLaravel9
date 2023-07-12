<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailBarang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DetailBarangController extends Controller
{
    public function index()
    {
        $data = DB::table('barang')
            ->join('detail_barang', 'detail_barang.id_detail_barangs', '=', 'barang.id_barang')
            ->get();
        return view('data.detail_barang.index')->with('data', $data);
    }

    public function tambah()
    {
        return view('data.detail_barang.form');
    }

    public function simpan(Request $request)
    {
        // Data untuk tabel 'barang'
        $dataBarang = [
            'id_pembelian' => $request->id_pembelian,
            'id_detail_barangs' => $request->id_detail_barangs,
            'nama_barang' => $request->nama_barang,
            'kategori_barang' => $request->kategori_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ];

        // Menyimpan data ke tabel 'barang'
        $barang = Barang::create($dataBarang);

        // Data untuk tabel 'detail_barang'
        $dataDetailBarang = [
            'id_barang' => $barang->id_barang,
            'banyak' => $request->banyak,
            'pabrik' => $request->pabrik,
            'alamat_pabrik' => $request->alamat_pabrik,
            'supplier' => $request->supplier,
            'keterangan' => $request->keterangan
            // Tambahkan kolom lain yang sesuai dengan struktur tabel 'detail_barang'
        ];

        // Menyimpan data ke tabel 'detail_barang'
        $detailBarang = DetailBarang::create($dataDetailBarang);

        return redirect()->route('barang');
    }

    public function edit($id_barang, $id_detail_barang)
    {
        $barang = Barang::find($id_barang);
        $detailBarang = DetailBarang::find($id_detail_barang);
    
        return view('data.barang.edit', compact('barang', 'detailBarang'));
    }
    public function update(Request $request, $id_detail_barang, $id_barang)
    {
        $barang = Barang::find($id_barang);
        $detailBarang = DetailBarang::find($id_detail_barang);
        
        // Update the data in the respective models
        $barang->nama_barang = $request->input('nama_barang');
        $barang->kategori_barang = $request->input('kategori_barang');
        $barang->harga = $request->input('harga');
        $barang->stok = $request->input('stok');
        $barang->save();
        // Update other fields in the Barang model as needed
        
        $detailBarang->banyak = $request->input('banyak');
        $detailBarang->pabrik = $request->input('pabrik');
        $detailBarang->alamat_pabrik = $request->input('alamat_pabrik');
        $detailBarang->supplier = $request->input('supplier');
        $detailBarang->keterangan = $request->input('keterangan');
        // Update other fields in the DetailBarang model as needed
        
        // Save the changes
        $detailBarang->save();
        
        // Redirect back or to a different page
        return redirect()->route('detail_barang.index')->with('success', 'Data has been updated successfully!');
    }

}