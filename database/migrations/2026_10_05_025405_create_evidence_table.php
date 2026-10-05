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
    Schema::create('evidence', function (Blueprint $table) {
        $table->id();
        $table->string('invoice_number');
        $table->foreign('invoice_number')->references('invoice_number')->on('orders');
        $table->foreignId('uploaded_by_user_id')->constrained('users');
        $table->string('photo_url');
        $table->enum('phase_type', ['Loaded', 'Unloaded']);
        $table->decimal('latitude', 10, 8)->nullable();
        $table->decimal('longitude', 11, 8)->nullable();
        $table->timestamp('captured_at')->useCurrent();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidence');
    }
};
