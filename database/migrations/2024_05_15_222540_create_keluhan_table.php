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
        if (!Schema::hasTable('keluhan')) {
            Schema::create('keluhan', function (Blueprint $table) {
                $table->id('id_keluhan');
                $table->string('nama_keluhan', 150);
                $table->decimal('ongkos', 10, 2);
                $table->unsignedBigInteger('id_komputer');
                $table->unsignedBigInteger('customer_id');
                $table->unsignedBigInteger('id_pegawai');
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();

                $table->foreign('id_komputer')->references('id_komputer')->on('komputer')->onDelete('cascade');
                $table->foreign('customer_id')->references('id_customer')->on('customers')->onDelete('cascade');
                $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};