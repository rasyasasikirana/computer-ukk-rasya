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
        Schema::create('kasirs', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade'); 
            $table->foreignId('barang_id')->constrained('products')->onDelete('cascade'); 
            $table->integer('qty'); 
            $table->integer('total'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasirs');
    }
};
