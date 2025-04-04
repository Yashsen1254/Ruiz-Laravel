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
        Schema::create('checkout', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Name');
            $table->string('Mobile');
            $table->string('Email');
            $table->string('Address');
            $table->unsignedBigInteger('Cartid');
            $table->foreign('Cartid')->references('Id')->on('cart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout');
    }
};
