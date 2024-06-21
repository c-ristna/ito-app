<?php
function formatRupiah($field, $prefix = null) 
{
    $prefix = $prefix ? $prefix : 'Rp. ';
    return $prefix . number_format($field, 0, ',', '.');
}
