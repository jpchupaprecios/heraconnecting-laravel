<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/base.css', 'resources/js/app.js'])
</head>
<body className="inter_59dee874-module__9CtR0q__className">
<div class="flex min-h-screen w-full">
    @include('layouts.partials.app-sidebar')
    <main class="flex-1 w-full ml-0 md:ml-[var(--sidebar-width)]">
        <div class="flex flex-col">
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
