@extends('layouts.dashboard.app')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <a href="{{ Route('detail_barang.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Barang</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $k => $item)
                            <tr>
                                {{-- karena index dimulai dari 0 maka kita perlu menambahkan angka 1 --}}
                                <td>{{ $k + 1 }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->kategori_barang }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->stok }}</td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
