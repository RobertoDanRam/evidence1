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
    Schema::create('orders', function (Blueprint $table) {
        $table->string('invoice_number')->primary(); // Llave primaria personalizada
        $table->string('customer_number');
        $table->foreign('customer_number')->references('customer_number')->on('customers');
        $table->foreignId('created_by_user_id')->constrained('users');
        $table->dateTime('order_date');
        $table->dateTime('estimated_delivery_date')->nullable();
        $table->text('shipping_address');
        $table->text('notes')->nullable();
        $table->decimal('subtotal', 10, 2)->default(0);
        $table->decimal('tax_amount', 10, 2)->default(0);
        $table->decimal('total_amount', 10, 2)->default(0);
        $table->enum('current_status', ['Ordered', 'In process', 'In route', 'Delivered'])->default('Ordered');
        $table->softDeletes(); // Esto activa el deleted_at para borrado lógico
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
