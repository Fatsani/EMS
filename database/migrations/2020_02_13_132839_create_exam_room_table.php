<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_room', function (Blueprint $table) {
            $table->increment('idExamRoom')->primary();
            $table->string('exam',10);
            $table->string('room',20);
            $table->timestamps();
            $table->foreign('exam')->references('idexam')->on('exam')->onDelete('restrict');
            $table->foreign('room')->references('idroom')->on('rooms')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_room');
    }
}
