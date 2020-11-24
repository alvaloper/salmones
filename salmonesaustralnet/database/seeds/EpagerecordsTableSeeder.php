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
          'eventepage'  		  => 'Incendio en el Anden de Carga 3. Fue controlado por el equipo de Bomberos de Santiago.',
          'actionseventepage' => 'No se detallan',
			    'file1'			  	    => 'nonpicture.jpg',
			    'file2' 		        => 'nonpicture.jpg',
			    'file3'       		  => 'nonpicture.jpg',
			    'file4'       		  => 'nonpicture.jpg',
			    'user_id'     		  => '1',
			    'created_at'  		  => \Carbon\Carbon::now(),
			    'updated_at'  		  => \Carbon\Carbon::now(),

        ]);
        
    }
}
