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
        Schema::create('file_setup', function (Blueprint $table) {
            $table->id('id_File_setup');
            $table->string('nama_file');
            $table->timestamps();

            $table->foreignId('id_Auditee')->references('id_Auditee')->on('auditee');
            // $table->foreignId('id_Ruang_lingkup')->references('id_Ruang_lingkup')->on('ruang_lingkup');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_setup');
    }
};
