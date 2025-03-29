<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanTasksTable extends Migration
{
    public function up()
    {
        Schema::create('loan_tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loan_id')->comment('Referencia al préstamo al que pertenece la tarea');

            $table->string('description')->comment('Descripción de la tarea');
            $table->string('assigned_to')->nullable()->comment('Usuario asignado a la tarea');
            $table->date('due_date')->nullable()->comment('Fecha límite de la tarea');
            $table->string('status')->default('pendiente')->comment('Estado de la tarea: pendiente, en progreso, completada, etc.');
            $table->text('notes')->nullable()->comment('Notas adicionales sobre la tarea');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_tasks');
    }
}
