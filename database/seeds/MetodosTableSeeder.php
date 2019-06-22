<?php

use Illuminate\Database\Seeder;
use App\Metodo;

class MetodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Metodo::create([
        	'name'		=> 'Diario',
        	'dias'  	=> '1',
        ]);

        Metodo::create([
        	'name'		=> 'Semanal',
        	'dias'  	=> '7',
        ]);

        Metodo::create([
        	'name'		=> 'Quincenal',
        	'dias'  	=> '15',
        ]);

        Metodo::create([
        	'name'		=> 'Mensual',
        	'dias'  	=> '30',
        ]);
    }
}
