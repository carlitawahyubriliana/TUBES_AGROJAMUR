@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Pesanan Baru</h1>
    <form action="{{ route('pesanan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produk_id">Produk</label>
            <select name="produk_id" id="produk_id" class="form-control" required>
                <option value="">Pilih Produk</option>
                @foreach($produk as $p)
                <option value="{{ $p->id }}">{{ $p->nama }} - Rp {{ number_format($p->harga, 0, ',', '.') }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" required>
        </div>
        <div class="form-group">
            <label for="alamat_pengiriman">Alamat Pengiriman</label>
            <textarea name="alamat_pengiriman" id="alamat_pengiriman" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection