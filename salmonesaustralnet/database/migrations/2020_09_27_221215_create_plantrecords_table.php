<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantrecords', function (Blueprint $table) {
            $table->increments('idplantrecord');
            $table->string('titlerecord');
            $table->date('dateplant');
            $table->time('planthour');
            $table->string('plantevente');
            $table->string('actionsevent');
            $table->integer('plantactive')->default(1);
            $table->integer('plant_id')->unsigned()->index();
            $table->foreign('plant_id')->references('idplant')->on('plants')->onDelete('cascade');
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
        Schema::dropIfExists('plantrecords');
    }
}
