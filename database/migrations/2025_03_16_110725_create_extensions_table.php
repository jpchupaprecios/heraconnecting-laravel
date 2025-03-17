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
        Schema::create('extensions', function (Blueprint $table) {
            $table->id();
            $table->string('extension_id')->unique(); // Formato: EXT-2023-001
            $table->foreignId('loan_id')->constrained();
            $table->date('original_maturity');
            $table->date('extended_maturity');
            $table->string('status')->nullable(); // Approved, Pending, Rejected
            $table->date('request_date')->nullable();
            $table->decimal('fee', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extensions');
    }
};
