<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numbers = 3;
        $username = ['admin', 'manager', 'staff'];
        $nama = ['Administrator', 'Manager', 'Staff / Kasir'];
        $data = [];

        for ($i = 0; $i < $numbers; $i++) {
            $data[] = [
                'user_id' => $numbers + 1,
                'level_id' => $numbers + 1,
                'username' => $username[$i],
                'nama' => $nama[$i],
                'password' => Hash::make('12345'),
            ];
        }
        DB::table('m_user')->insert($data);
    }
}
