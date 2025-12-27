<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    
    protected $fillable = [
        'nama',
        'harga',
        'stok',
        'deskripsi',
        'gambar',
        'kategori'
    ];

    /**
     * Accessor untuk format harga
     */
    public function getHargaFormattedAttribute()
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}
