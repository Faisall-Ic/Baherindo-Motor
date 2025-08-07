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
        Schema::create('motor_oses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_motor');
            $table->decimal('harga_motor');
            $table->integer('kilo_motor');
            $table->year('tahun_motor');
            $table->string('foto_motor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motor_oses');
    }
};
