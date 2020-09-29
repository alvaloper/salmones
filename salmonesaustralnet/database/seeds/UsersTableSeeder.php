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

        User::create(array(
            'name'           => 'Luis Espinoza',
            'foto'           => 'avatar04.png',
            'login'          => 'Root 1',
            'email'          => 'espinozalj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Leidy Espinoza',
            'foto'           => 'avatar04.png',
            'login'          => 'Root 2',
            'email'          => 'espinozalb@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Itala Espinoza',
            'foto'           => 'avatar04.png',
            'login'          => 'Admin 1',
            'email'          => 'espinozai@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Jose Espinoza',
            'foto'           => 'avatar04.png',
            'login'          => 'Admin 2',
            'email'          => 'espinozaj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Leidy Alvarado',
            'foto'           => 'avatar04.png',
            'login'          => 'Admin 3',
            'email'          => 'alvaradol@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Luis Alvarado',
            'foto'           => 'avatar04.png',
            'login'          => 'Admin 4',
            'email'          => 'alvaradolj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Itala Alvarado',
            'foto'           => 'avatar04.png',
            'login'          => 'Admin 5',
            'email'          => 'alvaradoi@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Luis Pulido',
            'foto'           => 'avatar04.png',
            'login'          => 'Admin 6',
            'email'          => 'pulidol@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Jose Pulido',
            'foto'           => 'avatar04.png',
            'login'          => 'Admin 7',
            'email'          => 'pulidoj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'fechainicio'    => \Carbon\Carbon::now(),
            'fechafin'       => \Carbon\Carbon::now()->addMonth(6),
            'remember_token' => str_random(100)
        ));
        
    }
}