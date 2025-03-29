{{-- resources/views/loans/loan.blade.php --}}
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
            <form id="formproperty" method="POST" action="{{ route('loans.update', $loan->id) }}">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                    <!-- Columna Izquierda -->
                    <div class="md:col-span-8 space-y-6">
                        <!-- Fila: Loan Owner Master -->
                        <div class="grid grid-cols-12 gap-4 mb-12">
                            <div class="col-span-12 md:col-span-6">
                                <label class="text-xl font-semibold mb-2"><b>Loan Owner Master</b></label>
                                <select name="loanowner" id="loanowner" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="">Select</option>
                                    <option value="351">ELIZABETH BERMUDEZ</option>
                                    <option value="205">Hector Castro</option>
                                    <!-- ... -->
                                </select>
                            </div>
                            <div class="col-span-12 md:col-span-4 hidden" id="table2oculta2">
                                <label class="text-xl font-semibold mb-2"><b>Participation</b></label>
                                <input type="text" name="porcentajeloan1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Participation">
                            </div>
                            <div class="col-span-12 md:col-span-1 flex items-end">
                                <a style="cursor: pointer;" title="Add Owner">
                                    <i class="fa fa-plus-circle text-2xl text-blue-500" id="moreowner" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Tabla oculta de Owners -->
                        <div class="mb-12 hidden">
                            <div class="w-full">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                    <tr class="bg-[#13385b] text-white">
                                        <th class="px-4 py-2">#</th>
                                        <th class="px-4 py-2">Owner</th>
                                        <th class="px-4 py-2">Participation</th>
                                        <th class="px-4 py-2">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="cuerpoOwner">
                                    <!-- Se llenará dinámicamente -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Fila: Processor Specialist / Analyst / Account Rep -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-12">
                            <div>
                                <label class="text-xl font-semibold mb-2"><b>Processor Specialist</b></label>
                                <select name="processor_specialist" id="procesor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="">Select</option>
                                    <option value="216">ALEXANDRA GARCIA B</option>
                                    <!-- ... -->
                                </select>
                            </div>
                            <div>
                                <label class="text-xl font-semibold mb-2"><b>Processor Analyst</b></label>
                                <select name="processor_analyst" id="procesorjunior" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="">Select</option>
                                    <option value="210">ANA FEDERICA AGUIAR</option>
                                    <!-- ... -->
                                </select>
                            </div>
                            <div>
                                <label class="text-xl font-semibold mb-2"><b>Account Rep</b></label>
                                <select name="account_rep" id="acountreg" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="">Select</option>
                                    <option value="650">Aarón García</option>
                                    <!-- ... -->
                                </select>
                            </div>
                        </div>

                        <!-- Fila: Broker Party -->
                        <div class="grid grid-cols-12 gap-4 mb-12">
                            <div class="col-span-12 md:col-span-4">
                                <label class="text-xl font-semibold mb-2"><b>Broker party</b></label>
                                <select name="broker_party" id="brokesd" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="">Select</option>
                                    <option value="machi leads">Machi leads</option>
                                    <!-- ... -->
                                </select>
                            </div>
                        </div>

                        <!-- Dirección -->
                        <div class="mb-12">
                            <label class="text-xl font-semibold mb-2">Address</label>
                            <input type="text" name="property_address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Address" value="{{ old('property_address', $loan->property_address ?? '') }}">
                        </div>

                        <!-- Ciudad, Condado, Estado y Zip code -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                            <div>
                                <label class="text-xl font-semibold mb-2">City</label>
                                <input type="text" name="city" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="City" value="{{ old('city', $loan->city ?? '') }}">
                            </div>
                            <div>
                                <label class="text-xl font-semibold mb-2">County</label>
                                <input type="text" name="county" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="County" value="{{ old('county', $loan->county ?? '') }}">
                            </div>
                            <div>
                                <label class="text-xl font-semibold mb-2">State</label>
                                <select name="state" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="">Select</option>
                                    <option value="FL" @selected(old('state', $loan->state ?? '') === 'FL')>Florida</option>
                                    <!-- ... -->
                                </select>
                            </div>
                            <div>
                                <label class="text-xl font-semibold mb-2">Zip code</label>
                                <input type="text" name="zip" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Zip code" value="{{ old('zip', $loan->zip ?? '') }}">
                            </div>
                        </div>

                        <!-- Otros campos (Data for evaluation, Property Insurance, etc.) se pueden adaptar de manera similar -->

                        <!-- Botón de guardar -->
                        <div>
                            <button type="submit" class="inline-flex items-center justify-center rounded-md bg-[#13385b] text-white px-4 py-2 hover:bg-[#13385b]/90">
                                Save Loan <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Columna Derecha (Task) -->
                    <div class="md:col-span-3">
                        <h1 class="text-2xl font-bold mb-4">Task</h1>
                        <div class="h-[800px] overflow-y-scroll">
                            <!-- Contenido de tareas (tabs y acordeones) -->
                            @foreach($loan->tasks as $task)
                                <div class="border border-gray-200 rounded mb-4">
                                    <h2 class="bg-blue-500 text-white px-4 py-2">
                                        {{ $task->description }}
                                    </h2>
                                    <div class="p-4">
                                        <p><strong>Estado:</strong> {{ $task->status }}</p>
                                        <p><strong>Asignado a:</strong> {{ $task->assigned_to }}</p>
                                        <p><strong>Notas:</strong> {{ $task->notes }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
