<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJN20240301',
                'penjualan_tanggal' => '2024-03-01',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PJN20240302',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Alice Johnson',
                'penjualan_kode' => 'PJN20240303',
                'penjualan_tanggal' => '2024-03-03',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Bob Brown',
                'penjualan_kode' => 'PJN20240304',
                'penjualan_tanggal' => '2024-03-04',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Carol Williams',
                'penjualan_kode' => 'PJN20240305',
                'penjualan_tanggal' => '2024-03-05',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'David Jones',
                'penjualan_kode' => 'PJN20240306',
                'penjualan_tanggal' => '2024-03-06',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Eva Garcia',
                'penjualan_kode' => 'PJN20240307',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Frank Martinez',
                'penjualan_kode' => 'PJN20240308',
                'penjualan_tanggal' => '2024-03-08',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Grace Rodriguez',
                'penjualan_kode' => 'PJN20240309',
                'penjualan_tanggal' => '2024-03-09',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Henry Lopez',
                'penjualan_kode' => 'PJN20240310',
                'penjualan_tanggal' => '2024-03-10',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
