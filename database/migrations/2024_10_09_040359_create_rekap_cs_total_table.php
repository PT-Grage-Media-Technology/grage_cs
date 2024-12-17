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
        Schema::create('rekap_cs_total', function (Blueprint $table) {
            $table->id('id_rekap_cs_total');
            $table->unsignedBigInteger('rekap_cs_id')->nullable();
            $table->integer('total_botol')->nullable();
            $table->timestamps();

            // Relasi
            $table->foreign('rekap_cs_id')
                    ->references('id_rekap_cs')
                    ->on('rekap_cs')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_cs_total');
    }
};
