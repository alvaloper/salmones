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
          'namecenter'     => 'Angosta',
          'emergencyphone' => '976697113',
          'boss'           => '--',
          'assistant'      => '--',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);

        DB::table('centers')->insert([
          'namecenter'     => 'Errazuriz',
          'emergencyphone' => '976697113',
          'boss'           => 'Gastón Díaz',
          'assistant'      => 'David Niñes',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);


        DB::table('centers')->insert([
          'namecenter'     => 'Pichagua',
          'emergencyphone' => '942057959',
          'boss'           => 'Ricardo Tielle',
          'assistant'      => '--',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now(),
        ]);
    }
}
