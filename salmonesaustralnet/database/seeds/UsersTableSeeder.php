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
            'name'           => 'Salmones',
            'lastname'       => 'Austral',
            'email'          => 'administrador@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'María',
            'lastname'       => 'Fernández',
            'email'          => 'editor@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Luis',
            'lastname'       => 'Espinoza',
            'email'          => 'espinozalj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Leidy',
            'lastname'       => 'Espinoza',
            'email'          => 'espinozalb@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Itala',
            'lastname'       => 'Espinoza',
            'email'          => 'espinozai@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Jose',
            'lastname'       => 'Espinoza',
            'email'          => 'espinozaj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Leidy',
            'lastname'       => 'Alvarado',
            'email'          => 'alvaradol@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Luis',
            'lastname'       => 'Alvarado',
            'email'          => 'alvaradolj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Itala',
            'lastname'       => 'Alvarado',
            'email'          => 'alvaradoi@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Luis',
            'lastname'       => 'Pérez',
            'email'          => 'perezl@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Jose',
            'lastname'       => 'Marquéz',
            'email'          => 'marquezj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));
        
    }
}