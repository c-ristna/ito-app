<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;
    public $tabel = 'konsumens';
    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'updated_at';

    protected $auditTimestampt = true;

    public $fillable = [
        'kode_konsumen',
        'nama_konsumen',
        'alamat',
        'no_telepon',
        'terakhir_pembelian',
    ];
}
