<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Fercho Sistemas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex min-h-screen bg-gray-950 text-white">
    <aside class="w-64 border-r border-gray-800 bg-gray-900 hidden md:block">
        <div class="p-6">
            <h2 class="text-xl font-bold text-blue-500 tracking-tighter">FERCHO <span class="text-white">ADMIN</span></h2>
        </div>
        <nav class="mt-6">
            <a href="#" class="flex items-center gap-3 px-6 py-4 bg-blue-600/10 border-r-4 border-blue-500 text-blue-400">
                <i data-lucide="mail"></i> Mensajes
            </a>
            <a href="#" class="flex items-center gap-3 px-6 py-4 text-gray-400 hover:bg-gray-800 transition">
                <i data-lucide="layout-dashboard"></i> Estadísticas
            </a>
            <form method="POST" action={{ route('logout') }} class="mt-10 px-6">
                @csrf
                <button class="flex cursor-pointer items-center gap-3 text-red-400 hover:text-red-300 transition">
                    <i data-lucide="log-out"></i> Cerrar Sesión
                </button>
            </form>
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <header class="flex justify-between items-center mb-10">
            <h1 class="text-2xl font-bold">Bandeja de Entrada</h1>
            <span class="bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full text-sm border border-blue-500/30">
                {{ $messages->total() }} Mensajes totales
            </span>
        </header>

        <div class="bg-gray-900 rounded-2xl border border-gray-800 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-800/50 border-b border-gray-800">
                    <tr>
                        <th class="px-6 py-4 font-semibold text-gray-300">Remitente</th>
                        <th class="px-6 py-4 font-semibold text-gray-300">Mensaje</th>
                        <th class="px-6 py-4 font-semibold text-gray-300">Fecha</th>
                        <th class="px-6 py-4 font-semibold text-gray-300 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800">
                    @forelse ($messages as $msg)
                        <tr class="hover:bg-gray-800/30 transition">
                            <td class="px-6 py-4">
                                <div class="font-medium">{{ $msg->name }}</div>
                                <div class="text-sm text-gray-500">{{ $msg->email }}</div>
                            </td>
                            <td class="px-6 py-4 text-gray-400">
                                <p class="truncate w-64">{{ $msg->message }}</p>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $msg->created_at->diffForHumans() }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="text-blue-500 hover:text-blue-400 p-2" title="Leer">
                                    <i data-lucide="eye" class="size-5"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-400 p-2" title="Eliminar">
                                    <i data-lucide="trash-2" class="size-5"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                                No hay mensajes nuevos.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $messages->links() }}
        </div>
    </main>
</div>

<script src="https://unpkg.com/lucide@latest"></script>
<script>lucide.createIcons();</script>
</body>
</html>