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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('sampul')->nullable(false);
            $table->text('konten')->nullable(false);
            $table->integer('dilihat')->nullable(false)->default(0);
            $table->unsignedBigInteger('id_kategori')->nullable(true);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};