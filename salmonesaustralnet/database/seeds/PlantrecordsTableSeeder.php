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
          'titlerecord'  => 'Registro de Planta 1',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Evento de Planta 1',
          'actionsevent' => 'Acciones de Planta 1',
          'plantactive'  => '0',
          'plant_id'     => '1',
          'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Registro de Planta 2',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Evento de Planta 2',
          'actionsevent' => 'Acciones de Planta 2',
          'plantactive'  => '1',
          'plant_id'     => '2',
          'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Registro de Planta 3',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Evento de Planta 3',
          'actionsevent' => 'Acciones de Planta 3',
          'plantactive'  => '1',
          'plant_id'     => '1',
          'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]); 

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Registro de Planta 4',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Evento de Planta 4',
          'actionsevent' => 'Acciones de Planta 4',
          'plantactive'  => '0',
          'plant_id'     => '1',
          'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]); 
    }
}
