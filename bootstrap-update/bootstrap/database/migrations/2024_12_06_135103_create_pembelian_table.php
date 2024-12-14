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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->date('tanggal');
            $table->string('deskripsi', 255);
            $table->string('pemasok', 255);
            $table->decimal('harga', 15, 2);
            $table->enum('status', ['sudah dibayar', 'belum dibayar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
