<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedlemmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Medlemmer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->Increments('medlem_ID');
            $table->integer('gruppe_ID');
            $table->integer('joinLevel');
            $table->integer('deltaker_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Medlemmer');
    }
}
