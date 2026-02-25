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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('productID');
            $table->string('name',100);
            $table->decimal('price', 10, 2);
            $table->string('description', 200);
            $table->string('image1', 100);
            $table->string('image2', 100)->nullable();
            $table->string('image3', 100)->nullable();
            $table->string('image4', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('categoryID')->referneces('categoryID')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
