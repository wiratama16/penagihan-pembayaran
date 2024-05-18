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
        Schema::create('admin', function (Blueprint $table) {
            $table->id("id_admin");
            $table->string("nama_lengkap");
            $table->string("username");
            $table->string("email");
            $table->enum('role',["admin_teknik", "admin_keuangan"]);
            $table->integer("no_telepon");
            $table->string("kata_sandi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
