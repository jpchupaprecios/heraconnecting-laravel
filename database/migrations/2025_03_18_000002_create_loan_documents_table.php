<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('loan_documents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loan_id')->comment('Referencia al préstamo asociado');

            $table->string('document_type')->nullable()->comment('Tipo de documento (ej. driver license, track record, contrato, etc.)');
            $table->string('file_url')->nullable()->comment('URL o path del archivo subido');
            $table->string('status')->default('pendiente')->comment('Estado del documento: pendiente, verificado, rechazado, etc.');
            $table->timestamp('uploaded_at')->nullable()->comment('Fecha de carga del documento');

            // Otros campos que consideres relevantes (por ejemplo, versión, comentarios, etc.)
            $table->text('comments')->nullable()->comment('Comentarios o notas del documento');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_documents');
    }
}
