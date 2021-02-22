<?php

use Illuminate\Database\Seeder;
use App\Tipe;
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
        Tipe::create([
            'tipe' => 'Punishment'
        ]);
    }
}
