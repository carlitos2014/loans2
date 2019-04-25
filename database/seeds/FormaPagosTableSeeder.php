<?php

use Illuminate\Database\Seeder;
use App\FormaPago;

class FormaPagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormaPago::create([
        	'name'		=> 'Diario',
        	'dias'  	=> '1',
        ]);

        FormaPago::create([
        	'name'		=> 'Semanal',
        	'dias'  	=> '7',
        ]);

        FormaPago::create([
        	'name'		=> 'Quincenal',
        	'dias'  	=> '15',
        ]);

        FormaPago::create([
        	'name'		=> 'Mensual',
        	'dias'  	=> '30',
        ]);
    }
}
