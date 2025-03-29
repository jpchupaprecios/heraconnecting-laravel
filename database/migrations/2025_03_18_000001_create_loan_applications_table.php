<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();

            // Información del solicitante
            $table->string('first_name')->nullable()->comment('Nombre del firmante');
            $table->string('last_name')->nullable()->comment('Apellido del firmante');
            $table->string('title')->nullable()->comment('Cargo o título');
            $table->string('ssn')->nullable()->comment('Número de Seguro Social');
            $table->string('address')->nullable()->comment('Dirección principal');
            $table->string('city')->nullable()->comment('Ciudad');
            $table->string('state')->nullable()->comment('Estado');
            $table->string('zip')->nullable()->comment('Código postal');
            $table->string('primary_phone')->nullable()->comment('Teléfono principal');
            $table->string('email')->nullable()->comment('Correo electrónico');

            // Información de empleo
            $table->string('employer_name')->nullable()->comment('Nombre del empleador');
            $table->string('employer_phone')->nullable()->comment('Teléfono del empleador');
            $table->string('employer_address')->nullable()->comment('Dirección del empleador');

            // Declaraciones y cuestionario
            $table->boolean('declaration_question_1')->nullable()->comment('Respuesta Sí/No a la pregunta 1');
            $table->boolean('declaration_question_2')->nullable()->comment('Respuesta Sí/No a la pregunta 2');
            $table->boolean('declaration_question_3')->nullable()->comment('Respuesta Sí/No a la pregunta 3');

            // Información financiera básica
            $table->decimal('estimated_current_liquid_assets', 15, 2)->nullable()->comment('Activos líquidos estimados');
            $table->decimal('estimated_net_worth', 15, 2)->nullable()->comment('Valor neto estimado');
            $table->decimal('estimated_debt_of_all_kinds', 15, 2)->nullable()->comment('Deudas totales estimadas');

            //
            $table->string('citizenship_status')->nullable()->after('email')
                ->comment('Estado de ciudadanía: Citizen, Resident, Foreign');
            $table->string('marital_status')->nullable()->after('citizenship_status')
                ->comment('Estado civil: Single, Married, Unmarried, etc.');
            $table->string('country')->nullable()->after('marital_status')
                ->comment('País de origen o nacionalidad');

            // Seguimiento del proceso (estado, fechas, etc.)
            $table->string('status')->default('inicial')->comment('Estado de la solicitud: inicial, preaprobado, etc.');
            $table->timestamp('submitted_at')->nullable()->comment('Fecha de envío de la solicitud');
            $table->timestamp('approved_at')->nullable()->comment('Fecha de aprobación');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_applications');
    }
}
