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
          'titlerecord'  => 'Carga en Anden 3',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Se mantuvo visualizada dicha maniobra no encontrando observaciones',
          'actionsevent' => 'No se detallan',
          'plant_id'     => '1',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Descarga de materia Prima (1ra. Batea)',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Se mantuvo visualizada dicha maniobra no encontrando observaciones',
          'actionsevent' => 'No se detallan',
          'plant_id'     => '1',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Carga en Andenes (Anden 2)',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Se mantuvo visualizada dicha maniobra no encontrando observaciones',
          'actionsevent' => 'No se detallan',
          'plant_id'     => '1',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Personal realiza lavado de piso de  patio',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Se mantuvo visualizada dicha maniobra no encontrando observaciones',
          'actionsevent' => 'No se detallan',
          'plant_id'     => '1',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        //
        
        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Inicio de carga en Andenes (Anden 2 y Anden 3)',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Se mantuvo visualizada dicha maniobra no encontrando observaciones',
          'actionsevent' => 'No se detallan',
          'plant_id'     => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Descarga de materia Prima (1ra. Batea)',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Se mantuvo visualizada dicha maniobra no encontrando observaciones',
          'actionsevent' => 'No se detallan',
          'plant_id'     => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Descarga  de Bins en Patio',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Se mantuvo visualizada dicha maniobra no encontrando observaciones',
          'actionsevent' => 'No se detallan',
          'plant_id'     => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('plantrecords')->insert([
          'titlerecord'  => 'Descarga de materia Prima (3ra. Batea)',
          'dateplant'    => \Carbon\Carbon::now(),
          'planthour'    => \Carbon\Carbon::now(),
          'plantevente'  => 'Se mantuvo visualizada dicha maniobra no encontrando observaciones',
          'actionsevent' => 'No se detallan',
          'plant_id'     => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);
    }
}
