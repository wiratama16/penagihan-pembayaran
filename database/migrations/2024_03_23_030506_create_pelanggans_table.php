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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id("id_pelanggan");
            $table->string("nama_pelanggan");
            $table->string("username");
            $table->string("email");
            $table->integer("no_telepon");
            $table->string("alamat");
            $table->string("bukti_transfer");
            $table->string("kata_sandi");
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
