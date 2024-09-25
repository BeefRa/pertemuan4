<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            // Kolom NIP sebagai primary key
            $table->string('nip', 10)->primary();
            
            // Kolom nama dosen
            $table->string('namadosen', 100);
            
            // Kolom timestamps untuk menyimpan waktu pembuatan dan pembaruan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
