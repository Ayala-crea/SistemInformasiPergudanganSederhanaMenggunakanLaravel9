@extends('layouts.dashboard.app')
@section('contents')
<form action="{{ isset($penjualan) ? route('penjualan.edit.update', $penjualan->id_penjualan) : route('penjualan.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_barang">kode barang</label>
                            <input type="number" class="form-control" id="id_barang" name="id_barang" value="{{ isset($penjualan) ? $penjualan->id_barang : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">nama barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($penjualan) ? $penjualan->nama_barang : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_terjual">jumlah penjualan</label>
                            <input type="number" class="form-control" id="jumlah_terjual" name="jumlah_terjual" value="{{ isset($penjualan) ? $penjualan->jumlah_terjual : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_penjualan">tanggal penjualan</label>
                            <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" value="{{ isset($penjualan) ? $penjualan->tanggal_penjualan : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="harga_terjual">pendapatan</label>
                            <input type="text" class="form-control" id="harga_terjual" name="harga_terjual" value="{{ isset($penjualan) ? $penjualan->harga_terjual : '' }}">
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">simpan</button>
                    </div>
                </div>

            </div>
        </div>
</form>
@endsection