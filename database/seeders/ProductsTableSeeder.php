<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'Nama_Barang' => 'Kopi',
                'Stok' => 100,
                'Jumlah_Terjual' => 10,
                'Tanggal_Transaksi' => '2021-05-01',
                'Jenis_Barang' => 'Konsumsi',
            ],
            [
                'Nama_Barang' => 'Teh',
                'Stok' => 100,
                'Jumlah_Terjual' => 19,
                'Tanggal_Transaksi' => '2021-05-05',
                'Jenis_Barang' => 'Konsumsi',
            ],
            [
                'Nama_Barang' => 'Kopi',
                'Stok' => 90,
                'Jumlah_Terjual' => 15,
                'Tanggal_Transaksi' => '2021-05-10',
                'Jenis_Barang' => 'Konsumsi',
            ],
            [
                'Nama_Barang' => 'Pasta Gigi',
                'Stok' => 100,
                'Jumlah_Terjual' => 20,
                'Tanggal_Transaksi' => '2021-05-11',
                'Jenis_Barang' => 'Pembersih',
            ],
            [
                'Nama_Barang' => 'Sabun Mandi',
                'Stok' => 100,
                'Jumlah_Terjual' => 30,
                'Tanggal_Transaksi' => '2021-05-11',
                'Jenis_Barang' => 'Pembersih',
            ],
            [
                'Nama_Barang' => 'Sampo',
                'Stok' => 100,
                'Jumlah_Terjual' => 25,
                'Tanggal_Transaksi' => '2021-05-12',
                'Jenis_Barang' => 'Pembersih',
            ],
            [
                'Nama_Barang' => 'Teh',
                'Stok' => 81,
                'Jumlah_Terjual' => 5,
                'Tanggal_Transaksi' => '2021-05-12',
                'Jenis_Barang' => 'Konsumsi',
            ],
        ];

        DB::table('products')->insert($products);
    }
}
