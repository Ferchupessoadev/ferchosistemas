<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Fercho sistemas</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-100 font-sans">
    <x-navbar.home></x-navbar.home>

    <section class="min-h-screen bg-gray-950 flex items-center justify-center px-6 py-12">
        <div class="max-w-md w-full bg-gray-900 rounded-3xl border border-gray-800 p-10 shadow-2xl">
            
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold tracking-tighter text-blue-500">
                    FERCHO <span class="text-white">SISTEMAS</span>
                </h1>
                <p class="text-gray-400 mt-2">Bienvenido de nuevo, accede a tu panel</p>
            </div>

            <form action="{{ route('login.store') }}" method="POST" class="space-y-6">
                @csrf 
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Correo Electrónico</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500">
                            <i data-lucide="mail" class="size-5"></i>
                        </span>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="tu@ejemplo.com" 
                            class="w-full pl-11 pr-4 py-3 bg-gray-800 border @error('email') border-red-500 @else border-gray-700 @enderror rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                            <i data-lucide="alert-circle" class="size-3"></i> {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Contraseña</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500">
                            <i data-lucide="lock" class="size-5"></i>
                        </span>
                        <input type="password" name="password" placeholder="••••••••" 
                            class="w-full pl-11 pr-4 py-3 bg-gray-800 border @error('password') border-red-500 @else border-gray-700 @enderror rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                            <i data-lucide="alert-circle" class="size-3"></i> {{ $message }}
                        </p>
                    @enderror
                    
                    <div class="flex justify-end mt-2">
                        <a href="#" class="text-xs text-blue-400 hover:underline">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 px-4 rounded-xl transition duration-300 transform hover:scale-[1.02] active:scale-95 shadow-lg shadow-blue-900/20">
                    Iniciar Sesión
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-800 text-center">
                <p class="text-gray-400 text-sm">
                    ¿No tienes cuenta? 
                    <a href="#" class="text-blue-500 font-semibold hover:text-blue-400 transition">Regístrate gratis</a>
                </p>
            </div>
        </div>
    </section>

    <script>lucide.createIcons();</script>
</body>
</html>