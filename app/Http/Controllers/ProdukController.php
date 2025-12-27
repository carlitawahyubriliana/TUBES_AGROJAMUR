<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Tampilkan semua produk (untuk admin)
     */
    public function index()
    {
        $produk = Produk::latest()->paginate(10);
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Tampilkan produk untuk customer (katalog/shop)
     */
    public function katalog(Request $request)
    {
        $query = Produk::query();

        // Filter berdasarkan kategori
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategori', $request->kategori);
        }

        // Search berdasarkan nama
        if ($request->has('search') && $request->search != '') {
            $query->where('nama', 'LIKE', '%' . $request->search . '%');
        }

        // Sort berdasarkan harga
        if ($request->has('sort')) {
            if ($request->sort == 'termurah') {
                $query->orderBy('harga', 'asc');
            } elseif ($request->sort == 'termahal') {
                $query->orderBy('harga', 'desc');
            }
        }

        // Filter stok tersedia
        $query->where('stok', '>', 0);

        $produk = $query->paginate(12);
        
        // Daftar kategori untuk filter
        $kategori = [
            'tiram_putih' => 'Jamur Tiram Putih',
            'tiram_coklat' => 'Jamur Tiram Coklat',
            'kuping' => 'Jamur Kuping',
            'kancing' => 'Jamur Kancing'
        ];

        return view('produk.katalog', compact('produk', 'kategori'));
    }

    /**
     * Tampilkan detail produk
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        
        // Produk terkait (kategori yang sama)
        $produkTerkait = Produk::where('kategori', $produk->kategori)
            ->where('id', '!=', $id)
            ->where('stok', '>', 0)
            ->limit(4)
            ->get();

        return view('produk.detail', compact('produk', 'produkTerkait'));
    }

    /**
     * Form tambah produk baru
     */
    public function create()
    {
        $kategori = [
            'tiram_putih' => 'Jamur Tiram Putih',
            'tiram_coklat' => 'Jamur Tiram Coklat',
            'kuping' => 'Jamur Kuping',
            'kancing' => 'Jamur Kancing'
        ];
        
        return view('admin.produk.create', compact('kategori'));
    }

    /**
     * Simpan produk baru
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required|in:tiram_putih,tiram_coklat,kuping,kancing',
        ], [
            'nama.required' => 'Nama produk wajib diisi',
            'harga.required' => 'Harga wajib diisi',
            'harga.integer' => 'Harga harus berupa angka',
            'harga.min' => 'Harga tidak boleh negatif',
            'stok.required' => 'Stok wajib diisi',
            'stok.integer' => 'Stok harus berupa angka',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'gambar.required' => 'Gambar produk wajib diupload',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Format gambar: jpeg, png, jpg, gif',
            'gambar.max' => 'Ukuran gambar maksimal 2MB',
            'kategori.required' => 'Kategori wajib dipilih',
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->extension();
            $path = $file->storeAs('produk', $filename, 'public');
            $validated['gambar'] = $path;
        }

        // Simpan ke database
        Produk::create($validated);

        return redirect()
            ->route('admin.produk.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Form edit produk
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        
        $kategori = [
            'tiram_putih' => 'Jamur Tiram Putih',
            'tiram_coklat' => 'Jamur Tiram Coklat',
            'kuping' => 'Jamur Kuping',
            'kancing' => 'Jamur Kancing'
        ];
        
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update produk
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required|in:tiram_putih,tiram_coklat,kuping,kancing',
        ]);

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($produk->gambar && Storage::disk('public')->exists($produk->gambar)) {
                Storage::disk('public')->delete($produk->gambar);
            }

            // Upload gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->extension();
            $path = $file->storeAs('produk', $filename, 'public');
            $validated['gambar'] = $path;
        }

        // Update database
        $produk->update($validated);

        return redirect()
            ->route('admin.produk.index')
            ->with('success', 'Produk berhasil diupdate!');
    }

    /**
     * Hapus produk
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // Hapus gambar dari storage
        if ($produk->gambar && Storage::disk('public')->exists($produk->gambar)) {
            Storage::disk('public')->delete($produk->gambar);
        }

        // Hapus dari database
        $produk->delete();

        return redirect()
            ->route('admin.produk.index')
            ->with('success', 'Produk berhasil dihapus!');
    }

    /**
     * Update stok produk (untuk admin)
     */
    public function updateStok(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'stok' => 'required|integer|min:0',
        ]);

        $produk->update([
            'stok' => $request->stok
        ]);

        return back()->with('success', 'Stok berhasil diupdate!');
    }

    /**
     * Cek ketersediaan stok (untuk AJAX)
     */
    public function checkStok($id)
    {
        $produk = Produk::findOrFail($id);
        
        return response()->json([
            'stok' => $produk->stok,
            'tersedia' => $produk->stok > 0
        ]);
    }
}