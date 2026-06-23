@props([
    'title' => 'Error',
    'code' => '500',
    'subtitle' => 'Algo salió mal',
    'description' => 'Estamos trabajando para solucionarlo.',
    'showHome' => true,
    'showProjects' => false
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $code }} - {{ $title }}</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0b1329] text-gray-100 font-sans antialiased overflow-x-hidden">

    <x-navbar.home></x-navbar.home>

    <main class="relative flex flex-col items-center justify-center min-h-[calc(100vh-80px)] px-6 text-center">

        <!-- Glow de fondo sutil (Estilo SaaS) -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[650px] h-[350px] bg-gradient-to-b from-blue-500/10 to-transparent blur-[130px] pointer-events-none"></div>

        <div class="relative z-10 max-w-md mx-auto space-y-6">

            <!-- Badge dinámico con el código de error -->
            <div class="inline-flex items-center justify-center space-x-2 bg-blue-500/10 border border-blue-500/20 text-blue-400 px-4 py-1.5 rounded-full text-xs font-medium tracking-wide backdrop-blur-sm">
                <span class="flex h-2 w-2 rounded-full bg-blue-400 {{ $code == '500' ? 'bg-red-400' : 'bg-blue-400' }} animate-ping"></span>
                <span>STATUS_CODE: {{ $code }}</span>
            </div>

            <!-- Título Principal -->
            <div class="space-y-2">
                <h1 class="text-7xl md:text-8xl font-black tracking-tighter bg-clip-text text-transparent bg-gradient-to-r from-white via-gray-200 to-gray-500">
                    {{ $title }}
                </h1>
                <h2 class="text-xl md:text-2xl font-bold text-gray-200 tracking-tight">
                    {{ $subtitle }}
                </h2>
            </div>

            <!-- Descripción (Mensaje para el cliente) -->
            <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-sm mx-auto">
                {{ $description }}
            </p>

            <div class="w-12 h-[1px] bg-gray-800 mx-auto my-4"></div>

            <!-- Botones de Acción Controlados por Props -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2">
                @if($showHome)
                    <a href="{{ url('/') }}" class="w-full sm:w-auto flex items-center justify-center space-x-2 bg-blue-600 hover:bg-blue-500 text-white font-medium px-6 py-3 rounded-xl transition-all duration-200 shadow-lg shadow-blue-600/10 hover:shadow-blue-600/20 transform hover:-translate-y-0.5">
                        <i data-lucide="home" class="w-4 h-4"></i>
                        <span>Volver al Inicio</span>
                    </a>
                @endif

                @if($showProjects)
                    <a href="{{ url('/#proyectos') }}" class="w-full sm:w-auto flex items-center justify-center space-x-2 bg-[#16223f] hover:bg-[#1d2d54] text-gray-300 font-medium px-6 py-3 rounded-xl border border-gray-800 transition-all duration-200">
                        <i data-lucide="briefcase" class="w-4 h-4"></i>
                        <span>Ver Proyectos</span>
                    </a>
                @endif
            </div>
        </div>

        <!-- Enlace de rescate para no perder el Lead -->
        <div class="relative z-10 pt-12 text-xs text-gray-500">
            ¿Algo no funciona? <a href="{{ route('contact') }}" class="text-blue-400 hover:underline">Avisanos directamente</a>
        </div>
    </main>

    <x-footer></x-footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
