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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('partner_id')->unique(); // Formato: CP-2023-001
            $table->string('name');
            $table->string('type'); // Bank, Private Equity, etc.
            $table->decimal('aum', 15, 2)->nullable(); // Assets Under Management
            $table->string('status'); // Active, Inactive
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('region');
            $table->integer('portfolio_count')->default(0);
            $table->decimal('total_investment', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
