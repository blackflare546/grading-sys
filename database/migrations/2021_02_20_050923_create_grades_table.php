<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollee_id')->nullable()->constrained();
            $table->foreignId('transferee_id')->nullable()->constrained();
            $table->foreignId('school_year_id')->nullable()->constrained();
            $table->foreignId('subject_load_id')->nullable()->constrained();
            $table->foreignId('course_subject_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->string('student_name');
            $table->string('grade', 5)->nullable();
            $table->string('re_ex', 5)->nullable();
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
        Schema::dropIfExists('grades');
    }
}
