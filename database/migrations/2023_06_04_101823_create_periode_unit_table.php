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
        Schema::create('periode_unit', function (Blueprint $table) {
            $table->id('id_Periode_unit');
            $table->date('tanggal_audit');
            $table->string('master_auditor');
            $table->foreignId('id_Unit')->references('id_Unit')->on('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periode_unit');
    }
};
