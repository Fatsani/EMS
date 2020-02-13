<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSigningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_signing', function (Blueprint $table) {
            $table->increment('idsign')->primary();
            $table->string('student',20);
            $table->string('exam');
            $table->enum('firstSignature',[0,1]);
            $table->enum('secondSignature',[0,1]);
            $table->timestamps();
            $table->foreign('student')->references('idstudent')->on('students')->onDelete('restrict');
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
        Schema::dropIfExists('student_signing');
    }
}
