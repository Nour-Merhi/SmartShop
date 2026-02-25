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
        Schema::create('delivery', function (Blueprint $table) {
            $table->bigIncrements('deliveryID');
            $table->string('vehicleType');
            $table->string('phonenNB')->nullable();
            $table->enum('deliveryStatus', ['available', 'onDelivery', 'inactive'])->default('available');
            $table->foreignId('userID')->refernces('userID')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery');
    }
};
