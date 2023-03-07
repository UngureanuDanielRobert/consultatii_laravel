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
        Schema::create('programares', function (Blueprint $table) {
            $table->id();
            $table->datetime('start');
            $table->datetime('finish');
            $table->longText('comentariu')->nullable();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('consultant_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programares');
    }
};
