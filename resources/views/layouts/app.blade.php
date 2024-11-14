<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rides Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-gray-100 font-sans">
    <div id="app" class="flex h-screen">
        <!-- Sidebar -->
        <nav class="bg-white w-64 min-h-full shadow-md">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-red-600">Rides Portal</h2>
            </div>
            <ul class="mt-6 space-y-4">
                <li>
                    <a href="{{ url('/home') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-100 hover:text-red-700 text-gray-700">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('/customers') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-100 hover:text-red-700 text-gray-700">
                        Customer
                    </a>
                </li>
                <li>
                    <a href="{{ url('/dashboard') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-100 hover:text-red-700 text-gray-700">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/drivers') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-100 hover:text-red-700 text-gray-700">
                        Drivers
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
