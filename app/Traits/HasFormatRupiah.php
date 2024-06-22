<?php

namespace App\Traits;

trait HasFormatRupiah
{
    function formatRupiah($field, $prefix = 'Rp. ') 
    {
        return $prefix . number_format($field, 0, ',', '.');
    }
}