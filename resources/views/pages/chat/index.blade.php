{{-- resources/views/chat/multiagent_chat.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <!-- Título del Chat -->
        <h2 class="text-2xl font-bold mb-6">Chat Multiagente</h2>

        <div class="flex flex-col md:flex-row bg-white shadow rounded-lg overflow-hidden">
            <!-- Sidebar: Lista de Contactos/Agentes -->
            <div class="w-full md:w-1/3 border-r border-gray-200">
                <div class="p-4 border-b border-gray-200">
                    <input type="text" placeholder="Buscar..." class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2" />
                </div>
                <ul class="divide-y divide-gray-200">
                    <!-- Ejemplo de contacto/cliente -->
                    <li class="p-4 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                                AB
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold">Ana Belén</p>
                                <p class="text-sm text-gray-500">Último mensaje: "Hola, ¿en qué puedo ayudar?"</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-4 hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-bold">
                                JP
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold">Juan Pérez</p>
                                <p class="text-sm text-gray-500">Último mensaje: "Revisando su consulta."</p>
                            </div>
                        </div>
                    </li>
                    <!-- Agregar más contactos según sea necesario -->
                </ul>
            </div>

            <!-- Área principal del Chat -->
            <div class="w-full md:w-2/3 flex flex-col">
                <!-- Cabecera del Chat -->
                <div class="p-4 border-b border-gray-200 flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            CL
                        </div>
                        <div class="ml-4">
                            <p class="font-semibold">Cliente XYZ</p>
                            <p class="text-sm text-gray-500">En línea</p>
                        </div>
                    </div>
                    <div>
                        <!-- Botón de opciones o acciones adicionales -->
                        <button class="px-3 py-1 bg-gray-200 rounded-md text-sm hover:bg-gray-300">Opciones</button>
                    </div>
                </div>

                <!-- Área de Mensajes -->
                <div id="chat-messages" class="flex-1 p-4 overflow-y-auto space-y-4 bg-gray-50">
                    <!-- Mensaje recibido -->
                    <div class="flex">
                        <div class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center text-gray-700 font-bold">
                            CL
                        </div>
                        <div class="ml-4 bg-white p-3 rounded-lg shadow">
                            <p class="text-gray-700">Hola, necesito ayuda con mi cuenta.</p>
                            <span class="text-xs text-gray-500">10:15 AM</span>
                        </div>
                    </div>
                    <!-- Mensaje enviado -->
                    <div class="flex justify-end">
                        <div class="mr-4 bg-blue-500 p-3 rounded-lg shadow text-white">
                            <p>Claro, ¿en qué puedo ayudarte?</p>
                            <span class="text-xs text-blue-200">10:16 AM</span>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            AG
                        </div>
                    </div>
                    <!-- Más mensajes se pueden agregar de forma dinámica -->
                </div>

                <!-- Área de Entrada de Mensaje -->
                <div class="p-4 border-t border-gray-200">
                    <form action="#" method="POST" class="flex">
                        <input type="text" name="message" placeholder="Escribe tu mensaje..." class="flex-1 rounded-l-md border-gray-300 p-3 shadow-sm focus:outline-none" />
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-r-md hover:bg-blue-600">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
