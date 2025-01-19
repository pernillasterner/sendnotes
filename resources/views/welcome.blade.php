<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sendnotes</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 text-black/50 dark:bg-black dark:text-white/50">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        
            <div class="flex flex-col items-center justify-center p-6 mx-auto space-y-4 text-center max-w-7xl lg:p-8">
                <x-application-logo class="w-24 h-24 fill-current text-primary" />
                <x-button primary xl href="{{ route('register') }}">Get Started</x-button>
            </div>
        </div>
    </body>
</html>
