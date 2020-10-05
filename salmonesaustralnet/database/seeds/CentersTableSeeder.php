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
          'namecenter'     => 'Medellin',
          'emergencyphone' => '12345678',
          'boss'           => 'Junior Brillant',
          'assistant'      => 'Linda Graykat',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);

        DB::table('centers')->insert([
          'namecenter'     => 'Santiago',
          'emergencyphone' => '87654321',
          'boss'           => 'María Dugarte',
          'assistant'      => 'Luis Shakespeare',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);

        DB::table('centers')->insert([
          'namecenter'     => 'Venecia',
          'emergencyphone' => '12345678',
          'boss'           => 'Jonas Bertolli',
          'assistant'      => 'Luis Campagnin',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);

        DB::table('centers')->insert([
          'namecenter'     => 'London',
          'emergencyphone' => '876543211',
          'boss'           => 'Joseph Lord',
          'assistant'      => 'Mary Shakespeare',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);

        DB::table('centers')->insert([
          'namecenter'     => 'Madrid',
          'emergencyphone' => '876543211',
          'boss'           => 'María Spanic',
          'assistant'      => 'Juan Pérez',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);

        DB::table('centers')->insert([
          'namecenter'     => 'Montevideo',
          'emergencyphone' => '876543210',
          'boss'           => 'Eduard Lick',
          'assistant'      => 'Leidy Alva',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);


    }
}
