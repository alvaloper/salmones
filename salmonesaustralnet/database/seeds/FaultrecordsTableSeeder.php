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
			'fault'       => 'Falla Operacional 1',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'titlerecord' => 'Falla Operacional 1',
			'solution'    => 'Solución Falla Operacional 1',
			'faultactive' => '1',
			'user_id'     => '1',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);

        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Falla Operacional 2',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'titlerecord' => 'Falla Operacional 2',
			'solution'    => 'Solución Falla Operacional 2',
			'faultactive' => '1',
			'user_id'     => '1',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);

        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Falla Operacional 3',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'titlerecord' => 'Falla Operacional 3',
			'solution'    => 'Solución Falla Operacional 3',
			'faultactive' => '0',
			'user_id'     => '1',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);

        DB::table('faultrecords')->insert([

			'faultdate'   => \Carbon\Carbon::now(),
			'faulthour'   => \Carbon\Carbon::now(),
			'fault'       => 'Falla Operacional 4',
			'enddate'     => \Carbon\Carbon::now(),
			'endhour'     => \Carbon\Carbon::now(),
			'titlerecord' => 'Falla Operacional 4',
			'solution'    => 'Solución Falla Operacional 4',
			'faultactive' => '0',
			'user_id'     => '1',
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
        ]);
    }
}
