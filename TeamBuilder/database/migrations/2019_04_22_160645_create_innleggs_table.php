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
        Schema::create('innlegg', function (Blueprint $table) {
            $table->increments('Innlegg_ID');
            $table->string('Tittle');
            $table->string('Subject');
            $table->string('Body');
            $table->integer('UserPost_ID');
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
