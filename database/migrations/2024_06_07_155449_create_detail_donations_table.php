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
            $table->string('id_donation');
            $table->unsignedBigInteger('id_periode');
            $table->enum('type_donation', ['ukt','developer']);
            $table->date('donation_date');
            $table->integer('nominal_donation');
            $table->string('payment_methode', 20);
            $table->timestamps();

            $table->foreign('id_donation')->references('id_donation')->on('donations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_periode')->references('id_periode')->on('periodes')->onDelete('cascade')->onUpdate('cascade');
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
