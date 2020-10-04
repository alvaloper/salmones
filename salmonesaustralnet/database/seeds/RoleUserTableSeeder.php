<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad\RoleUser;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleUser::create(array(
            'role_id'  => 1,
            'user_id'  => 1
        ));

        RoleUser::create(array(
            'role_id'  => 2,
            'user_id'  => 2
        ));

        RoleUser::create(array(
            'role_id'  => 1,
            'user_id'  => 3
        ));

        RoleUser::create(array(
            'role_id'  => 1,
            'user_id'  => 4
        ));

        RoleUser::create(array(
            'role_id'  => 2,
            'user_id'  => 5
        ));

        RoleUser::create(array(
            'role_id'  => 2,
            'user_id'  => 6
        ));

        RoleUser::create(array(
            'role_id'  => 2,
            'user_id'  => 7
        ));

        RoleUser::create(array(
            'role_id'  => 2,
            'user_id'  => 8
        ));

        RoleUser::create(array(
            'role_id'  => 2,
            'user_id'  => 9
        ));

        RoleUser::create(array(
            'role_id'  => 2,
            'user_id'  => 10
        ));

        RoleUser::create(array(
            'role_id'  => 2,
            'user_id'  => 11
        ));
    }
}
