<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();

            // Ejemplo de campos generales

            $table->int('loanapp_id')->comment('Referencia a la solicitud de préstamo');

            $table->string('loan_number')->nullable()->comment('Número de préstamo');
            $table->decimal('principal_amount', 15, 2)->nullable()->comment('Monto principal');
            $table->decimal('annual_rate', 5, 2)->nullable()->comment('Tasa anual');

            // Dirección de la propiedad
            $table->string('property_address')->nullable()->comment('Dirección de la propiedad');
            $table->string('city')->nullable()->comment('Ciudad');
            $table->string('state')->nullable()->comment('Estado');
            $table->string('zip')->nullable()->comment('Código postal');
            $table->string('county')->nullable()->comment('Condado');

            // Datos adicionales y de evaluación
            $table->string('borrower')->nullable()->comment('Nombre del prestatario principal');
            $table->string('loan_type')->nullable()->comment('Tipo de préstamo');
            $table->string('loan_purpose')->nullable()->comment('Propósito del préstamo');

            // Data for evaluation
            $table->decimal('purchase_price', 15, 2)->nullable()->comment('Precio de compra');
            $table->decimal('contract_price', 15, 2)->nullable()->comment('Precio de contrato');
            $table->decimal('cost_spread', 15, 2)->nullable()->comment('Cost Spread');
            $table->string('subject')->nullable()->comment('Subject / Observaciones');

            // Seguros (ya incluidos, pero podrían ampliarse si se necesita mayor detalle)
            $table->string('property_insurance_company')->nullable()->comment('Compañía de seguro de propiedad');
            $table->string('property_insurance_policy_number')->nullable()->comment('Número de póliza de seguro de propiedad');
            $table->decimal('property_insurance_coverage', 15, 2)->nullable()->comment('Cobertura de la póliza');
            $table->date('property_insurance_effective_date')->nullable()->comment('Fecha efectiva del seguro de propiedad');
            $table->date('property_insurance_expiration_date')->nullable()->comment('Fecha de expiración del seguro de propiedad');
            $table->string('property_insurance_agent')->nullable()->comment('Agente de seguro de propiedad');
            $table->string('property_insurance_agent_phone')->nullable()->comment('Teléfono del agente de seguro de propiedad');

            // General Liability Insurance
            $table->string('general_liability_insurance_company')->nullable()->comment('Compañía de seguro de responsabilidad general');
            $table->string('general_liability_insurance_policy_number')->nullable()->comment('Número de póliza de responsabilidad general');
            $table->decimal('general_liability_insurance_coverage', 15, 2)->nullable()->comment('Cobertura de la póliza');
            $table->date('general_liability_insurance_effective_date')->nullable()->comment('Fecha efectiva de la póliza de responsabilidad general');
            $table->date('general_liability_insurance_expiration_date')->nullable()->comment('Fecha de expiración de la póliza');
            $table->string('general_liability_insurance_agent')->nullable()->comment('Agente de seguro de responsabilidad general');
            $table->string('general_liability_insurance_agent_phone')->nullable()->comment('Teléfono del agente');

            // Flood Insurance
            $table->string('flood_insurance_company')->nullable()->comment('Compañía de seguro contra inundaciones');
            $table->string('flood_insurance_policy_number')->nullable()->comment('Número de póliza de seguro de inundación');
            $table->decimal('flood_insurance_coverage', 15, 2)->nullable()->comment('Cobertura de la póliza de inundación');
            $table->date('flood_insurance_effective_date')->nullable()->comment('Fecha efectiva del seguro contra inundaciones');
            $table->date('flood_insurance_expiration_date')->nullable()->comment('Fecha de expiración del seguro contra inundaciones');
            $table->string('flood_insurance_agent')->nullable()->comment('Agente de seguro contra inundaciones');
            $table->string('flood_insurance_agent_phone')->nullable()->comment('Teléfono del agente de inundaciones');

            // Contact Point Trinity
            $table->string('contact_point_trinity_name')->nullable()->comment('Nombre de contacto de Trinity');
            $table->string('contact_point_trinity_phone')->nullable()->comment('Teléfono de contacto');
            $table->string('contact_point_trinity_email')->nullable()->comment('Correo electrónico de contacto');
            $table->string('contact_point_trinity_company')->nullable()->comment('Empresa de contacto');
            $table->string('status')->default('processing')->comment('Estado del préstamo: processing, preaprobado, clear_to_close, funded, etc.');
            $table->date('closing_date')->nullable()->comment('Fecha de cierre del préstamo');

            // Roles y asignaciones
            $table->string('processor_specialist')->nullable()->after('loan_purpose')
                ->comment('Nombre o ID del Processor Specialist');
            $table->string('processor_analyst')->nullable()->after('processor_specialist')
                ->comment('Nombre o ID del Processor Analyst');
            $table->string('account_rep')->nullable()->after('processor_analyst')
                ->comment('Nombre o ID del Account Rep');
            $table->string('broker_party')->nullable()->after('account_rep')
                ->comment('Broker party asignado');

            // Detalles de la propiedad
            $table->string('property_type')->nullable()->after('county')
                ->comment('Tipo de propiedad (Single Family, Condo, Commercial, etc.)');
            $table->boolean('is_new_construction')->default(false)->after('property_type')
                ->comment('Flag para nueva construcción');
            $table->unsignedInteger('number_of_properties')->nullable()->after('is_new_construction')
                ->comment('Número de propiedades asociadas');
            $table->unsignedInteger('number_of_units')->nullable()->after('number_of_properties')
                ->comment('Número de unidades de la propiedad');
            $table->string('occupancy')->nullable()->after('number_of_units')
                ->comment('Estado de ocupación: Rented, Vacant, N/A');
            $table->unsignedInteger('pre_rehab_sqft')->nullable()->after('occupancy')
                ->comment('Área antes de rehabilitación (sq. ft.)');
            $table->unsignedInteger('post_rehab_sqft')->nullable()->after('pre_rehab_sqft')
                ->comment('Área después de rehabilitación (sq. ft.)');
            $table->text('legal_description')->nullable()->after('post_rehab_sqft')
                ->comment('Descripción legal de la propiedad');
            $table->string('apn')->nullable()->after('legal_description')
                ->comment('Número de parcela (APN)');

            // Datos para evaluación
            $table->date('acquisition_date')->nullable()->after('apn')
                ->comment('Fecha de adquisición de la propiedad');
            $table->decimal('budget', 15, 2)->nullable()->after('acquisition_date')
                ->comment('Presupuesto para rehabilitación, si aplica');
            $table->decimal('cost_spent_to_date', 15, 2)->nullable()->after('budget')
                ->comment('Costo invertido hasta la fecha');
            $table->date('appraisal_date')->nullable()->after('cost_spent_to_date')
                ->comment('Fecha de tasación');
            $table->string('appraisal_source')->nullable()->after('appraisal_date')
                ->comment('Fuente de tasación');

            // Seguros adicionales para Flood Insurance
            $table->decimal('flood_insurance_monthly_cost', 15, 2)->nullable()->after('flood_insurance_agent_phone')
                ->comment('Costo mensual del seguro contra inundaciones');
            $table->decimal('flood_insurance_average_3months', 15, 2)->nullable()->after('flood_insurance_monthly_cost')
                ->comment('Costo promedio a 3 meses del seguro contra inundaciones');

            // Gastos anuales
            $table->decimal('annual_taxes', 15, 2)->nullable()->after('flood_insurance_average_3months')
                ->comment('Impuestos anuales');
            $table->decimal('annual_insurance', 15, 2)->nullable()->after('annual_taxes')
                ->comment('Costo anual de seguro');
            $table->decimal('annual_hoa', 15, 2)->nullable()->after('annual_insurance')
                ->comment('Cuota anual de HOA');

            // Información de renta
            $table->boolean('is_currently_rented')->default(false)->after('annual_hoa')
                ->comment('Flag: ¿La propiedad está rentada?');
            $table->decimal('market_rent', 15, 2)->nullable()->after('is_currently_rented')
                ->comment('Renta de mercado');
            $table->decimal('actual_rent', 15, 2)->nullable()->after('market_rent')
                ->comment('Renta efectivamente cobrada');

            // Valoraciones de la propiedad
            $table->decimal('aiv', 15, 2)->nullable()->after('actual_rent')
                ->comment('AIV');
            $table->decimal('arv', 15, 2)->nullable()->after('aiv')
                ->comment('ARV');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
