<?php

use Illuminate\Database\Seeder;

class EpagerecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('epagerecords')->insert([

          'epagetitle'  		  => 'Incendio en Anden 3',
          'epagedate'   		  => \Carbon\Carbon::now(),
          'epagehour'   		  => \Carbon\Carbon::now(),
          'eventepage'  		  => 'Incendio en el Anden de Carga 3 iniciado por un corto circuito en el panel principal de electricidad. Después de quince minutos se propaga el incidente sin acción alguna, hasta que finalmente fue controlado por el equipo de Bomberos de Santiago. Se reportan pérdidas parciales debido a la intensidad con que se expandió el fuego.',
          'actionseventepage' => 'Llamado al 911 y al Jefe de Centro.',
			    'file1'			  	    => 'nonpicture.jpg',
			    'file2' 		        => 'nonpicture.jpg',
			    'file3'       		  => 'nonpicture.jpg',
			    'file4'       		  => 'nonpicture.jpg',
			    'user_id'     		  => '1',
			    'created_at'  		  => \Carbon\Carbon::now(),
			    'updated_at'  		  => \Carbon\Carbon::now(),

        ]);

        DB::table('epagerecords')->insert([

          'epagetitle'        => 'Incendio en Grúa 2',
          'epagedate'         => \Carbon\Carbon::now(),
          'epagehour'         => \Carbon\Carbon::now(),
          'eventepage'        => 'Incendio en la Grúa 2. Fue controlado por el equipo de planta.',
          'actionseventepage' => 'No se detallan.',
          'file1'             => 'nonpicture.jpg',
          'file2'             => 'nonpicture.jpg',
          'file3'             => 'nonpicture.jpg',
          'file4'             => 'nonpicture.jpg',
          'user_id'           => '1',
          'created_at'        => \Carbon\Carbon::now(),
          'updated_at'        => \Carbon\Carbon::now(),

        ]);

        DB::table('epagerecords')->insert([

          'epagetitle'        => 'Sismo de baja intensidad',
          'epagedate'         => \Carbon\Carbon::now(),
          'epagehour'         => \Carbon\Carbon::now(),
          'eventepage'        => 'Sismo de baja intensidad afecta operaciones en planta de procesos.',
          'actionseventepage' => 'No se detallan.',
          'file1'             => 'nonpicture.jpg',
          'file2'             => 'nonpicture.jpg',
          'file3'             => 'nonpicture.jpg',
          'file4'             => 'nonpicture.jpg',
          'user_id'           => '2',
          'created_at'        => \Carbon\Carbon::now(),
          'updated_at'        => \Carbon\Carbon::now(),

        ]);

        DB::table('epagerecords')->insert([

          'epagetitle'        => 'Tormenta Eléctrica',
          'epagedate'         => \Carbon\Carbon::now(),
          'epagehour'         => \Carbon\Carbon::now(),
          'eventepage'        => 'Tormenta eléctrica produce fuerte corriente de vientos afectando el techo del Anden 1.',
          'actionseventepage' => 'No se detallan.',
          'file1'             => 'nonpicture.jpg',
          'file2'             => 'nonpicture.jpg',
          'file3'             => 'nonpicture.jpg',
          'file4'             => 'nonpicture.jpg',
          'user_id'           => '1',
          'created_at'        => \Carbon\Carbon::now(),
          'updated_at'        => \Carbon\Carbon::now(),

        ]);
        
    }
}
