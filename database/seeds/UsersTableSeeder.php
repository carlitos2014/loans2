<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use App\RoleUser;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniel',
            'last_name' => 'Gallego',
            'user_name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        Role::create([
        	'name'		=> 'Admin',
        	'slug'  	=> 'slug',
        	'special' 	=> 'all-access'
        ]);

        RoleUser::create([
            'role_id'   => '1',
            'user_id'   => '1'
        ]);
    }
}
