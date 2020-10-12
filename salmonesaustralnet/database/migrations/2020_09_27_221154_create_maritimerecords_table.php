<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaritimerecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maritimerecords', function (Blueprint $table) {
            $table->increments('idmarinerecord');
            $table->string('turn');
            $table->date('datemarine');
            $table->time('landfallhour');
            $table->time('sailhour');
            $table->string('marineevent');
            $table->integer('marineactive')->default(1);
            $table->integer('center_id')->unsigned()->index();
            $table->foreign('center_id')->references('idcenter')->on('centers')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maritimerecords');
    }
}
