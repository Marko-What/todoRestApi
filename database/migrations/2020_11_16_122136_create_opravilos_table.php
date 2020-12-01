<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpravilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opravilos', function (Blueprint $table) {
	    $table->increments('id');
	    $table->string('naziv');
            $table->date('datumZakljucevanja')->format('d/m/Y')->nullable()->default(null);
	    $table->boolean('completed')->default(false);
	    $table->string('oseba');
            $table->string('opis', 2500);
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
        Schema::dropIfExists('opravilos');
    }
}
