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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('stockName');
            $table->integer('quantity');
            $table->enum('unit', ['Kilogram', 'Gram', 'Pieces']);;
            $table->integer('unitCost');
            $table->integer('reorderPoint');
            $table->enum('status', ['Cart', 'Inventory'])->default('Cart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
