{{-- resources/views/pages/loans/loan.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <!-- Barra de navegación con tabs -->
        <div class="mb-6 border-b">
            <ul class="flex space-x-4">
                <li>
                    <a href="{{ route('loans.property') }}" class="px-4 py-2 hover:text-primary">Property</a>
                </li>
                <li>
                    <a href="{{ route('loans.borrower') }}" class="px-4 py-2 hover:text-primary">Borrower</a>
                </li>
                <li>
                    <a href="{{ route('loans.loan') }}" class="px-4 py-2 border-b-2 border-primary font-bold">Loan</a>
                </li>
                <li>
                    <a href="{{ route('loans.title_company') }}" class="px-4 py-2 hover:text-primary">Title Company</a>
                </li>
                <li>
                    <a href="{{ route('loans.lender') }}" class="px-4 py-2 hover:text-primary">Lender</a>
                </li>
                <li>
                    <a href="{{ route('loans.documents') }}" class="px-4 py-2 hover:text-primary">Documents</a>
                </li>
                <li>
                    <a href="{{ route('loans.manager') }}" class="px-4 py-2 hover:text-primary">Manager</a>
                </li>
                <li>
                    <a href="{{ route('loans.templates') }}" class="px-4 py-2 hover:text-primary">Templates</a>
                </li>
                <li>
                    <a href="{{ route('loans.notes') }}" class="px-4 py-2 hover:text-primary">Notes</a>
                </li>
            </ul>
        </div>

        <!-- Formulario de Detalles del Préstamo -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Detalles del Préstamo</h2>
            <form action="{{ route('loans.store') }}" method="POST">
                @csrf
                <!-- Información General -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Número de Préstamo</label>
                        <input type="text" name="loan_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Número de préstamo">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Monto Principal</label>
                        <input type="number" step="0.01" name="principal_amount" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Monto principal">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tasa Anual (%)</label>
                        <input type="number" step="0.01" name="annual_rate" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Tasa anual">
                    </div>
                </div>

                <!-- Detalles de la Propiedad -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Detalles de la Propiedad</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Dirección</label>
                            <input type="text" name="property_address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Dirección">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Ciudad</label>
                            <input type="text" name="city" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Ciudad">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Estado</label>
                            <input type="text" name="state" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Estado">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Código Postal</label>
                            <input type="text" name="zip" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Código postal">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Condado</label>
                            <input type="text" name="county" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Condado">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tipo de Propiedad</label>
                            <select name="property_type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option value="">Selecciona</option>
                                <option value="Single Family">Casa Unifamiliar</option>
                                <option value="Condo">Condominio</option>
                                <option value="Commercial">Comercial</option>
                                <option value="Multi Family">Multi Familiar</option>
                                <option value="Other">Otro</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nueva Construcción</label>
                            <select name="is_new_construction" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option value="">Selecciona</option>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Número de Propiedades</label>
                            <input type="number" name="number_of_properties" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Cantidad">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Número de Unidades</label>
                            <input type="number" name="number_of_units" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Cantidad de unidades">
                        </div>
                    </div>
                </div>

                <!-- Datos para Evaluación -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Datos para Evaluación</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Precio de Compra</label>
                            <input type="number" step="0.01" name="purchase_price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Precio de compra">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Precio de Contrato</label>
                            <input type="number" step="0.01" name="contract_price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Precio de contrato">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Cost Spread</label>
                            <input type="number" step="0.01" name="cost_spread" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Cost Spread">
                        </div>
                        <div class="md:col-span-3">
                            <label class="block text-sm font-medium text-gray-700">Observaciones</label>
                            <textarea name="subject" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Observaciones o comentarios"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Detalles de Seguros (Ejemplo para Property Insurance) -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Detalles de Seguros</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Compañía de Seguro de Propiedad</label>
                            <input type="text" name="property_insurance_company" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Compañía de seguro">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Número de Póliza</label>
                            <input type="text" name="property_insurance_policy_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Número de póliza">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Cobertura</label>
                            <input type="number" step="0.01" name="property_insurance_coverage" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Cobertura">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Fecha Efectiva</label>
                            <input type="date" name="property_insurance_effective_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Fecha de Expiración</label>
                            <input type="date" name="property_insurance_expiration_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                    </div>
                </div>

                <!-- Datos de Contacto (Contact Point Trinity) -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Contacto - Trinity</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nombre de Contacto</label>
                            <input type="text" name="contact_point_trinity_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Nombre">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Teléfono de Contacto</label>
                            <input type="text" name="contact_point_trinity_phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Teléfono">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Correo de Contacto</label>
                            <input type="email" name="contact_point_trinity_email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Correo">
                        </div>
                    </div>
                </div>

                <!-- Botón de Guardar -->
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center justify-center rounded-md bg-primary text-white px-4 py-2 hover:bg-primary/90">
                        Guardar Préstamo
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
