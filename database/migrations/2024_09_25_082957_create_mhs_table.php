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
        // Membuat tabel 'mhs '
        Schema::create('mhs', function (Blueprint $table) {
            // Kolom NRP sebagai primary key
            $table->string('nrp', 15)->primary();
            
            // Kolom nama mahasiswa
            $table->string('nama', 100);
            
            // Kolom NIP dosen wali dengan index
            //$table->string('nipdosenwali', 15)->index();
            $table->string('alamat');
            // Kolom timestamps untuk menyimpan waktu pembuatan dan pembaruan
            $table->timestamps();
        });

        // Menambahkan foreign key pada tabel 'mhs'
        /**
        * Schema::table('mhs', function (Blueprint $table) {
        *   $table->foreign('nipdosenwali')
        *      ->references('nip')
        *       ->on('dosens')
        *       ->onUpdate('cascade')
        *       ->onDelete('cascade');
        * });
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhs');
    }
};
