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
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('orderID');
            $table->date('orderDate');
            $table->decimal('totalPrice', 10, 2);
            $table->enum('status', ['active', 'inactive']);
            $table->foreignId('customerID')->references('customerID')->on('customer')->onDelete('cascade');
            $table->foreignId('cartID')->references('cartID')->on('cart')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
