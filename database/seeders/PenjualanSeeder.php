<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Andi', 'penjualan_kode' => 'PJ123', 'penjualan_tanggal' => '2024-03-1 15:30:00'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Wahyu', 'penjualan_kode' => 'PJ124', 'penjualan_tanggal' => '2024-02-28 12:45:00'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Nia', 'penjualan_kode' => 'PJ125', 'penjualan_tanggal' => '2024-02-22 09:15:00'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Vega', 'penjualan_kode' => 'PJ126', 'penjualan_tanggal' => '2024-02-25 12:20:00'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Eve', 'penjualan_kode' => 'PJ127', 'penjualan_tanggal' => '2024-02-28 12:30:00'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Charlie', 'penjualan_kode' => 'PJ128', 'penjualan_tanggal' => '2024-02-20 17:45:00'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Yudis', 'penjualan_kode' => 'PJ129', 'penjualan_tanggal' => '2024-02-22 13:10:00'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'David', 'penjualan_kode' => 'PJ130', 'penjualan_tanggal' => '2024-02-26 11:25:00'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Haris', 'penjualan_kode' => 'PJ131', 'penjualan_tanggal' => '2024-02-20 12:50:00'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Sarah', 'penjualan_kode' => 'PJ132', 'penjualan_tanggal' => '2024-02-15 15:00:00'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
