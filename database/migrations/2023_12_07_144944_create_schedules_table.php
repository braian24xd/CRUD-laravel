<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->engine="innoDB";
            $table->id();
            $table->time('hora');
            $table->biginteger('alumno')->unsigned();
            $table->biginteger('profesor')->unsigned();
            $table->biginteger('salon')->unsigned();
            $table->biginteger('asignatura')->unsigned();
            $table->timestamps();

            $table->foreign('alumno')->references('id')->on('alumnos')->onDelete("cascade");
            $table->foreign('profesor')->references('id')->on('teachers')->onDelete("cascade");
            $table->foreign('salon')->references('id')->on('classrooms')->onDelete("cascade");
            $table->foreign('asignatura')->references('id')->on('subjects')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
