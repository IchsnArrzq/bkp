<?php

use Illuminate\Database\Seeder;
use App\{Tipe,Kode,Skor};
class SikapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipe::create([
            'tipe' => 'Reward'
        ]);
        Kode::create([
            'tipe_id' => 1,
            'kode' => 'H1.1'
        ]);
        Skor::create([
            'kode_id' => 1,
            'skor' => 70
        ]);
    }
}
