@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pesanan Jamur</h1>
    <a href="{{ route('pesanan.create') }}" class="btn btn-primary mb-3">Buat Pesanan Baru</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @forelse($pesanan ?? [] as $p)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pesanan #{{ $p->id }}</h5>
                    <p class="card-text">
                        <strong>Produk:</strong> {{ $p->produk->nama }}<br>
                        <strong>Jumlah:</strong> {{ $p->jumlah }}<br>
                        <strong>Total Harga:</strong> Rp {{ number_format($p->total_harga, 0, ',', '.') }}<br>
                        <strong>Status:</strong>
                        <span class="badge
                            @if($p->status == 'tertunda') bg-warning
                            @elseif($p->status == 'konfirmasi') bg-info
                            @elseif($p->status == 'dikirim') bg-primary
                            @elseif($p->status == 'terkirim') bg-success
                            @else bg-danger
                            @endif">
                            {{ ucfirst($p->status) }}
                        </span><br>
                        <strong>Alamat:</strong> {{ Str::limit($p->alamat_pengiriman, 30) }}
                    </p>
                    <a href="{{ route('pesanan.show', $p) }}" class="btn btn-info btn-sm">Lihat Detail</a>
                    <a href="{{ route('pesanan.edit', $p) }}" class="btn btn-warning btn-sm">Edit</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info">
                Belum ada pesanan. <a href="{{ route('pesanan.create') }}">Buat pesanan pertama</a>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection