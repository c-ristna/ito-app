<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'updated_at';

    protected $auditTimestampt = true;

    public $fillable = [
        'id',
        'nama_admin',
        'email',
        'password',
    ];
}