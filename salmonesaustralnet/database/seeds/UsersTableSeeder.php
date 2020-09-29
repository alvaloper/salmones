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
            'name'           => 'Salmones Austral',
            'foto'           => 'avatar04.png',
            'login'          => 'Salmones Austral CTO',
            'email'          => 'administrador@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'María Morales',
            'foto'           => 'avatar04.png',
            'login'          => 'Salmones Austral EDIT',
            'email'          => 'editor@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));
    }
}