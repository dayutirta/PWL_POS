<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 7000000],
            ['barang_id' => 2, 'kategori_id' => 2, 'barang_kode' => 'B002', 'barang_nama' => 'Hoodie', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['barang_id' => 3, 'kategori_id' => 3, 'barang_kode' => 'B003', 'barang_nama' => 'Panci', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 4, 'kategori_id' => 4, 'barang_kode' => 'B004', 'barang_nama' => 'Aki Motor', 'harga_beli' => 300000, 'harga_jual' => 400000],
            ['barang_id' => 5, 'kategori_id' => 5, 'barang_kode' => 'B005', 'barang_nama' => 'Bolu Matcha', 'harga_beli' => 25000, 'harga_jual' => 30000],
            ['barang_id' => 6, 'kategori_id' => 1, 'barang_kode' => 'B006', 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 4000000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'B007', 'barang_nama' => 'Kemeja', 'harga_beli' => 250000, 'harga_jual' => 350000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'B008', 'barang_nama' => 'Blender', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'B009', 'barang_nama' => 'Oli Mobil', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'B010', 'barang_nama' => 'Jus Mangga', 'harga_beli' => 5000, 'harga_jual' => 8000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
