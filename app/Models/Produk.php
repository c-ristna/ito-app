<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public $tabel = 'produk';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated-at';
    protected $auditTimestamps = true;

    public $fillable = [
        'id',
        'nama_produk',
        'harga',
        'stok',
        'deskripsi',
        'status_produk'
    ];
}
