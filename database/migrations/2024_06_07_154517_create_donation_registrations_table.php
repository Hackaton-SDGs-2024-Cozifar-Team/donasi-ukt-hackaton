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
        Schema::create('donation_registrations', function (Blueprint $table) {
            $table->bigIncrements('id_donation_registration');
            $table->unsignedBigInteger('student_id');
            $table->string('status', 20);
            $table->bigInteger('nominal_accepted')->nullable();
            $table->unsignedBigInteger('id_periode');

            $table->foreign('student_id')->references('id_student')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_periode')->references('id_periode')->on('periodes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_registrations');
    }
};
