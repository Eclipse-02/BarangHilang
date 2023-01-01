<?php

namespace Database\Seeders;

use App\Models\Tipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipes = ['Surat Penting', 'Kendaraan'];

        foreach ($tipes as $t) {
            Tipe::create(['name' => $t,]);
        }
    }
}
