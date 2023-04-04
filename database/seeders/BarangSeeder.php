<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'kode_barang' => '001',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '002',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '003',
            'nama_barang' => 'Chiki Ball',
            'kategori_barang' => 'Snack',
            'harga' => '1000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '004',
            'nama_barang' => 'Beras',
            'kategori_barang' => 'Bahan Pokok',
            'harga' => '10000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '005',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '006',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '007',
            'nama_barang' => 'Chiki Ball',
            'kategori_barang' => 'Snack',
            'harga' => '1000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '008',
            'nama_barang' => 'Beras',
            'kategori_barang' => 'Bahan Pokok',
            'harga' => '10000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '009',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '010',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '011',
            'nama_barang' => 'Chiki Ball',
            'kategori_barang' => 'Snack',
            'harga' => '1000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '012',
            'nama_barang' => 'Beras',
            'kategori_barang' => 'Bahan Pokok',
            'harga' => '10000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '013',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '014',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '015',
            'nama_barang' => 'Chiki Ball',
            'kategori_barang' => 'Snack',
            'harga' => '1000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '016',
            'nama_barang' => 'Beras',
            'kategori_barang' => 'Bahan Pokok',
            'harga' => '10000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '017',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '018',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '019',
            'nama_barang' => 'Chiki Ball',
            'kategori_barang' => 'Snack',
            'harga' => '1000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '020',
            'nama_barang' => 'Beras',
            'kategori_barang' => 'Bahan Pokok',
            'harga' => '10000',
            'qty' => '100'
        ],
    ];

        DB::table('barang')->insert($data);
    }
}
