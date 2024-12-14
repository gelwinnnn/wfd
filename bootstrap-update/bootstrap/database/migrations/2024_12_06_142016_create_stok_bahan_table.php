<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel stok_bahan.
     */
    public function up(): void
    {
        Schema::create('stok_bahan', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->date('tanggal')->nullable();
            $table->string('bahan_baku', 255)->nullable();
            $table->string('penanggung_jawab', 100)->nullable();
            $table->integer('jumlah_stok')->nullable()->comment('pcs');
            $table->string('pembelian_id')->nullable();
            $table->foreign('pembelian_id')->references('id')->on('pembelian')->onDelete('cascade');
            $table->string('pesanan_masuk_id')->nullable();
            $table->foreign('pesanan_masuk_id')->references('id')->on('pesananmasuk')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Balikkan migration jika dibatalkan.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_bahan');
    }
};