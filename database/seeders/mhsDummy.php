<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for($i = 1; $i <=10; $i++){
            DB::table('mhs')->insert([
                'nrp' => 'mhs00' . $i,
                'nama' => 'Nama ke-' . $i,
                'alamat' => 'ITS,'
            ]);
        }
    }
}
