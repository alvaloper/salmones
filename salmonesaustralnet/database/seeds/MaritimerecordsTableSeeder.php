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
          'sailhour'     => \Carbon\Carbon::now(),
		  'marineevent'  => 'Evento Marino 1',
		  'marineactive' => '0',
		  'center_id'    => '1',
		  'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Nocturno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'sailhour'     => \Carbon\Carbon::now(),
		  'marineevent'  => 'Evento Marino 2',
		  'marineactive' => '1',
		  'center_id'    => '1',
		  'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);

        DB::table('maritimerecords')->insert([
          'turn'         => 'Diurno',
          'datemarine'   => \Carbon\Carbon::now(),
          'landfallhour' => \Carbon\Carbon::now(),
          'sailhour'     => \Carbon\Carbon::now(),
		  'marineevent'  => 'Evento Marino 3',
		  'marineactive' => '1',
		  'center_id'    => '2',
		  'user_id'      => '1',
          'created_at'   => \Carbon\Carbon::now(),
          'updated_at'   => \Carbon\Carbon::now(),
        ]);
    }
}
