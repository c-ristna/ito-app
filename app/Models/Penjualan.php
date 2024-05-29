<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    public $tabel = 'penjualan';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated-at';
    protected $auditTimestamps = true;

    public $fillable = [
        'id',
        'tanggal_penjualan',
        'list_produk',
        'total_harga',
        'metode_pembayaran',
        'status_penjualan'
    ];
}
