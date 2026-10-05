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
    Schema::create('customers', function (Blueprint $table) {
        $table->string('customer_number')->primary(); // Llave primaria personalizada
        $table->string('company_name');
        $table->string('rfc');
        $table->string('email');
        $table->string('phone_number');
        $table->string('contact_person');
        $table->text('default_address');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
