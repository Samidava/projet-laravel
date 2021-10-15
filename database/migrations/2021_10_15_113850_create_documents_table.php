<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom', 256);
            $table->date('date');
            $table->enum('type',['fichier','lien']);
            $table->text('description', 256);
            $table->string('chemin', 256);
            $table->integer('taille');
            
            $table->unsignedBigInteger('projets_id');
            $table->foreign('projets_id')
            ->references('id')
            ->on('projets')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            
            $table->unsignedBigInteger('people_id');
            $table->foreign('people_id')
            ->references('id')
            ->on('people')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
