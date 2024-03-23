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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id("kode_laporan");
            $table->unsignedBigInteger("id_pelanggan");
            $table->foreign("id_pelanggan")->references("id_pelanggan")->on("pelanggan")->onDelete("cascade");
            $table->unsignedBigInteger("kode_tagihan");
            $table->foreign("kode_tagihan")->references("kode_tagihan")->on("tagihan")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
