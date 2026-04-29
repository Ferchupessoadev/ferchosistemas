<nav class="p-6 flex justify-between items-center border-b border-gray-800">
    <a href={{ route('home') }}>
        <h1 class="text-2xl font-bold tracking-tighter text-blue-500">
            FERCHO <span class="text-white">SISTEMAS</span>
        </h1>
    </a>

    <div class="flex items-center gap-10">
        <a href="{{ route('home') }}" class="hover:text-blue-400 transition">Home</a>
        <a href="{{ route('blog.index') }}" class="hover:text-blue-400 transition">Blog</a>
        <div class="relative group">
            <button class="flex items-center gap-1 hover:text-blue-400 transition focus:outline-none py-2">
                <a href="#servicios">Servicios</a>
                <i data-lucide="chevron-down" class="w-max h-4 transition-transform group-hover:rotate-180"></i>
            </button>
            <div class="absolute -left-15 mt-0 w-56 opacity-0 group-hover:opacity-100 group-hover:visible group-hover:mt-2 transition-all duration-300 z-50">
                <div class="bg-gray-900 border border-gray-700 rounded-xl shadow-xl overflow-hidden">
                    <a href="#soporte" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-800 hover:text-blue-400 transition">
                        <i data-lucide="monitor" class="w-4 h-4"></i>
                        <span>Soporte Técnico</span>
                    </a>
                    <a href="#desarrollo" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-800 hover:text-blue-400 transition">
                        <i data-lucide="code-2" class="w-4 h-4"></i>
                        <span>Desarrollo Web</span>
                    </a>
                    <a href="#seguridad" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-800 hover:text-blue-400 transition">
                        <i data-lucide="shield-check" class="w-4 h-4"></i>
                        <span>Seguridad</span>
                    </a>
                    <a href="#redes" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-800 hover:text-blue-400 transition">
                        <i data-lucide="network" class="w-4 h-4"></i>
                        <span>Redes e Infraestructura</span>
                    </a>
                    <a href="#consultoria" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-800 hover:text-blue-400 transition">
                        <i data-lucide="briefcase" class="w-4 h-4"></i>
                        <span>Consultoría IT</span>
                    </a>
                </div>
            </div>
        </div>
        <a href="{{ route('contact') }}" class="hover:text-blue-400 transition">Contacto</a>
    </div>
</nav>
