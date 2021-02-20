<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_loads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained();
            $table->foreignId('course_subject_id')->constrained();
            $table->string('days', 10);
            $table->string('time', 20);
            $table->string('room', 50);
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
        Schema::dropIfExists('subject_loads');
    }
}
