<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name'           => 'Administrador',
            'lastname'       => 'De Seguridad',
            'email'          => 'mv2020@salmonesaustral.cl',
            'password'       => Hash::make('Ma0781$%'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'María',
            'lastname'       => 'Vásquez',
            'email'          => 'mvasquez@salmonesaustral.cl',
            'password'       => Hash::make('MAVAmv$$'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'David',
            'lastname'       => 'Cárdenas',
            'email'          => 'dcardenas@salmonesaustral.cl',
            'password'       => Hash::make('$DCCldc$'),
            'remember_token' => str_random(100)
        ));        
    }
}