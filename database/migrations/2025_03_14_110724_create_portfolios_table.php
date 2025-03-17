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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_id')->unique(); // Formato: PF-2023-001
            $table->foreignId('partner_id')->constrained();
            $table->string('name');
            $table->string('status'); // Active, Inactive, etc.
            $table->integer('loan_count')->default(0);
            $table->decimal('total_value', 15, 2)->default(0);
            $table->decimal('performance', 5, 2)->default(0); // Porcentaje
            $table->string('risk_rating'); // Low, Medium, High
            $table->date('created_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
