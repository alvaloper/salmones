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
        $this->call(PermissionTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionUserTableSeeder::class);
        $this->call(PlantsTableSeeder::class);
        $this->call(CentersTableSeeder::class);
        $this->call(PlantrecordsTableSeeder::class);
        $this->call(MaritimerecordsTableSeeder::class);
        $this->call(FaultrecordsTableSeeder::class);
        $this->call(EpagerecordsTableSeeder::class);
    }
}
