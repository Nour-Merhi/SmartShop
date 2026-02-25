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
        Schema::create('shipment', function (Blueprint $table) {
            $table->bigIncrements('shipmentID');
            $table->date('shipDate');
            $table->string('shipAddress', 100);
            $table->string('shipCity', 100);
            $table->string('country', 100);
            $table->enum('state', ['preparing', 'shipped', 'in_transit', 'delivered', 'failed']);
            $table->foreignId('orderID')->references('orderID')->on('order')->onDelete('cascade');
            $table->foreignId('deliveryID')->references('deliveryID')->on('delivery')->onDelete('cascade');
            $table->foreignId('customerID')->references('customerID')->on('customer')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippment');
    }
};
