@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pesanan</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Pesanan #{{ $pesanan->id }}</h5>
            <p><strong>User:</strong> {{ $pesanan->user->name }}</p>
            <p><strong>Produk:</strong> {{ $pesanan->produk->nama }}</p>
            <p><strong>Jumlah:</strong> {{ $pesanan->jumlah }}</p>
            <p><strong>Total Harga:</strong> {{ $pesanan->total_harga_formatted }}</p>
            <p><strong>Status:</strong> {{ $pesanan->status }}</p>
            <p><strong>Alamat Pengiriman:</strong> {{ $pesanan->alamat_pengiriman }}</p>
            <p><strong>Dibuat:</strong> {{ $pesanan->created_at }}</p>
        </div>
    </div>
    <a href="{{ route('pesanan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection