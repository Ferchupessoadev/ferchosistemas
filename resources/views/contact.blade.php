<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-100 font-sans">
    <x-navbar.home></x-navbar.home>
    <section id="contacto" class="py-20 bg-gray-900">
        <div class="max-w-3xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-8 text-center text-blue-500">Contactanos</h3>

            @if(session('success'))
                <div class="bg-green-500/20 border border-green-500 text-green-400 p-4 rounded-lg mb-6 text-center">
                    {{ session('success') }}
                </div>
            @endif  

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-400 mb-1">Nombre</label>
                        <input type="text" name="name" placeholder="Tu nombre" value="{{ old('name') }}" class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:border-blue-500 outline-none" required>
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm text-gray-400 mb-1">Email</label>
                        <input type="email" name="email" placeholder="Tu email" value="{{ old('email') }}" class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:border-blue-500 outline-none" required>
                        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Asunto</label>
                    <input type="text" name="subject" placeholder="Asunto del mensaje" value="{{ old('subject') }}" class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:border-blue-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Mensaje</label>
                    <textarea name="message" placeholder="Tu mensaje" rows="5" class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:border-blue-500 outline-none" required>{{ old('message') }}</textarea>
                    @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition shadow-lg shadow-blue-500/20">
                    Enviar mensaje
                </button>
            </form>
        </div>
    </section>
</body>
</html>