<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Maya Firdayani'
            ],
            [
                'name' => 'Homer Masanang'
            ],
            [
                'name' => 'Kuniyati Konda'
            ],
            [
                'name' => 'Tutut Wijayanti'
            ],
            [
                'name' => 'Kris Budiharso'
            ],
            [
                'name' => 'Budi Tabaika'
            ],
            [
                'name' => 'Danang Setiyadi'
            ],
            [
                'name' => 'Yoshi Agustia Dewi'
            ],
            [
                'name' => 'Anugrah Madya Putra'
            ],
            [
                'name' => 'Wahyu Chrestanto'
            ],
            [
                'name' => 'Dedi'
            ],
            [
                'name' => 'Deni Dirgantara'
            ],
            [
                'name' => 'Ridwan'
            ],
            [
                'name' => 'Taufiq'
            ],
            [
                'name' => 'Samudi'
            ],
        ];

        foreach ($data as $row) {
            DB::table('pegawai')->insert($row);
        }
    }
}
