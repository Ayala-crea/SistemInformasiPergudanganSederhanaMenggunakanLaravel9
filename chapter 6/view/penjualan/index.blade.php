@extends('layouts.dashboard.app')
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang Keluar</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('penjualan.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama_barang</th>
                        <th>jumlah terjual</th>
                        <th>keuntungan</th>
                        <th>menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penjualan as $k => $item)
                    <tr>
                        {{-- karena index dimulai dari 0 maka kita perlu menambahkan angka 1 --}}
                        <td>{{ $k + 1 }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->jumlah_terjual }}</td>
                        <td>{{ $item->harga_terjual }}</td>
                        <td>
                            <a href="{{ route('penjualan.hapus', $item->id_penjualan) }}" class="btn btn-danger">delete</a>
                            <a href="{{ route('penjualan.edit', $item->id_penjualan) }}" class="btn btn-warning">edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection