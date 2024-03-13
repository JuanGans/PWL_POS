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
        $data =[
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' =>'John',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2024-02-28',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' =>'Alice',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2024-02-28',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' =>'Bob',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2024-02-27',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' =>'Sarah',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2024-02-27',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' =>'Emily',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2024-02-26',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' =>'David',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2024-02-26',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' =>'Lily',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2024-02-25',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' =>'James',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2024-02-25',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' =>'Olivia',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2024-02-24',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' =>'Ethan',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2024-02-24',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
