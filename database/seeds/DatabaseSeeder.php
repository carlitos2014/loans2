<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FormaPagosTableSeeder::class);
        $this->call(PlazosTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(TasasTableSeeder::class);
    }
}
