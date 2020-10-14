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
            'lastname'       => 'SalmonesAustral',
            'email'          => 'administrador@salmonesaustral.net',
            'password'       => Hash::make('DZgqp1k2D'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'María',
            'lastname'       => 'Vásquez',
            'email'          => 'mvasquez@salmonesaustral.net',
            'password'       => Hash::make('HSDLAVT4q'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'David',
            'lastname'       => 'Cárdenas',
            'email'          => 'dcardenas@salmonesaustral.net',
            'password'       => Hash::make('fhYsJNg9F'),
            'remember_token' => str_random(100)
        ));        
    }
}