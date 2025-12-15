<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Papa System</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media', // Usa la preferencia del sistema o 'class' si tienes toggle manual
            theme: {
                extend: {
                    colors: {
                        papa: '#F53003',
                    },
                    fontFamily: {
                        sans: ['Instrument Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="antialiased font-sans text-gray-900 dark:text-gray-100">

    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 relative selection:bg-papa selection:text-white">

        <header class="absolute top-0 right-0 p-6 z-10">
            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-papa">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-papa transition">
                            Iniciar Sesión
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-sm font-medium bg-papa text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="mb-6">
            <div
                class="w-16 h-16 bg-white dark:bg-gray-800 rounded-2xl flex items-center justify-center shadow-lg border border-gray-200 dark:border-gray-700 text-4xl">
                🥔
            </div>
        </div>

        <footer class="w-full sm:max-w-md px-6 text-center space-y-4">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                Bienvenido a Proyecto Papa
            </h1>

            <p class="text-gray-600 dark:text-gray-400 text-lg">
                Regístrate ahora mismo para ganar una <span class="text-papa font-semibold">papa gratis</span>.
            </p>

            <p class="text-xs text-gray-400 mt-8">
                &copy; {{ date('Y') }} Proyecto Papa.
            </p>
        </footer>

    </div>

</body>

</html>