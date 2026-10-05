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
    Schema::create('material_stocks', function (Blueprint $table) {
        $table->id();
        $table->string('sku')->unique();
        $table->string('name');
        $table->string('unit_of_measure');
        $table->decimal('weight_per_unit', 8, 2);
        $table->string('location_aisle');
        $table->integer('available_quantity');
        $table->integer('minimum_stock_level');
        $table->decimal('unit_price', 10, 2);
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_stocks');
    }
};
