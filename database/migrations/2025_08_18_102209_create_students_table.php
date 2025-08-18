<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 255);
            $table->string('nama_panggilan', 255);
            $table->string('email', 255);
            $table->string('nomor_hp', 255);
            $table->string('jalur', 255);
            $table->text('image');
            $table->text('programstudi_1');
            $table->text('programstudi_2');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
