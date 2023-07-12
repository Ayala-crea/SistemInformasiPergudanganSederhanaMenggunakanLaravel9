@extends('layouts.dashboard.app')
@section('contents')
<form action="{{ isset($pembelian) ? route('pembelian.edit.update', $pembelian->id_pembelian) : route('pembelian.tambah.simpan') }}" method="post">
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
                            <input type="text" class="form-control" id="id_barang" name="id_barang" value="{{ isset($pembelian) ? $pembelian->id_barang : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">nama barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($pembelian) ? $pembelian->nama_barang : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pembelian">tanggal pembelian</label>
                            <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" value="{{ isset($pembelian) ? $pembelian->tanggal_pembelian : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="banyak_barang">banyak pembelian</label>
                            <input type="text" class="form-control" id="banyak_barang" name="banyak_barang" value="{{ isset($pembelian) ? $pembelian->banyak_barang : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">harga barang</label>
                            <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="{{ isset($pembelian) ? $pembelian->harga_barang : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_pengeluaran">jumlah pengeluaran</label>
                            <input type="number" class="form-control" id="jumlah_pengeluaran" name="jumlah_pengeluaran" value="{{ isset($pembelian) ? $pembelian->jumlah_pengeluaran : '' }}">
                        <div class="form-group">
                            <label for="id_supplier">kode supplier</label>
                            <input type="number" class="form-control" id="id_supplier" name="id_supplier" value="{{ isset($pembelian) ? $pembelian->id_supplier : '' }}">
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">simpan</button>
                    </div>
                </div>

            </div>
        </div>
</form>
@endsection