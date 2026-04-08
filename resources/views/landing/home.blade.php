<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fercho Sistemas | Soluciones Tecnológicas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script> </head>
<body class="bg-gray-900 text-gray-100 font-sans">

    <x-navbar.home></x-navbar.home>

    <x-header.home></x-header.home>

    <section id="servicios" class="py-20 bg-gray-800/50">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center">Nuestros Servicios</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-900 rounded-2xl border border-gray-700 hover:border-blue-500 transition">
                    <div class="text-blue-500 mb-4">💻</div>
                    <h4 class="text-xl font-bold mb-2">Soporte Técnico</h4>
                    <p class="text-gray-400">Resolución de problemas de hardware y software de manera eficiente.</p>
                </div>
                <div class="p-8 bg-gray-900 rounded-2xl border border-gray-700 hover:border-blue-500 transition">
                    <div class="text-blue-500 mb-4">🌐</div>
                    <h4 class="text-xl font-bold mb-2">Desarrollo Web</h4>
                    <p class="text-gray-400">Creación de sitios modernos y optimizados con las últimas tecnologías.</p>
                </div>
                <div class="p-8 bg-gray-900 rounded-2xl border border-gray-700 hover:border-blue-500 transition">
                    <div class="text-blue-500 mb-4">🛡️</div>
                    <h4 class="text-xl font-bold mb-2">Seguridad</h4>
                    <p class="text-gray-400">Protección de datos y optimización de redes para tu empresa.</p>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>

</body>
</html>