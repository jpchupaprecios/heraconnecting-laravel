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
        Schema::create('draws', function (Blueprint $table) {
            $table->id();
            $table->string('draw_id')->unique(); // Formato: DRAW-2023-001
            $table->foreignId('loan_id')->constrained();
            $table->decimal('amount', 15, 2);
            $table->string('status'); // Funded, Pending, Approved, Rejected
            $table->date('date');
            $table->integer('progress')->default(0); // Porcentaje de avance
            $table->integer('draw_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draws');
    }
};
