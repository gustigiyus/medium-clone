<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    @livewire('navigation-menu')

    {{-- Hero Section --}}
    <div class="w-full h-96 dark:bg-[#ffc017] flex items-center">
        <div class="flex flex-col max-w-7xl mx-auto px-4 w-full space-y-4">
            <h1 class="text-8xl font-bold">Stay curious.</h1>
            <h3 class="text-xl font-thin max-w-sm !mb-6">
                Discover stories, thinking, and expertise from writers on any topic.
            </h3>
            <button class="inline-flex items-center w-fit px-9 py-2 text-xl bg-black text-white rounded-full">
                Start Reading
            </button>
        </div>
    </div>

    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>
