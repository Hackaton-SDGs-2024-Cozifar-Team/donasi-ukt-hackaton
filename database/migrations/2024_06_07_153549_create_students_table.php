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
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('id_student')->primary();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_academic_information');
            $table->unsignedBigInteger('id_family_information');
            $table->unsignedBigInteger('id_additional_information');

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_academic_information')->references('id_academic_information')->on('academic_information')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_family_information')->references('id_family_information')->on('family_information')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_additional_information')->references('id_additional_information')->on('additional_information')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
