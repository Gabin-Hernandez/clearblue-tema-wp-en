<?php
/**
 * Template Name: Home Page
 * Description: Página principal con diseño personalizado usando Tailwind CSS
 */

get_header();
?>

<!-- Hero Section con fondo de imagen -->
<section class="relative min-h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=2070');">
    <!-- Overlay oscuro -->
    <div class="absolute inset-0 bg-black/50"></div>
    
    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-6 flex items-center" style="min-height: 100vh; padding-top: 80px;">
        <div class="max-w-2xl">
            <h1 class="text-white text-5xl md:text-6xl font-bold leading-tight mb-6">
                Lorem <span class="font-light">ipsum</span> is simply dummy text of the printing and typesetting industry. Lorem has been the industry's
            </h1>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md transition font-medium text-lg">
                ACTION BT
            </button>
        </div>
    </div>
</section>

<!-- Sección Nuestras Soluciones -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Lado izquierdo - Gráfico circular -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-12 flex flex-col justify-center items-center">
                <h3 class="text-blue-600 text-2xl font-bold mb-8">Nuestras Soluciones</h3>
                <p class="text-gray-700 mb-8 text-center">
                    Encuentra el camino perfecto hacia tu meta
                </p>
                
                <!-- Gráfico de 4 Ejes -->
                <div class="relative w-64 h-64">
                    <!-- Círculo central -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-32 h-32 rounded-full border-4 border-gray-800 bg-white flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-800">4</div>
                                <div class="text-sm text-gray-600">EJES</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Líneas hacia los ejes -->
                    <div class="absolute inset-0">
                        <div class="absolute top-0 left-1/2 w-0.5 h-16 bg-gray-300 -translate-x-1/2"></div>
                        <div class="absolute bottom-0 left-1/2 w-0.5 h-16 bg-gray-300 -translate-x-1/2"></div>
                        <div class="absolute left-0 top-1/2 w-16 h-0.5 bg-gray-300 -translate-y-1/2"></div>
                        <div class="absolute right-0 top-1/2 w-16 h-0.5 bg-gray-300 -translate-y-1/2"></div>
                    </div>
                    
                    <!-- Puntos en los ejes -->
                    <div class="absolute top-2 left-1/2 w-3 h-3 bg-blue-600 rounded-full -translate-x-1/2"></div>
                    <div class="absolute bottom-2 left-1/2 w-3 h-3 bg-blue-600 rounded-full -translate-x-1/2"></div>
                    <div class="absolute left-2 top-1/2 w-3 h-3 bg-blue-600 rounded-full -translate-y-1/2"></div>
                    <div class="absolute right-2 top-1/2 w-3 h-3 bg-blue-600 rounded-full -translate-y-1/2"></div>
                </div>
            </div>
            
            <!-- Lado derecho - Lista de servicios -->
            <div class="space-y-4">
                <div class="bg-[#1e3a8a] text-white rounded-lg p-6 flex items-center justify-between cursor-pointer hover:bg-[#1e40af] transition">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <span class="font-semibold">Entrenamiento</span>
                    </div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                
                <div class="bg-[#1e3a8a] text-white rounded-lg p-6 flex items-center justify-between cursor-pointer hover:bg-[#1e40af] transition">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <span class="font-semibold">Reclutamiento y selección</span>
                    </div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                
                <div class="bg-white border-2 border-gray-200 rounded-lg p-6 flex items-center justify-between cursor-pointer hover:border-blue-300 transition">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <span class="font-semibold text-gray-800">Capacitación</span>
                    </div>
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                
                <div class="bg-white border-2 border-gray-200 rounded-lg p-6 flex items-center justify-between cursor-pointer hover:border-blue-300 transition">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                        <span class="font-semibold text-gray-800">Contactanos</span>
                    </div>
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Creatblue Originals (Dark) -->
<section class="py-20 bg-gradient-to-br from-[#1e3a8a] via-[#1e293b] to-[#0f172a] text-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Lado izquierdo - Texto y logos -->
            <div class="space-y-8">
                <div>
                    <p class="text-blue-300 uppercase tracking-wide text-sm font-semibold mb-4">CREATBLUE ORIGINALS</p>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">
                        The perfect
                        <br />
                        <span class="text-5xl md:text-6xl">WORKFORCE</span>
                        <br />
                        <span class="text-2xl font-light">ready to go</span>
                    </h2>
                </div>
                
                <!-- Logos -->
                <div class="space-y-6">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 inline-block">
                        <div class="text-3xl font-bold tracking-wider">
                            CREAT<span class="italic">map</span>
                        </div>
                    </div>
                </div>
                
                <p class="text-gray-300 text-lg leading-relaxed max-w-md">
                    Optimiza tu fuerza laboral con nuestras soluciones innovadoras diseñadas para maximizar la productividad y eficiencia.
                </p>
            </div>
            
            <!-- Lado derecho - Imagen -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2070" 
                         alt="Trabajador con tablet" 
                         class="w-full h-[500px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Diferenciadores -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Título -->
        <div class="mb-12">
            <p class="text-blue-600 uppercase tracking-wide text-sm font-semibold mb-2">DIFERENCIADOR CREATBLUE</p>
            <p class="text-gray-600 max-w-2xl">
                En Creatblue México nos caracterizamos por incrementar la productividad en todas las zonas que trabajamos, por medio de la capacitación y entrenamiento de los trabajadores y gerentes de los negocios.
            </p>
        </div>
        
        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Mejoramos la productividad
                </h3>
                <p class="text-gray-600">
                    Incrementamos la eficiencia operativa mediante capacitación especializada y procesos optimizados.
                </p>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Disminuimos la rotación de personal
                </h3>
                <p class="text-gray-600">
                    Reducimos significativamente la rotación mediante estrategias de retención y desarrollo del talento.
                </p>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Optimizamos tus costos operativos
                </h3>
                <p class="text-gray-600">
                    Maximizamos el retorno de inversión optimizando recursos y procesos operacionales.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Banner CTA Newsletter -->
<section class="py-16 bg-gradient-to-r from-[#1e3a8a] to-[#312e81]">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-white">
                <p class="text-sm uppercase tracking-wide mb-2 text-blue-200">BLOG | NEWSLETTER</p>
                <h3 class="text-3xl font-bold">Camino<span class="italic">cum</span> talent</h3>
                <p class="text-blue-100 mt-2">No te pierdas de los mejores consejos para crecer</p>
            </div>
            
            <div class="flex gap-4">
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-md transition font-medium">
                    ACTION BT
                </button>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
