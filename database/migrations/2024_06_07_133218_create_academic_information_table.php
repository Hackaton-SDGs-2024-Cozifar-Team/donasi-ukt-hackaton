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
            $table->unsignedBigInteger('id_academic_information')->primary();
            $table->string('university', 50);
            $table->string('faculty', 30);
            $table->string('study_program', 30);
            $table->string('nim', 10);
            $table->string('study_year', 10);
            $table->integer('now_curriculum');
            $table->decimal('last_ipk', 3, 2);  // example: 3.75
            $table->decimal('now_ipk', 3, 2);   // example: 3.85
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
