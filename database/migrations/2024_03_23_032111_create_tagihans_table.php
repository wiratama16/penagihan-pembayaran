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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id("kode_tagihan");
            $table->unsignedBigInteger("id_pelanggan");
            $table->foreign("id_pelanggan")->references("id_pelanggan")->on("pelanggan")->onDelete("cascade");
            $table->string("jenis_tagihan");
            $table->date("tanggal_tagihan");
            $table->integer("jumlah_tagihan");
            $table->date("tanggal_jatuh_tempo");
            $table->string("rincian_tagihan");
            $table->integer("no_rekening");
            $table->string("bukti_transfer");
            $table->enum("status",["lunas","belum_lunas","sedang_divalidasi"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihan');
    }
};
