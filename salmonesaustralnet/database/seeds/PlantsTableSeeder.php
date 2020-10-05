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

        DB::table('plants')->insert([
          'nameplant'     => 'Mérida',
          'created_at'    => \Carbon\Carbon::now(),
          'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('plants')->insert([
          'nameplant'     => 'Táchira',
          'created_at'    => \Carbon\Carbon::now(),
          'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('plants')->insert([
          'nameplant'     => 'Venecia',
          'created_at'    => \Carbon\Carbon::now(),
          'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('plants')->insert([
          'nameplant'     => 'Colombia',
          'created_at'    => \Carbon\Carbon::now(),
          'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('plants')->insert([
          'nameplant'     => 'Brasil',
          'created_at'    => \Carbon\Carbon::now(),
          'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('plants')->insert([
          'nameplant'     => 'España',
          'created_at'    => \Carbon\Carbon::now(),
          'updated_at'    => \Carbon\Carbon::now(),
        ]);
    }
}
