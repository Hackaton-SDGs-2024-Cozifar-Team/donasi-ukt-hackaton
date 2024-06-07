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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 30);
            $table->string('place_birth', 20);
            $table->date('date_birth');
            $table->enum('gender', ['male', 'female'])->change();
            // $table->unsignedBigInteger('nik', 16)->unique();
            $table->string('email', 30)->unique();
            $table->string('password', 8);
            $table->enum('role', ['admin', 'recipient', 'donatur'])->change();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
