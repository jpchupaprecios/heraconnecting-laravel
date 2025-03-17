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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('loan_id')->unique(); // Formato: LOAN-2023-001
            $table->foreignId('portfolio_id')->nullable()->constrained();
            $table->string('borrower');
            $table->string('address');
            $table->decimal('amount', 15, 2);
            $table->string('status'); // Approved, In Review, Pending, Funded, Closed, Declined
            $table->date('date');
            $table->string('type'); // Construction, Purchase, Refinance
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
