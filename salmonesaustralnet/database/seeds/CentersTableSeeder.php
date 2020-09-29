<?php

use Illuminate\Database\Seeder;

class CentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centers')->insert([
          'namecenter'     => 'Pichagua',
          'emergencyphone' => '93456789',
          'boss'           => 'Daniel Dávila',
          'assistant'      => 'Juan Pérez',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);

        DB::table('centers')->insert([
          'namecenter'     => 'Santiago',
          'emergencyphone' => '12345678',
          'boss'           => 'María Dugarte',
          'assistant'      => 'Luis Shakespeare',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);
    }
}
