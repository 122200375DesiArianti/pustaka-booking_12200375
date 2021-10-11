<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      =>'Desi Arianti',
                'password'  =>md5('12200375')
            ],
            [
                'nama'      =>'Creator',
                'password'  =>md5('23456')
            ],
            [
                'nama'      =>'12200375',
                'password'  =>md5('Desi Arianti')
            ]
            ];
            $p = new Pengguna();
            $p->InsertBatch($data);
    }
}
