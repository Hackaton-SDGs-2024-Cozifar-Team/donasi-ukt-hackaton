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
        Schema::create('academic_information', function (Blueprint $table) {
            $table->bigIncrements('id_academic_information');
            $table->string('university', 50);
            $table->string('faculty', 30);
            $table->string('study_program', 30);
            $table->string('nim', 10);
            $table->string('study_year', 10);
            $table->integer('now_semester');
            $table->decimal('last_gpa', 3, 2);
            $table->integer('now_ukt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_information');
    }
};