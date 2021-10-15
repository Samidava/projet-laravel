<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTherapyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_therapy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')
            ->references('id')
            ->on('documents')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            
            $table->unsignedBigInteger('therapy_id');
            $table->foreign('therapy_id')
            ->references('id')
            ->on('therapies')
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
        Schema::dropIfExists('links');
    }
}
