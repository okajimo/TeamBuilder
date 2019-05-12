<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeltakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Deltaker', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->Increments('deltaker_ID');
            $table->integer('user_ID');
            $table->integer('område_ID');
            $table->integer('deltaker_level');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Deltaker');
    }
}
