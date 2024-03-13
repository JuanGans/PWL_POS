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
            [
                'barang_id' => 1,
                'kategori_id' =>1,
                'barang_kode' => 'MA001',
                'barang_nama' => 'Paket buah segar',
                'harga_beli' => 200000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' =>2,
                'barang_kode' => 'PR001',
                'barang_nama' => 'Jas pria berbahan wol',
                'harga_beli' => 1500000,
                'harga_jual' => 3750000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' =>3,
                'barang_kode' => 'EL001',
                'barang_nama' => 'Kamera DSLR dengan lensa zoom',
                'harga_beli' => 10000000,
                'harga_jual' => 14000000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' =>4,
                'barang_kode' => 'PO001',
                'barang_nama' => 'Sepatu lari dengan teknologi baru',
                'harga_beli' => 600000,
                'harga_jual' => 1200000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' =>5,
                'barang_kode' => 'RT001',
                'barang_nama' => 'Lampu meja dengan desain vintage',
                'harga_beli' => 500000,
                'harga_jual' => 1000000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' =>1,
                'barang_kode' => 'MA002',
                'barang_nama' => 'Paket bahan makanan pokok',
                'harga_beli' => 300000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' =>2,
                'barang_kode' => 'PR002',
                'barang_nama' => 'Kemeja casual pria',
                'harga_beli' => 250000,
                'harga_jual' => 500000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' =>3,
                'barang_kode' => 'EL002',
                'barang_nama' => 'Smartphone terbaru',
                'harga_beli' => 9000000,
                'harga_jual' => 12000000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' =>4,
                'barang_kode' => 'PO002',
                'barang_nama' => 'Bola sepak kualitas tinggi',
                'harga_beli' => 150000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' =>5,
                'barang_kode' => 'RT002',
                'barang_nama' => 'Set perabotan dapur minimalis',
                'harga_beli' => 800000,
                'harga_jual' => 1500000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}