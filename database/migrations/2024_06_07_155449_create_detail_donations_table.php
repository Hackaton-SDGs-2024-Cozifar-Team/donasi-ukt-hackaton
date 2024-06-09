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
        Schema::create('detail_donations', function (Blueprint $table) {
            $table->bigIncrements('id_detail_donation');
            $table->unsignedBigInteger('id_donation');
            $table->unsignedBigInteger('id_periode');
            $table->date('donation_date');
            $table->integer('nominal_donation');
            $table->string('metode_pemabyaran', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_donations');
    }
};