<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'ELEK001',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 1500000,
                'harga_jual' => 2000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ELEK002',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'PAKAI001',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'PAKAI002',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 200000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'MAKMIN001',
                'barang_nama' => 'Mie Instan',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'MAKMIN002',
                'barang_nama' => 'Minuman Soda',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'ATK001',
                'barang_nama' => 'Pensil',
                'harga_beli' => 500,
                'harga_jual' => 1000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'ATK002',
                'barang_nama' => 'Penghapus',
                'harga_beli' => 300,
                'harga_jual' => 600,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PERHIAS001',
                'barang_nama' => 'Anting-anting',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PERHIAS002',
                'barang_nama' => 'Kalung',
                'harga_beli' => 25000,
                'harga_jual' => 35000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
