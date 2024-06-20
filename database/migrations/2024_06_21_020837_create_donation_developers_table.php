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
        Schema::create('donation_developers', function (Blueprint $table) {
            $table->bigIncrements('id_donation_developer');
            $table->integer('nominal_donation');
            $table->string('id_donation');
            $table->timestamps();

            $table->foreign('id_donation')->references('id_donation')->on('donations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_developers');
    }
};