@extends('layouts.dashboard.app')
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('pembelian.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama barang</th>
                        <th>tanggal pembelian</th>
                        <th>banyak barang</th>
                        <th>harga</th>
                        <th>jumlah pengeluaran</th>
                        <th>menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembelian as $k => $item)
                    <tr>
                        {{-- karena index dimulai dari 0 maka kita perlu menambahkan angka 1 --}}
                        <td>{{ $k + 1 }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->tanggal_pembelian }}</td>
                        <td>{{ $item->banyak_barang }}</td>
                        <td>{{ $item->harga_barang }}</td>
                        <td>{{ $item->jumlah_pengeluaran }}</td>
                        <td>
                            <a href="{{ route('pembelian.hapus', $item->id_pembelian) }}" class="btn btn-danger">delete</a>
                            <a href="{{ route('pembelian.edit', $item->id_pembelian) }}" class="btn btn-warning">edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection