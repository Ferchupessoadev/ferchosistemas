<nav class="p-6 flex justify-between items-center border-b border-gray-800">
    <a href={{ route('home') }}>
        <h1 class="text-2xl font-bold tracking-tighter text-blue-500">
            FERCHO <span class="text-white">SISTEMAS</span>
        </h1>
    </a>

    <div class="space-x-6 flex items-center">
        <a href="#servicios" class="hover:text-blue-400 transition">Servicios</a>
        <a href={{ route('contact') }} class="hover:text-blue-400 transition">Contacto</a>
        <a href="https://www.instagram.com/ferchosistemas/" target="_blank" class="rounded-lg hover:scale-105 transition duration-200">
            <x-icons.instagram class="size-8"></x-icons.instagram>
        </a>
    </div>
</nav>