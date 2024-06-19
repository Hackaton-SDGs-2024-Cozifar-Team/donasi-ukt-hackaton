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
        Schema::create('family_information', function (Blueprint $table) {
            $table->bigIncrements('id_family_information');
            $table->string('father_name', 30);
            $table->string('father_living_status', 15);
            $table->string('father_last_education', 15);
            $table->string('father_occupation', 30);
            $table->string('mother_name', 30);
            $table->string('mother_living_status', 15);
            $table->string('mother_last_education', 15);
            $table->string('mother_occupation', 30);
            $table->integer('dependents');
            $table->char('phone_number', 13);
            $table->text('family_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_information');
    }
};