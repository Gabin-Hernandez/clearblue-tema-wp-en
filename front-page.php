<?php
/**
 * Template Name: Home Page - Front Page USA
 * Description: Main page with custom design using Tailwind CSS
 * 
 * SEO:
 * - Title: Creatblue® USA | Safety Training, OSHA Programs, and Workforce Support
 * - Meta Description: Industrial safety training and workforce solutions that improve performance, strengthen operations, and support your team where it matters most.
 */

// SEO manejado dinámicamente desde functions.php
get_header();
?>

<!-- Hero Section with Background Image -->
<section class="relative min-h-screen overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img 
            src="<?php echo get_stylesheet_directory_uri(); ?>/public/home.webp" 
            alt="Safety Training Background" 
            class="w-full h-full object-cover"
        >
    </div>
    
    <!-- Overlay oscuro -->
    <div class="absolute inset-0 bg-black/80"></div>
    
    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-6 flex items-center" style="min-height: 100vh; padding-top: 80px;">
        <div class="max-w-3xl">
            <p class="text-secondary uppercase tracking-[0.2em] text-xl font-black mb-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Workforce Reinvented
            </p>
            <h1 class="text-white text-5xl md:text-6xl font-bold leading-tight mb-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                Safety Training, OSHA Programs, and Workforce Support
            </h1>
            <h2 class="text-white text-xl md:text-2xl font-normal leading-relaxed mb-8 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                Industrial safety training and workforce solutions that improve performance, strengthen operations, and support your team where it matters most.
            </h2>
            <button class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                Get a Quote
            </button>
        </div>
    </div>
</section>

<!-- Sección Nuestras Soluciones -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="relative flex flex-col md:flex-row items-center justify-center md:justify-center gap-4">
            
            <!-- Contenedor unificado con fondo -->
            <div class="relative flex flex-col md:flex-row items-center bg-secondary rounded-3xl shadow-2xl p-6 md:p-0 max-w-6xl opacity-0 translate-y-8 transition-all duration-1000 ease-out animate-on-scroll" data-delay="200">
                
                <!-- Card de texto a la izquierda -->
                <div class="w-full md:w-auto md:max-w-md z-10 p-8 md:p-10">
                    <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-primary mb-3 md:mb-4 leading-tight">
                        Soluciones integrales para el desarrollo del talento.
                    </h3>
                    <p class="text-white text-lg md:text-lg leading-relaxed">
                        Encuentra el camino correcto con nosotros.
                    </p>
                </div>
                
                <!-- Círculo de 4 EJES usando la imagen -->
                <div class="flex justify-center md:justify-start z-20 md:-mr-12">
                    <div class="relative w-64 h-64 md:w-80 md:h-80 transform hover:scale-105 transition-transform duration-500 opacity-0 scale-75 animate-on-scroll" data-delay="600">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/circulo.webp" 
                             alt="4 EJES - Nuestras Soluciones" 
                             class="w-full h-full object-contain drop-shadow-2xl">
                    </div>
                </div>
            </div>
            
            <!-- Contenedor de las cards de servicios -->
            <div class="w-full md:w-auto lg:max-w-md xl:max-w-lg mt-8 md:mt-0 md:ml-8 lg:ml-12 z-20">
                
                <!-- Lista de servicios -->
                <div class="space-y-3 md:space-y-4">
                
                <!-- Lista de servicios -->
                <div class="space-y-3 md:space-y-4 z-20">
                    <!-- Entrenamiento -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-2 md:p-3 flex items-center justify-between cursor-pointer hover:bg-primary hover:border-primary transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-[#1e3a8a] transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .708A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-lg md:text-lg">Entrenamiento</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clipRule="evenodd" />
                        </svg>
                    </div>
                    
                    <!-- Reclutamiento y selección -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-2 md:p-3 flex items-center justify-between cursor-pointer hover:bg-primary hover:border-primary transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-secondary/20 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-[#1e3a8a] transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157l.001.003Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-lg md:text-lg">Reclutamiento y Selección</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clipRule="evenodd" />
                        </svg>
                    </div>
                    
                    <!-- Capacitación -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-2 md:p-3 flex items-center justify-between cursor-pointer hover:bg-primary hover:border-primary transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 opacity-0 translate-x-8 animate-on-scroll" data-delay="800">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-secondary/20 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-[#1e3a8a] transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path fillRule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75-2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z" clipRule="evenodd" />
                                    <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-lg md:text-lg">Capacitación</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clipRule="evenodd" />
                        </svg>
                    </div>
                    
                    <!-- Consultoría -->
                    <div class="group bg-white border-2 border-gray-200 rounded-2xl p-2 md:p-3 flex items-center justify-between cursor-pointer hover:bg-primary hover:border-primary transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 opacity-0 translate-x-8 animate-on-scroll" data-delay="1000">
                        <div class="flex items-center space-x-3 md:space-x-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-secondary/20 group-hover:bg-white rounded-xl flex items-center justify-center transition-colors duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-primary group-hover:text-[#1e3a8a] transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path fillRule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97Z" clipRule="evenodd" />
                                </svg>
                            </div>
                            <span class="font-semibold text-gray-800 group-hover:text-white transition-colors duration-300 text-lg md:text-lg">Consultoría</span>
                        </div>
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-400 group-hover:text-white transition-colors duration-300" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clipRule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <!-- Title -->
        <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6">What We Do</h2>
            <p class="text-gray-700 text-lg max-w-4xl mx-auto leading-relaxed mb-6">
                Creatblue® USA provides hands-on safety training, OSHA programs, CPR/AED certification, consulting, and skilled workforce support for industrial and commercial environments.
            </p>
            <p class="text-gray-700 text-lg max-w-4xl mx-auto leading-relaxed">
                Our approach is practical, people-focused, and shaped by real in-field experience. We support companies that want training that goes beyond compliance and workforce solutions that improve safety and performance.
            </p>
        </div>

        <!-- Content with Image -->
        <div class="grid md:grid-cols-2 gap-12 items-center mt-16">
            <!-- Text Content -->
            <div class="opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <h3 class="text-2xl font-bold text-primary mb-6">We help EHS, HR, and operations leaders with:</h3>
                <ul class="space-y-3 text-gray-700 text-lg">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Forklift and PIT training</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>MEWP operator training</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>OSHA 10 and OSHA 30</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>CPR/AED and First Aid (American Red Cross certified)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>HAZWOPER, Confined Spaces, Lockout/Tagout, Arc Flash, Hot Works, Flagger</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Customized safety programs</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Site safety and compliance consulting</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Trained personnel to support workforce needs</span>
                    </li>
                </ul>
            </div>

            <!-- Image -->
            <div class="relative h-[500px] opacity-0 scale-75 animate-on-scroll" data-delay="600">
                <div class="absolute inset-0 rounded-2xl overflow-hidden shadow-2xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/home.webp" 
                         alt="Safety Training" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Creatblue USA Section -->
<section class="relative overflow-hidden py-20" style="clip-path: polygon(0% 0%, 100% 5%, 100% 100%, 0 100%);">
    <!-- Background with gradient -->
    <div class="absolute inset-0 bg-gradient-radial from-[#2f3082] to-primary"></div>
    
    <!-- Wave effect -->
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-b from-[#2f3082]/30 to-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-b from-[#2f3082]/20 to-primary/10 rounded-full blur-2xl"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Title -->
        <div class="text-center mb-16 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Why Creatblue USA</h2>
        </div>
        
        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            
            <!-- Feature 1 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Training that develops real skill</h3>
                </div>
                <p class="text-gray-200 text-lg leading-relaxed">
                    Our low trainer-to-student ratios and hands-on coaching help teams build true confidence and capability on the job.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Instruction built on real-world experience</h3>
                </div>
                <p class="text-gray-200 text-lg leading-relaxed">
                    Our trainers and consultants come from industrial, manufacturing, logistics, and safety environments. They teach what actually happens on the floor, not just what's in the manual.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Support that adapts to your operation</h3>
                </div>
                <p class="text-gray-200 text-lg leading-relaxed">
                    Whether you are preparing for an audit, training new hires, responding to growth, or stabilizing staffing, we support your operation with flexible, practical, people-first solutions.
                </p>
            </div>
            
            <!-- Feature 4 -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="1000">
                <div class="flex items-start gap-4 mb-4">
                    <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Flexible training locations</h3>
                </div>
                <p class="text-gray-200 text-lg leading-relaxed">
                    Train onsite at your facility or at our dedicated training center for a focused, controlled learning environment.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Trusted by Our Partners Section -->
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-6">
        <!-- Title -->
        <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6">Trusted by Our Partners</h2>
            <p class="text-gray-700 text-lg max-w-3xl mx-auto leading-relaxed">
                Companies rely on Creatblue® USA for training, safety, compliance, and workforce support backed by workforce management experience. We take pride in walking beside every team we serve with practical instruction, dependable service, and a people-first approach.
            </p>
        </div>
        
        <!-- Testimonial -->
        <div class="max-w-4xl mx-auto mb-16 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
            <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-gray-100">
                <svg class="w-12 h-12 text-secondary mb-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
                <blockquote class="text-xl md:text-2xl text-gray-800 mb-6 leading-relaxed italic">
                    "Thanks for your support, commitment, friendship, and partnership in our MRO business here at Volkswagen."
                </blockquote>
                <p class="text-gray-600 font-semibold">
                    — Manager, General Stores, Volkswagen Group of America
                </p>
            </div>
        </div>
        
        <!-- Partner Logos -->
        <div class="opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
            <p class="text-center text-gray-600 font-semibold mb-8 uppercase tracking-wider">
                Trusted by Industry Leaders
            </p>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-16">
                <!-- Placeholder for logos - replace with actual logos later -->
                <div class="w-32 h-32 rounded-xl flex items-center justify-center overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/vw.webp" 
                         alt="Volkswagen" 
                         class="w-full h-full object-contain">
                </div>
                <div class="w-32 h-32 bg-gray-200 rounded-xl flex items-center justify-center">
                    <span class="text-gray-500 text-sm text-center px-2">Partner Logo 2</span>
                </div>
                <div class="w-32 h-32 bg-gray-200 rounded-xl flex items-center justify-center">
                    <span class="text-gray-500 text-sm text-center px-2">Partner Logo 3</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 gap-8">
            
            <!-- Training -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <div class="h-80 overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/training.webp" 
                         alt="Training Services" 
                         class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .708A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-primary">Training</h3>
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        We deliver OSHA-aligned forklift, MEWP, CPR/AED, and safety training that builds real skill and stronger on-the-job performance. Trainers with in-field experience teach the way industrial teams actually work.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors">
                        View Training Services
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Safety -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="h-80 overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/safety.webp" 
                         alt="Safety Programs" 
                         class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-primary">Safety</h3>
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        We help reinforce safer work practices with programs grounded in clear decision-making, hazard awareness, and consistent application across your facility.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors">
                        View Safety Programs
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Compliance -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="h-80 overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/compliance.webp" 
                         alt="Compliance Services" 
                         class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75-2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-primary">Compliance</h3>
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        We support OSHA, HAZMAT, Confined Spaces, Lockout/Tagout, and related regulatory needs so your operation stays compliant, audit-ready, and working with confidence.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors">
                        View Compliance Services
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Consulting -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="h-80 overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/consulting.webp" 
                         alt="Consulting Services" 
                         class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-primary">Consulting</h3>
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        We provide customized safety and operational support built by consultants with deep experience in industrial environments, material handling, logistics, and workforce readiness.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors">
                        View Consulting Services
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Creatblue Promise Section - Quote Style -->
<section class="py-20 bg-gradient-to-b from-[#2f3082] to-primary relative overflow-hidden">
    <!-- Decorative pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-secondary/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-300 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <p class="text-secondary uppercase tracking-[0.3em] text-sm font-black mb-6">
                THE CREATBLUE PROMISE
            </p>
            <svg class="w-16 h-16 text-secondary mx-auto mb-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>
            <blockquote class="text-3xl md:text-4xl text-white font-light leading-relaxed italic mb-8">
                We strengthen your operation by developing safer, more capable teams through thorough training and reliable workforce support.
            </blockquote>
        </div>
    </div>
</section>

<!-- Service Area Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="opacity-0 translate-x-8 animate-on-scroll" data-delay="200">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6">Service Area</h2>
                <p class="text-gray-700 text-lg leading-relaxed">
                    We support companies across the Southeast with onsite safety training, OSHA programs, and workforce support delivered directly at your facility. Our team serves industrial and commercial operations throughout Tennessee, Georgia, Alabama, South Carolina, and neighboring regions, bringing dependable instruction wherever your workforce needs us.
                </p>
            </div>
            
            <!-- Image -->
            <div class="relative h-[400px] opacity-0 scale-75 animate-on-scroll" data-delay="400">
                <div class="absolute inset-0 rounded-2xl overflow-hidden shadow-2xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/service.webp" 
                         alt="Service Area Map" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer para las animaciones de scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '-50px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const delay = parseInt(element.dataset.delay) || 0;
                
                setTimeout(() => {
                    element.classList.add('animate-in');
                    element.classList.remove('opacity-0', 'translate-y-8', 'translate-x-8', 'scale-75');
                }, delay);
                
                observer.unobserve(element);
            }
        });
    }, observerOptions);

    // Observar todos los elementos con la clase animate-on-scroll
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach((element) => {
        observer.observe(element);
    });

    // Efecto parallax para las partículas flotantes
    const particles = document.querySelectorAll('.particle-float');
    
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        particles.forEach(particle => {
            const speed = parseFloat(particle.dataset.speed) || 0.5;
            const yPos = -(scrollY * speed);
            
            // Check if element has animate-on-scroll class and is animated in
            if (particle.classList.contains('animate-on-scroll') && particle.classList.contains('animate-in')) {
                // Preserve the existing transform from animation and add parallax
                particle.style.transform = `translateY(${yPos}px)`;
            } else if (!particle.classList.contains('animate-on-scroll')) {
                // For elements without scroll animation, just apply parallax
                particle.style.transform = `translateY(${yPos}px)`;
            }
        });
    });
});
</script>

<style>
.animate-on-scroll {
    transition: all 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
}

.animate-on-scroll.animate-in {
    opacity: 1 !important;
    /* No aplicamos transform aquí para evitar conflictos con parallax */
}

.animate-on-scroll.animate-in:not(.particle-float) {
    transform: translateY(0) translateX(0) scale(1) !important;
}

.particle-float {
    transition: transform 0.1s ease-out;
    will-change: transform;
}
</style>

<?php
get_footer();
?>
