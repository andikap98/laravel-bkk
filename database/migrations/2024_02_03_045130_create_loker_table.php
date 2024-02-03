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
        Schema::create('loker', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('jenis_pekerjaan');
            $table->string('jobdesk');
            $table->string('persyaratan');
            $table->string('kontak_person');
            $table->string('kontak_email');
            $table->date('batas_waktu_pendaftaran');
            $table->enum('status', ['buka', 'tutup', 'kadaluarsa'])->default('buka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loker');
    }
};
