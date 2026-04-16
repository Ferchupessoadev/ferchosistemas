<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fercho Sistemas | Soluciones Tecnológicas</title>
    @include('partials.head')
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body class="bg-gray-900 text-gray-100 font-sans">

    <x-navbar.home></x-navbar.home>

    <x-header.home></x-header.home>

    <section id="servicios" class="py-20 bg-gray-800/50">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center">Nuestros Servicios</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-900 rounded-2xl border border-gray-700 hover:border-blue-500 transition">
                    <div class="text-blue-500 mb-4">
                        <i data-lucide="settings-2" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Soporte Técnico</h4>
                    <p class="text-gray-400">Resolución de problemas de hardware y software de manera eficiente.</p>
                </div>
                <div class="p-8 bg-gray-900 rounded-2xl border border-gray-700 hover:border-blue-500 transition">
                    <div class="text-blue-500 mb-4">
                        <i data-lucide="code-2" class="size-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Desarrollo Web</h4>
                    <p class="text-gray-400">Creación de sitios modernos y optimizados con las últimas tecnologías.</p>
                </div>
                <div class="p-8 bg-gray-900 rounded-2xl border border-gray-700 hover:border-blue-500 transition">
                    <div class="text-blue-500 mb-4">
                        <i data-lucide="shield-check" class="size-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Seguridad</h4>
                    <p class="text-gray-400">Protección de datos y optimización de redes para tu empresa.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h3 class="text-3xl font-bold mb-6">¿Por qué confiar en nosotros?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-3">✔</span>
                            <p class="text-gray-300"><b>Experiencia Comprobada:</b> Más de 5 años en el sector IT.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-3">✔</span>
                            <p class="text-gray-300"><b>Atención Personalizada:</b> No eres un número más, somos tus
                                aliados.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-3">✔</span>
                            <p class="text-gray-300"><b>Resultados Rápidos:</b> Optimizamos procesos para entregas
                                ágiles.</p>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 bg-gray-800 p-8 rounded-2xl border border-gray-700 text-center">
                    <span class="text-6xl font-bold text-blue-500">+100</span>
                    <p class="text-xl text-gray-400 mt-2">Proyectos completados con éxito</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-20 bg-gray-900">
        <div class="max-w-4xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center">Preguntas Frecuentes</h3>

            <div class="space-y-4">
                <div class="faq-item group">
                    <button
                        class="w-full flex items-center justify-between p-6 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-blue-500 transition-all duration-300 focus:outline-none"
                        onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-left">¿Cuánto tiempo toma desarrollar un sitio
                            web?</span>
                        <span class="text-blue-500 transform transition-transform duration-300 icon-plus">
                            <i data-lucide="plus"></i>
                        </span>
                    </button>
                    <div
                        class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-800/30 rounded-b-2xl px-6">
                        <p class="py-4 text-gray-400">
                            Depende de la complejidad. Una landing page suele estar lista en 1 semana, mientras que una
                            web corporativa completa puede tomar de 3 a 4 semanas.
                        </p>
                    </div>
                </div>

                <div class="faq-item group">
                    <button
                        class="w-full flex items-center justify-between p-6 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-blue-500 transition-all duration-300 focus:outline-none"
                        onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-left">¿El soporte técnico es presencial o remoto?</span>
                        <span class="text-blue-500 transform transition-transform duration-300 icon-plus">
                            <i data-lucide="plus"></i>
                        </span>
                    </button>
                    <div
                        class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-800/30 rounded-b-2xl px-6">
                        <p class="py-4 text-gray-400">
                            Ofrecemos ambas modalidades. La mayoría de los problemas de software se resuelven de forma
                            remota en minutos, pero para hardware contamos con visitas técnicas programadas.
                        </p>
                    </div>
                </div>

                <div class="faq-item group">
                    <button
                        class="w-full flex items-center justify-between p-6 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-blue-500 transition-all duration-300 focus:outline-none"
                        onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-left">¿Cómo aseguran la protección de mis datos?</span>
                        <span class="text-blue-500 transform transition-transform duration-300 icon-plus">
                            <i data-lucide="plus"></i>
                        </span>
                    </button>
                    <div
                        class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-800/30 rounded-b-2xl px-6">
                        <p class="py-4 text-gray-400">
                            Implementamos protocolos de encriptación SSL, firewalls avanzados y auditorías periódicas
                            para garantizar que tu información y la de tus clientes esté siempre blindada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonios" class="py-20 bg-gray-800/30">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold mb-4">Lo que dicen nuestros clientes</h3>
                <p class="text-gray-400 max-w-2xl mx-auto">La confianza de quienes ya trabajan con nosotros es nuestra
                    mejor carta de presentación.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-900 rounded-2xl border border-gray-700 flex flex-col h-full">
                    <div class="flex text-yellow-500 mb-4">
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                    </div>
                    <p class="text-gray-300 italic mb-6 flex-grow">"El mejor soporte de la ciudad, me encanto la atención, diez de diez"</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center text-blue-500 font-bold">
                            RA
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Florencia Saporittis</h4>
                            <p class="text-sm text-gray-500">Programadora</p>
                        </div>
                    </div>
                </div>

                <div
                    class="p-8 bg-gray-900 rounded-2xl border border-gray-700 flex flex-col h-full border-b-blue-500/50">
                    <div class="flex text-yellow-500 mb-4">
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                    </div>
                    <p class="text-gray-300 italic mb-6 flex-grow">"Nuestra nueva web no solo se ve increíble, sino que
                        es mucho más rápida. Notamos un incremento en las consultas desde la primera semana."</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-purple-500/20 rounded-full flex items-center justify-center text-purple-500 font-bold">
                            MS
                        </div>
                        <div>
                            <h4 class="font-bold text-white">María Sánchez</h4>
                            <p class="text-sm text-gray-500">Directora de Marketing</p>
                        </div>
                    </div>
                </div>

                <div class="p-8 bg-gray-900 rounded-2xl border border-gray-700 flex flex-col h-full">
                    <div class="flex text-yellow-500 mb-4">
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                        <i data-lucide="star" class="fill-current size-4"></i>
                    </div>
                    <p class="text-gray-300 italic mb-6 flex-grow">"La auditoría de seguridad que realizaron nos dio la
                        tranquilidad que necesitábamos. Profesionales, directos y muy transparentes."</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-green-500/20 rounded-full flex items-center justify-center text-green-500 font-bold">
                            JP
                        </div>
                        <div>
                            <h4 class="font-bold text-white">Juan Pérez</h4>
                            <p class="text-sm text-gray-500">Gerente de IT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('.icon-plus');

            // Cerrar otros si quieres que solo haya uno abierto a la vez (opcional)
            document.querySelectorAll('.faq-answer').forEach(el => {
                if (el !== answer) el.style.maxHeight = null;
            });

            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                icon.style.transform = 'rotate(0deg)';
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
                icon.style.transform = 'rotate(45deg)';
            }
        }
    </script>

    <x-footer></x-footer>
</body>

</html>