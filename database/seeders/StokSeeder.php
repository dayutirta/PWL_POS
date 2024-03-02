<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2024-02-28 14:30:00', 'stok_jumlah' => 50],
            ['stok_id' => 2, 'barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => '2024-02-25 10:45:00', 'stok_jumlah' => 30],
            ['stok_id' => 3, 'barang_id' => 3, 'user_id' => 1, 'stok_tanggal' => '2024-02-22 09:15:00', 'stok_jumlah' => 20],
            ['stok_id' => 4, 'barang_id' => 4, 'user_id' => 1, 'stok_tanggal' => '2024-02-20 15:20:00', 'stok_jumlah' => 40],
            ['stok_id' => 5, 'barang_id' => 5, 'user_id' => 1, 'stok_tanggal' => '2024-02-18 12:30:00', 'stok_jumlah' => 25],
            ['stok_id' => 6, 'barang_id' => 6, 'user_id' => 1, 'stok_tanggal' => '2024-02-15 17:45:00', 'stok_jumlah' => 15],
            ['stok_id' => 7, 'barang_id' => 7, 'user_id' => 1, 'stok_tanggal' => '2024-02-12 13:10:00', 'stok_jumlah' => 50],
            ['stok_id' => 8, 'barang_id' => 8, 'user_id' => 1, 'stok_tanggal' => '2024-02-10 11:25:00', 'stok_jumlah' => 35],
            ['stok_id' => 9, 'barang_id' => 9, 'user_id' => 1, 'stok_tanggal' => '2024-02-08 14:50:00', 'stok_jumlah' => 18],
            ['stok_id' => 10, 'barang_id' => 10, 'user_id' => 1, 'stok_tanggal' => '2024-02-05 16:00:00', 'stok_jumlah' => 30],
        ];

        DB::table('t_stok')->insert($data);
    }
}