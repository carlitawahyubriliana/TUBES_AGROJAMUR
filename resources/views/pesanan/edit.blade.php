@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pesanan</h1>
    <form action="{{ route('pesanan.update', $pesanan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="produk_id">Produk</label>
            <select name="produk_id" id="produk_id" class="form-control" required>
                <option value="">Pilih Produk</option>
                @foreach($produk as $p)
                <option value="{{ $p->id }}" {{ $p->id == $pesanan->produk_id ? 'selected' : '' }}>{{ $p->nama }} - Rp {{ number_format($p->harga, 0, ',', '.') }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" value="{{ $pesanan->jumlah }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="tertunda" {{ $pesanan->status == 'tertunda' ? 'selected' : '' }}>Tertunda</option>
                <option value="konfirmasi" {{ $pesanan->status == 'konfirmasi' ? 'selected' : '' }}>Konfirmasi</option>
                <option value="dikirim" {{ $pesanan->status == 'dikirim' ? 'selected' : '' }}>Dikirim</option>
                <option value="terkirim" {{ $pesanan->status == 'terkirim' ? 'selected' : '' }}>Terkirim</option>
                <option value="dibatalkan" {{ $pesanan->status == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat_pengiriman">Alamat Pengiriman</label>
            <textarea name="alamat_pengiriman" id="alamat_pengiriman" class="form-control" required>{{ $pesanan->alamat_pengiriman }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection