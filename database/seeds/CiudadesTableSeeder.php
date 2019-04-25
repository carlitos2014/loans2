<?php

use Illuminate\Database\Seeder;
use App\Ciudad;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create([
        	'name'		=> 'Cali',
        ]);
    }
}
