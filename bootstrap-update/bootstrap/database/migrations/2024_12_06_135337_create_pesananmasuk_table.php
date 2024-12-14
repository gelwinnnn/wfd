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
        Schema::create('pesananmasuk', function (Blueprint $table) {
            $table->string('id', 255)->primary();
            $table->date('tanggal')->nullable();
            $table->string('deskripsi_produk', 255)->nullable();
            $table->integer('jumlah')->nullable()->comment('pcs');
            $table->decimal('harga_per_unit', 15, 2)->nullable();
            $table->enum('status', ['sudah dibayar', 'belum dibayar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesananmasuk');
    }
};
