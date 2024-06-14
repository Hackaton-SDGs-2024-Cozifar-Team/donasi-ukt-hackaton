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
        Schema::create('timelines', function (Blueprint $table) {
            $table->bigIncrements('id_timeline');
            $table->integer('order');
            $table->string('title_timeline', 50);
            $table->string('deadline', 30);
            $table->text('description');
            $table->bigIncrements('id_periode');
            $table->timestamps();

            $table->foreign('id_periode')->references('id_periode')->on('periodes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timelines');
    }
};
