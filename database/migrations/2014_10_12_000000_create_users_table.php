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
            $table->string('place_birth', 20)->nullable();
            $table->date('date_birth')->nullable();
            $table->enum('gender', ['male', 'female'])->default('male')->nullable();
            $table->string('email', 30)->unique();
            $table->string('password', 60);
            $table->char('no_telp', 13)->nullable();
            $table->enum('role', ['admin', 'recipient', 'donatur'])->default('recipient');
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