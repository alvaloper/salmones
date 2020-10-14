<?php

use Illuminate\Database\Seeder;

class FaultrecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Centro de Cultivo Errazuriz no emite señal de vídeo',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'solution'    => 'No se detalla',
			'user_id'     => '1',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);


        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Centro de Cultivo Errazuriz no emite señal de vídeo',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'solution'    => 'No se detalla',
			'user_id'     => '2',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);

        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Caída de señal del DVR Exterior',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'solution'    => 'No se detalla',
			'user_id'     => '3',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);

        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Señal intermitente Planta Quellón',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'solution'    => 'No se detalla',
			'user_id'     => '1',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);


        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Se pierde visualización de las cámaras exterior planta',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'solution'    => 'No se detalla',
			'user_id'     => '2',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);

        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Se pierde visualización del DVR de Bodega de Operaciones',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'solution'    => 'No se detalla',
			'user_id'     => '3',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);
    }
}
