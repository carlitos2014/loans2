<?php

use Illuminate\Database\Seeder;
use App\Tasa;


class TasasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tasa::create([
        	'name'		=> '0.20',
        ]);
    }
}
