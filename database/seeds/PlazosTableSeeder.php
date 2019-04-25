<?php

use Illuminate\Database\Seeder;
use App\Plazo;

class PlazosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plazo::create([
        	'name'		=> 'Dia',
        	'num_dias'  => '1',
        	'x'  		=> '1',
        ]);

        Plazo::create([
        	'name'		=> 'Semana',
        	'num_dias'  => '7',
        	'x'  		=> '1',
        ]);

        Plazo::create([
        	'name'		=> '15 Dias',
        	'num_dias'  => '15',
        	'x'  		=> '1',
        ]);

        Plazo::create([
        	'name'		=> '1 Mes',
        	'num_dias'  => '30',
        	'x'  		=> '1',
        ]);

        Plazo::create([
        	'name'		=> '1 Mes y medio',
        	'num_dias'  => '45',
        	'x'  		=> '1,5',
        ]);

        Plazo::create([
        	'name'		=> '2 Meses',
        	'num_dias'  => '60',
        	'x'  		=> '2',
        ]);

        Plazo::create([
        	'name'		=> '2 Meses y medio',
        	'num_dias'  => '75',
        	'x'  		=> '2,5',
        ]);

        Plazo::create([
        	'name'		=> '3 Meses',
        	'num_dias'  => '90',
        	'x'  		=> '3',
        ]);
    }
}
