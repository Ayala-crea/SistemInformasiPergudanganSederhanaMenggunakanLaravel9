@extends('layouts.dashboard.app')
@section('title', 'Form Barang')
@section('contents')
    <form
        action="{{ isset($detail_barang) ? route('detail_barang.edit.update', ['id_barang' => $barang->id_barang, 'id_detail_barang' => $detail_barang->id_detail_barang]) : route('detail_barang.tambah.simpan') }}"
        method="post">
        @csrf
        @if (isset($detail_barang))
            @method('PUT')
        @endif
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
                                <label for="nama_barang">Nama Barang:</label>
                                <input type="text" name="nama_barang" id="nama_barang"
                                    value="{{ isset($barang) ? $barang->nama_barang : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="kategori_barang">Kategori Barang:</label>
                                <input type="text" name="kategori_barang" id="kategori_barang"
                                    value="{{ isset($barang) ? $barang->kategori_barang : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="text" name="harga" id="harga"
                                    value="{{ isset($barang) ? $barang->harga : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok:</label>
                                <input type="text" name="stok" id="stok"
                                    value="{{ isset($barang) ? $barang->stok : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="banyak">Banyak:</label>
                                <input type="text" name="banyak" id="banyak"
                                    value="{{ isset($detailBarang) ? $detailBarang->banyak : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="pabrik">Pabrik:</label>
                                <input type="text" name="pabrik" id="pabrik"
                                    value="{{ isset($detailBarang) ? $detailBarang->pabrik : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="alamat_pabrik">Alamat Pabrik:</label>
                                <input type="text" name="alamat_pabrik" id="alamat_pabrik"
                                    value="{{ isset($detailBarang) ? $detailBarang->alamat_pabrik : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="supplier">Supplier:</label>
                                <input type="text" name="supplier" id="supplier"
                                    value="{{ isset($detailBarang) ? $detailBarang->supplier : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <textarea name="keterangan" id="keterangan">{{ isset($detailBarang) ? $detailBarang->keterangan : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">simpan</button>
                    </div>
                </div>

            </div>
        </div>
    </form>

@endsection
