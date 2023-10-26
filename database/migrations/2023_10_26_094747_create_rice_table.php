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
        Schema::create('rice', function (Blueprint $table) {
            $table->id();
            $table->string('merek');
            $table->integer('kilo');
            $table->integer('price');
            $table->integer('stok');
            $table->integer('grosir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rice');
    }
};
