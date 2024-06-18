<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    public $tabel = 'penjualans';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
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
