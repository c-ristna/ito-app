<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public $tabel = 'produks';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $auditTimestamps = true;

    public $fillable = [
        'kode_produk',
        'nama_produk',
        'harga',
        'stok',
        'deskripsi',
        'status'
    ];
}
