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
    Schema::create('order_details', function (Blueprint $table) {
        $table->id();
        $table->string('invoice_number');
        $table->foreign('invoice_number')->references('invoice_number')->on('orders');
        $table->foreignId('material_stock_id')->constrained('material_stocks');
        $table->integer('quantity_ordered');
        $table->decimal('unit_price', 10, 2);
        $table->decimal('discount', 10, 2)->default(0);
        $table->decimal('subtotal', 10, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
