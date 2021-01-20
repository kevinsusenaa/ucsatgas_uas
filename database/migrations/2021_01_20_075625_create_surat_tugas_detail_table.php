<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTugasDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satgas_lecturers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('satgas_id');
            $table->foreign('satgas_id')->references('id')->on('satgas')->onDelete('restrict');
            $table->string('name');
            $table->string('nik');
            $table->string('comment');
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
        Schema::dropIfExists('satgas_lecturers');
    }
}
