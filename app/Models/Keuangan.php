<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    public $table = 'keuangans';
    
    const CREATED_AT ='created_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamps = true;

    public $fillable = [
        'id',
        'tanggal_keuangan',
        'pemasukan',
        'pengeluaran',
        'saldo',
        'total',
    ];
}
