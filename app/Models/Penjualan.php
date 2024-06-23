<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Penjualan extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $table = 'penjualans';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $auditTimestamps = true;

    protected $fillable = [
        'kode_penjualan',
        'tanggal',
        'list_produk',
        'total_harga',
        'metode_pembayaran',
        'status',
        'konsumens_id'
    ];

    protected $casts = [
        'list_produk' => 'array'
    ];
}
