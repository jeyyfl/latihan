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
    Schema::create('mahasiswa', function (Blueprint $table) {
        $table->id();                                    // Kolom ID (Primary Key otomatis)
        $table->string('nim')->unique();                 // Kolom teks NIM (unik)
        $table->string('nama');                          // Kolom teks Nama
        $table->text('alamat')->nullable();              // Kolom teks alamat (boleh kosong)
        $table->date('tanggal_lahir')->nullable();       // Kolom tanggal lahir
        $table->timestamps();                            // Kolom created_at & updated_at otomatis
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
