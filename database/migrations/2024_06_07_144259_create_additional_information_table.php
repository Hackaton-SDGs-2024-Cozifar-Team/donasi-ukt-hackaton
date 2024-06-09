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
        Schema::create('additional_information', function (Blueprint $table) {
            $table->bigIncrements('id_additional_information');
            $table->string('registrant_ktp');
            $table->string('family_card');
            $table->string('birth_certificate');
            $table->string('sktm');
            $table->string('lant_certificate');
            $table->string('vehicle_stnk');
            $table->string('house_from_outside');
            $table->string('house_from_inside');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_information');
    }
};
