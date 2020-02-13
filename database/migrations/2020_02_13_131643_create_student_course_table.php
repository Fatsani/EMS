<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course', function (Blueprint $table) {
            $table->increment('idStudentCourse')->primary();
            $table->string('course',10);
            $table->string('student',20);
            $table->timestamps();
            $table->foreign('course')->references('courseCode')->on('courses')->onDelete('restrict');
            $table->foreign('student')->references('idstudent')->on('students')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_course');
    }
}
