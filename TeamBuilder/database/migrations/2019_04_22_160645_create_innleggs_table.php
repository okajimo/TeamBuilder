<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInnleggsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Innlegg', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('innlegg_ID');
            $table->string('tittle');
            $table->string('subject');
            $table->string('body');
            $table->integer('userPost_ID');
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
        Schema::dropIfExists('innlegg');
    }
}
