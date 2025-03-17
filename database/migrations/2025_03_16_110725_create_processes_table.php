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
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('process_id')->unique(); // Formato: PROC-2023-001
            $table->foreignId('loan_id')->constrained();
            $table->string('name');
            $table->string('type'); // Underwriting, Closing, Funding, Servicing
            $table->string('status'); // In Progress, Pending, On Hold, Completed
            $table->integer('progress')->default(0); // Porcentaje de avance
            $table->string('assignee'); // Persona asignada al proceso
            $table->date('start_date');
            $table->date('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processes');
    }
};
