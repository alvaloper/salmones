<?php

use Illuminate\Database\Seeder;

class PlantrecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Registro 1',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Evento 1',
          'actionsevent' => 'Acciones 1',
          'plantactive'  => '0',
          'plant_id'     => '1',
          'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Registro 2',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Evento 2',
          'actionsevent' => 'Acciones 2',
          'plantactive'  => '1',
          'plant_id'     => '2',
          'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Registro 3',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Evento 3',
          'actionsevent' => 'Acciones 3',
          'plantactive'  => '1',
          'plant_id'     => '1',
          'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]); 
    }
}
