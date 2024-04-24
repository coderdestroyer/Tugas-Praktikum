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
        Schema::create('dosen2', function (Blueprint $table) {
            $table->id();
            $table->string('nip_dsn', 10)->unique();
            $table->string('email_dsn',50)->unique();
            $table->string('nama_dsn',50);
            $table->string('tanggal_lahir_dsn')->nullable();
            $table->string('no_hp_dsn',20)->nullable();
            $table->string('alamat_dsn',150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen2');
    }
};
