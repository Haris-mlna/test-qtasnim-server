<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Barang', 'Stok', 'Jumlah_Terjual', 'Tanggal_Transaksi', 'Jenis_Barang',
    ];

    // Define any additional methods or relationships here
}
