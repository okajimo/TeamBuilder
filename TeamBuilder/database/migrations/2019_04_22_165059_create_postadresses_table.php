<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostadressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Postadresse', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('postNr');
            $table->string('postNavn');
        });

        Schema::table('Postadresse', function (Blueprint $table) {
            $table->index('postNr');
            $table->primary('postNr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Postadresse');
    }
}
