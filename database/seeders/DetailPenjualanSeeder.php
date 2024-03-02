<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'jumlah' => 3, 'harga' => 7000000 * 3],
            ['detail_id' => 2, 'penjualan_id' => 1, 'barang_id' => 2, 'jumlah' => 2, 'harga' => 300000 * 2],
            ['detail_id' => 3, 'penjualan_id' => 1, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 75000 * 1],

            ['detail_id' => 4, 'penjualan_id' => 2, 'barang_id' => 4, 'jumlah' => 4, 'harga' => 400000 * 4],
            ['detail_id' => 5, 'penjualan_id' => 2, 'barang_id' => 5, 'jumlah' => 1, 'harga' => 30000 * 1],
            ['detail_id' => 6, 'penjualan_id' => 2, 'barang_id' => 6, 'jumlah' => 2, 'harga' => 4000000 * 2],

            ['detail_id' => 7, 'penjualan_id' => 3, 'barang_id' => 7, 'jumlah' => 2, 'harga' => 350000 * 2],
            ['detail_id' => 8, 'penjualan_id' => 3, 'barang_id' => 8, 'jumlah' => 3, 'harga' => 120000 * 3],
            ['detail_id' => 9, 'penjualan_id' => 3, 'barang_id' => 9, 'jumlah' => 1, 'harga' => 150000 * 1],

            ['detail_id' => 10, 'penjualan_id' => 4, 'barang_id' => 10, 'jumlah' => 3, 'harga' => 8000 * 3],
            ['detail_id' => 11, 'penjualan_id' => 4, 'barang_id' => 1, 'jumlah' => 2, 'harga' => 7000000 * 2],
            ['detail_id' => 12, 'penjualan_id' => 4, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 300000 * 1],

            ['detail_id' => 13, 'penjualan_id' => 5, 'barang_id' => 3, 'jumlah' => 3, 'harga' => 75000 * 3],
            ['detail_id' => 14, 'penjualan_id' => 5, 'barang_id' => 4, 'jumlah' => 1, 'harga' => 400000 * 1],
            ['detail_id' => 15, 'penjualan_id' => 5, 'barang_id' => 5, 'jumlah' => 1, 'harga' => 30000 * 1],

            ['detail_id' => 16, 'penjualan_id' => 6, 'barang_id' => 6, 'jumlah' => 2, 'harga' => 4000000 * 2],
            ['detail_id' => 17, 'penjualan_id' => 6, 'barang_id' => 7, 'jumlah' => 1, 'harga' => 350000 * 1],
            ['detail_id' => 18, 'penjualan_id' => 6, 'barang_id' => 8, 'jumlah' => 1, 'harga' => 120000 * 1],

            ['detail_id' => 19, 'penjualan_id' => 7, 'barang_id' => 9, 'jumlah' => 4, 'harga' => 150000 * 4],
            ['detail_id' => 20, 'penjualan_id' => 7, 'barang_id' => 10, 'jumlah' => 1, 'harga' => 8000 * 1],
            ['detail_id' => 21, 'penjualan_id' => 7, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 7000000 * 1],

            ['detail_id' => 22, 'penjualan_id' => 8, 'barang_id' => 2, 'jumlah' => 3, 'harga' => 300000 * 3],
            ['detail_id' => 23, 'penjualan_id' => 8, 'barang_id' => 3, 'jumlah' => 2, 'harga' => 75000 * 2],
            ['detail_id' => 24, 'penjualan_id' => 8, 'barang_id' => 4, 'jumlah' => 1, 'harga' => 400000 * 1],

            ['detail_id' => 25, 'penjualan_id' => 9, 'barang_id' => 5, 'jumlah' => 2, 'harga' => 30000 * 2],
            ['detail_id' => 26, 'penjualan_id' => 9, 'barang_id' => 6, 'jumlah' => 1, 'harga' => 4000000 * 1],
            ['detail_id' => 27, 'penjualan_id' => 9, 'barang_id' => 7, 'jumlah' => 2, 'harga' => 350000 * 2],

            ['detail_id' => 28, 'penjualan_id' => 10, 'barang_id' => 8, 'jumlah' => 3, 'harga' => 120000 * 3],
            ['detail_id' => 29, 'penjualan_id' => 10, 'barang_id' => 9, 'jumlah' => 1, 'harga' => 150000 * 1],
            ['detail_id' => 30, 'penjualan_id' => 10, 'barang_id' => 10, 'jumlah' => 1, 'harga' => 8000 * 1],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
