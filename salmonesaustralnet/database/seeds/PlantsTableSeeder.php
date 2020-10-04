<?php

use Illuminate\Database\Seeder;

class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('plants')->insert([
          'nameplant'     => 'Chamiza',
          'created_at'    => \Carbon\Carbon::now(),
          'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('plants')->insert([
          'nameplant'     => 'Quintoa',
          'created_at'    => \Carbon\Carbon::now(),
          'updated_at'    => \Carbon\Carbon::now(),
        ]);
    }
}
