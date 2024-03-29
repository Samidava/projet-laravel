<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapies', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->string('sujet,256');
            $table->decimal('tarif');
            $table->enum('statut',['en cours','termine']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('therapies');
    }
}
