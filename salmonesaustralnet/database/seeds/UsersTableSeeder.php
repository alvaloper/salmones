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
            'lastname'       => 'Salmones Austral CTO',
            'email'          => 'administrador@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'María Morales',
            'lastname'       => 'Salmones Austral EDIT',
            'email'          => 'editor@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Luis Espinoza',
            'lastname'       => 'Root 1',
            'email'          => 'espinozalj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Leidy Espinoza',
            'lastname'       => 'Root 2',
            'email'          => 'espinozalb@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Itala Espinoza',
            'lastname'       => 'Admin 1',
            'email'          => 'espinozai@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Jose Espinoza',
            'lastname'       => 'Admin 2',
            'email'          => 'espinozaj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Leidy Alvarado',
            'lastname'       => 'Admin 3',
            'email'          => 'alvaradol@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Luis Alvarado',
            'lastname'       => 'Admin 4',
            'email'          => 'alvaradolj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Itala Alvarado',
            'lastname'       => 'Admin 5',
            'email'          => 'alvaradoi@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Luis Pulido',
            'lastname'       => 'Admin 6',
            'email'          => 'pulidol@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));

        User::create(array(
            'name'           => 'Jose Pulido',
            'lastname'       => 'Admin 7',
            'email'          => 'pulidoj@salmonesaustral.net',
            'password'       => Hash::make('123456'),
            'remember_token' => str_random(100)
        ));
        
    }
}