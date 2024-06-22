<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasFormatRupiah;
class Penjualan extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    public $tabel = 'penjualans';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $auditTimestamps = true;

    public $fillable = [
        'kode_penjualan',
        'tanggal',
        'list_produk',
        'total_harga',
        'metode_pembayaran',
        'status',
        'konsumens_id'
    ];
}
