@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pesanan</h1>
    <a href="{{ route('pesanan.create') }}" class="btn btn-primary">Buat Pesanan Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Alamat Pengiriman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->user->name }}</td>
                <td>{{ $p->produk->nama }}</td>
                <td>{{ $p->jumlah }}</td>
                <td>{{ $p->total_harga_formatted }}</td>
                <td>{{ $p->status }}</td>
                <td>{{ $p->alamat_pengiriman }}</td>
                <td>
                    <a href="{{ route('pesanan.show', $p) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('pesanan.edit', $p) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pesanan.destroy', $p) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection