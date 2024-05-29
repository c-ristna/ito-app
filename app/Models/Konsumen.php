<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumens extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'updated_at';

    protected $auditTimestampt = true;

    public $fillable = [
        'id',
        'nama_konsumen',
        'alamat',
        'no_telepon',
        'terakhir_pembelian',
    ];
}
