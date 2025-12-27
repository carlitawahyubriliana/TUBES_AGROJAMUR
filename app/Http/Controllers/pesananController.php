<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::with(['user', 'produk'])->get();
        return view('pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        return view('pesanan.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|integer|min:1',
            'alamat_pengiriman' => 'required|string',
        ]);

        $produk = Produk::find($request->produk_id);
        $total_harga = $produk->harga * $request->jumlah;

        Pesanan::create([
            'user_id' => Auth::id(),
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
            'status' => 'tertunda',
            'alamat_pengiriman' => $request->alamat_pengiriman,
        ]);

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        return view('pesanan.show', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        $produk = Produk::all();
        return view('pesanan.edit', compact('pesanan', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|integer|min:1',
            'status' => 'required|in:tertunda,konfirmasi,dikirim,terkirim,dibatalkan',
            'alamat_pengiriman' => 'required|string',
        ]);

        $produk = Produk::find($request->produk_id);
        $total_harga = $produk->harga * $request->jumlah;

        $pesanan->update([
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
            'status' => $request->status,
            'alamat_pengiriman' => $request->alamat_pengiriman,
        ]);

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}