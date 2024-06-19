<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    public $tabel = 'keuangans';
    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'updated_at';

    protected $auditTimestampt = true;

    public $fillable = [
        'tanggal',
        'kode_keuangan',
        'pemasukan',
        'pengeluaran',
        'saldo',
    ];
}
