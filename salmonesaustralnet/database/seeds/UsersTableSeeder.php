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
            'password'       => Hash::make('uVdW7-X40s'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'María',
            'lastname'       => 'Vásquez',
            'email'          => 'mvasquez@salmonesaustral.net',
            'password'       => Hash::make('MVACltbimv'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'David',
            'lastname'       => 'Cárdenas',
            'email'          => 'dcardenas@salmonesaustral.net',
            'password'       => Hash::make('DCClHK1pdc'),
            'remember_token' => str_random(100)
        ));        
    }
}