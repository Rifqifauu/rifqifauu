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
        Schema::create('artikel', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('slug')->unique();
        $table->string('kategori');
        $table->longText('konten'); 
        $table->string('gambar')->nullable(); 
        $table->date('terbit'); 
        $table->enum('status', ['draft', 'publish'])->default('draft'); // Opsional
        $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
