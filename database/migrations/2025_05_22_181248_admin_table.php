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
        Schema::create('Admin', function(Blueprint $table){
        $table->bigIncrements('adminID');
        $table->string('permissions');
        $table->foreignId('userID')->references('userID')->on('user')->onDelete('cascade');
        $table->foreignId('contacterID')->references('contacterID')->on('contact_message')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Admin');
    }
};
