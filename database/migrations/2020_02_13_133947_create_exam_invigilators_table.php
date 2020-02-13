<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamInvigilatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_invigilators', function (Blueprint $table) {
            $table->increment('idexamInvigilator')->primary();
            $table->string('invigilator',20);
            $table->enum('role',[0,1]);
            $table->string('exam');
            $table->timestamps();
            $table->foreign('invigilator')->references('idlecture')->on('lectures')->onDelete('restrict');
            $table->foreign('exam')->references('idexam')->on('exam')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_invigilators');
    }
}
