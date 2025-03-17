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
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('insurance_id')->unique(); // Formato: INS-2023-001
            $table->foreignId('loan_id')->constrained();
            $table->string('type'); // Hazard, Flood, Liability
            $table->string('provider');
            $table->string('policy_number');
            $table->string('status'); // Active, Expiring Soon, Expired
            $table->date('expiration_date');
            $table->decimal('coverage_amount', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurances');
    }
};
