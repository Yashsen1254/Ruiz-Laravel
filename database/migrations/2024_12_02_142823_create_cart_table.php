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
        Schema::create('cart', function (Blueprint $table) {
            $table->id('Id');
            $table->unsignedBigInteger('Clientid');
            $table->foreign('Clientid')->references('Id')->on('client');
            $table->unsignedBigInteger('Productid');
            $table->foreign('Productid')->references('Id')->on('product');
            $table->integer('Quantity');
            $table->boolean('isdeleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
