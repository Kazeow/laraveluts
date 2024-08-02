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
        Schema::create('userxes', function (Blueprint $table) {
            $table->id();
            $table->string('nama_use', 150); // Perbaikan di sini
            $table->text('email');
            $table->enum('level', ['boss', 'admin', 'user']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userxes');
    }
};
