<footer class="bg-slate-950 text-slate-400 pt-20 pb-10 border-t border-slate-900/60 transition-all duration-300">
    <div @class([
        'max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 gap-12',
        'md:grid-cols-4' => count($services) > 0,
        'md:grid-cols-3' => count($services) === 0,
    ])>

        <div class="flex flex-col space-y-5">
            <h2 class="text-2xl font-black tracking-tight text-white">
                Fercho <span class="text-blue-500 bg-gradient-to-r from-blue-500 to-cyan-400 bg-clip-text text-transparent">Tech</span>
            </h2>
            <p class="text-sm leading-relaxed text-slate-400 font-normal max-w-sm">
                Soluciones integrales en tecnología, soporte técnico y desarrollo digital para potenciar tu negocio o proyecto personal.
            </p>
            <div class="flex items-center gap-4 pt-2">
                <a href="https://www.instagram.com/ferchotech.ok" target="_blank"
                   class="p-2 bg-slate-900 rounded-xl border border-slate-800 text-slate-400 hover:text-white hover:bg-pink-600 hover:border-pink-500 hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-pink-600/20 group">
                    <img src="{{ asset('assets/icons/instagram.svg') }}" alt="Instagram" class="size-5 filter brightness-90 group-hover:brightness-100 transition-all">
                </a>
                <a href="#"
                   class="p-2 bg-slate-900 rounded-xl border border-slate-800 text-slate-400 hover:text-white hover:bg-blue-600 hover:border-blue-500 hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-blue-600/20 group">
                    <img src="{{ asset('assets/icons/linkedin.svg') }}" alt="Linkedin" class="size-5 filter brightness-90 group-hover:brightness-100 transition-all">
                </a>
                <a href="#"
                   class="p-2 bg-slate-900 rounded-xl border border-slate-800 text-slate-400 hover:text-white hover:bg-slate-800 hover:border-slate-700 hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-white/10 group">
                    <img src="{{ asset('assets/icons/github.svg') }}" alt="Github" class="size-5 filter brightness-90 group-hover:brightness-100 transition-all">
                </a>
            </div>
        </div>

        <div>
            <h3 class="text-white font-bold mb-5 uppercase text-xs tracking-widest text-slate-200">Navegación</h3>
            <ul class="space-y-3 text-sm font-medium">
                <x-footer.navigation-link href="{{ route('home') }}" label="Inicio" />
                <x-footer.navigation-link href="{{ route('about') }}" label="Nosotros" />
                <x-footer.navigation-link href="{{ route('blog.index') }}" label="blog" />
                <x-footer.navigation-link href="{{ route('contact') }}" label="Contactanos" />
            </ul>
        </div>

        @if (count($services) > 0)
            <div>
                <h3 class="text-white font-bold mb-5 uppercase text-xs tracking-widest text-slate-200">Servicios</h3>
                <ul class="space-y-3 text-sm font-medium">
                    @foreach ($services as $service)
                        <li>
                            <a href="#" class="inline-flex items-center hover:text-blue-400 hover:translate-x-1 transition-all duration-200">
                                {{ $service->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        @endif

        <div>
            <h3 class="text-white font-bold mb-5 uppercase text-xs tracking-widest text-slate-200">Contacto</h3>
            <ul class="space-y-4 text-sm font-medium">
                <li class="flex items-center text-slate-300 group">
                    <div class="p-2 bg-slate-900 rounded-lg text-blue-500 mr-3 border border-slate-800/60 transition-colors group-hover:bg-blue-500/10">
                        <i data-lucide="mail" class="size-4"></i>
                    </div>
                    <span class="hover:text-white transition-colors cursor-pointer">contact@ferchudev.com</span>
                </li>
                <li class="flex items-center text-slate-300 group">
                    <div class="p-2 bg-slate-900 rounded-lg text-blue-500 mr-3 border border-slate-800/60 transition-colors group-hover:bg-blue-500/10">
                        <i data-lucide="map-pin" class="size-4"></i>
                    </div>
                    <span>Concordia, Entre Ríos</span>
                </li>
                <li class="flex items-center text-slate-300 group">
                    <div class="p-2 bg-slate-900 rounded-lg text-blue-500 mr-3 border border-slate-800/60 transition-colors group-hover:bg-blue-500/10">
                        <i data-lucide="clock" class="size-4"></i>
                    </div>
                    <span class="text-slate-400">Lun - Vie: 9:00 - 18:00</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mt-16 pt-8 border-t border-slate-900 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs font-medium text-slate-500">
        <p class="flex items-center gap-2">
            <i data-lucide="copyright" class="size-4 text-slate-600"></i>
            2026 Fercho Tech. Todos los derechos reservados.
        </p>
    </div>
</footer>
