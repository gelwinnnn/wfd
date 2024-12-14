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
        Schema::create('gaji', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('nama', 50)->nullable();
            $table->string('jabatan', 30)->nullable();
            $table->string('lokasi_kerja', 20)->nullable();
            $table->string('bulan', 15)->nullable();
            $table->integer('hadir')->nullable()->comment('hari');
            $table->integer('sakit')->nullable()->comment('hari');
            $table->integer('ijin')->nullable()->comment('hari');
            $table->integer('alpha')->nullable()->comment('hari');
            $table->integer('cuti')->nullable()->comment('hari');
            $table->integer('jumlah_hari_kerja')->nullable()->comment('hari');
            $table->decimal('gaji_bulanan', 10, 2)->nullable();
            $table->decimal('tunjangan', 10, 2)->nullable();
            $table->boolean('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gaji');
    }
};
