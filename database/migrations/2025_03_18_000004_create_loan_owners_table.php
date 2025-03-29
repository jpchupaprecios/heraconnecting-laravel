<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanOwnersTable extends Migration
{
    public function up()
    {
        Schema::create('loan_owners', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loan_id')->comment('Referencia al préstamo');
            $table->string('owner_name')->nullable()->comment('Nombre del propietario');
            $table->decimal('participation_percentage', 5, 2)->nullable()
                ->comment('Porcentaje de participación del propietario');
            // Se pueden agregar otros campos, por ejemplo, contacto o tipo de propietario, según sea necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_owners');
    }
}
