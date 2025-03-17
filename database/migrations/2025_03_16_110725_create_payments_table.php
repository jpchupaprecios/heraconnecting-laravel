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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id')->unique(); // Formato: PMT-2023-001
            $table->foreignId('loan_id')->constrained();
            $table->decimal('amount', 15, 2);
            $table->string('status'); // Paid, Upcoming, Overdue
            $table->date('due_date');
            $table->date('paid_date')->nullable();
            $table->string('type')->default('Principal & Interest');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
