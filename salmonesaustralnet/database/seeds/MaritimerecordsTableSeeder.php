<?php

use Illuminate\Database\Seeder;

class MaritimerecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
    		  'marineevent'  => 'Panga Queullin I, inicia salida  con personal  desde el Pontón',
		      'center_id'    => '3',
		      'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Panga Queullin I, ingreso de personal al módulo',
          'center_id'    => '3',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Panga Queullin I, se ubica en la plataforma para proceder al retiro de materiales dirigiéndose al módulo',
          'center_id'    => '3',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Se visualiza cuatro personas realizando recorrido por el módulo',
          'center_id'    => '3',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);


        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Panga Queullin I, ingreso de una persona al Pontón',
          'center_id'    => '3',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Nocturno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Panga Queullin I se dirige a Pontón con personal de seguridad.',
          'center_id'    => '3',
          'user_id'      => '3',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Nocturno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Se detecta Foco Perko en movimiento y fotoperiodo encendido.',
          'center_id'    => '3',
          'user_id'      => '3',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);


        //


                DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Embarcacion Viento Sur (lancha Blanca) se ubica con  ingreso de materiales "soporte pajarero"',
          'center_id'    => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Lancha Cagua con traslado de personal a la base el rosario',
          'center_id'    => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Se visualiza el bote Trauco en Ensilaje',
          'center_id'    => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Embarcacion Viento Sur',
          'center_id'    => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);


        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Panga Queullin I, ingreso de una persona al Pontón',
          'center_id'    => '2',
          'user_id'      => '2',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Nocturno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'marineevent'  => 'Puerto cerrado, Inicio de jornada con muy mal clima, limitando la operatividad de la misma.',
          'center_id'    => '2',
          'user_id'      => '3',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);
    }
}
