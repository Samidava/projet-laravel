<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
   
    
    
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 256);
            $table->string('prenom', 256);
            $table->string('e-mail', 256);
        });
    }


    public function down()
    {
        Schema::dropIfExists('people');
    }
}