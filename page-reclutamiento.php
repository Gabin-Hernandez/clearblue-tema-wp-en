<?php
/**
 * Template Name: Safety.
 * Description: OSHA Safety Programs and Training Services
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] bg-gradient-to-br from-gray-50 to-gray-100 pt-32 pb-20 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Column - Text Content -->
            <div class="max-w-xl">
                <!-- Badge -->
                <div class="inline-block mb-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="100">
                    <span class="bg-secondary text-white text-xs font-bold px-4 py-2 rounded-full uppercase tracking-wider">
                        OSHA Safety Programs
                    </span>
                </div>
                
                <!-- Main Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                    OSHA Safety Programs That Protect People and Strengthen <span class="text-secondary font-black">Operations</span>
                </h1>
                
                <p class="text-lg text-gray-700 mb-8 leading-relaxed opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    Clear, practical OSHA training designed for real workplace conditions.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <a href="<?php echo home_url('/contact'); ?>" class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 inline-block">
                        Get Started
                    </a>
                </div>
            </div>
            
            <!-- Right Column - Image -->
            <div class="relative h-[500px] lg:h-[600px] opacity-0 scale-75 animate-on-scroll" data-delay="500">
                <div class="rounded-2xl overflow-hidden shadow-2xl h-full">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/safety.webp" 
                         alt="OSHA Safety Training" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    What We Offer
                </h2>
                <p class="text-xl text-gray-700 leading-relaxed max-w-3xl mx-auto">
                    Creatblue® USA provides OSHA safety programs that help teams understand how to work safely, consistently, and confidently.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">OSHA-aligned safety training</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">First Aid, CPR/AED</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Fire safety and prevention</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Emergency response</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Hazard recognition</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Behavior-based safety fundamentals</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="900">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Annual refresher programs</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="1000">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Customized OSHA safety programs based on your facility</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8 opacity-0 translate-y-8 animate-on-scroll" data-delay="1100">
                <p class="text-lg text-gray-700 font-semibold">
                    These programs strengthen safe work habits and support stronger day-to-day performance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How We Deliver OSHA Training Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    How We Deliver OSHA Training
                </h2>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Our OSHA safety programs are built around clarity and relevance.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Real-world examples</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Practical demonstrations</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Clear, direct explanations</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Hands-on practice when appropriate</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Tailored content based on your workplace risks</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <p class="text-2xl font-bold text-primary">
                    Your team receives OSHA training that is easy to understand and even easier to apply.
                </p>
            </div>
        </div>
    </div>
</section>
</section>

<!-- Why OSHA Safety Programs Matter Section -->
<section class="py-20 bg-gradient-to-br from-[#2f3082] to-[#0f1229]">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-white uppercase tracking-wide mb-6">
                    Why OSHA Safety Programs Matter
                </h2>
                <p class="text-xl text-white/90 leading-relaxed">
                    Strong OSHA training:
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Reduces injuries</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Improves consistency</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Protects employees</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Supports OSHA compliance</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Lowers operational risk</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Helps prepare for audits and inspections</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="900">
                <p class="text-2xl font-bold text-secondary">
                    Companies choose Creatblue for OSHA programs that strengthen both safety and performance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Who We Serve Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    Who We Serve
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    We support:
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Manufacturing facilities</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Warehousing and logistics</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Industrial plants</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Commercial buildings</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Professional services</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Gyms, studios, offices, daycares, and community environments</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="900">
                <p class="text-lg text-gray-700 font-semibold">
                    Anywhere OSHA requirements apply, we support safety and capability.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- The Creatblue Difference Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide">
                    The Creatblue Difference
                </h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg opacity-0 translate-x-8 animate-on-scroll" data-delay="300">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">OSHA-aligned programs shaped by in-field experience</span>
                </div>
                
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">Warm, supportive instruction</span>
                </div>
                
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg opacity-0 translate-x-8 animate-on-scroll" data-delay="500">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">Trainers who understand real operational demands</span>
                </div>
                
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">Programs tailored to your environment</span>
                </div>
                
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg md:col-span-2 opacity-0 translate-x-8 animate-on-scroll" data-delay="700">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">Delivery onsite or in our training center</span>
                </div>
            </div>
        </div>
    </div>
</section>
</section>

<!-- Full Training and Safety Catalog Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    Full Training and Safety Catalog
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed max-w-4xl mx-auto">
                    Below is our complete list of hands-on training and OSHA safety programs available through Creatblue USA. All services can be delivered onsite at your facility or at our training center.
                </p>
            </div>
            
            <!-- Catalog Grid -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Equipment Training -->
                <div class="bg-gradient-to-b from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <h3 class="text-2xl font-bold text-primary mb-6">Equipment Training</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>Forklift (PIT) Operator Training</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>MEWP Operator Training</span>
                        </li>
                    </ul>
                </div>
                
                <!-- CPR, First Aid, and Emergency Preparedness -->
                <div class="bg-gradient-to-b from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <h3 class="text-2xl font-bold text-primary mb-6">CPR, First Aid, and Emergency Preparedness</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>CPR/AED Certification (American Red Cross)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>Pediatric CPR</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>First Aid Training</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>Bloodborne Pathogens (BBP)</span>
                        </li>
                    </ul>
                </div>
                
                <!-- OSHA and Safety Programs -->
                <div class="bg-gradient-to-b from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <h3 class="text-2xl font-bold text-primary mb-6">OSHA and Safety Programs</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>OSHA 10</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>OSHA 30</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>HAZWOPER</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>Confined Spaces</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>Lockout/Tagout</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>Arc Flash</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>Hot Works</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-secondary mr-2">•</span>
                            <span>Flagger Certification</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Need more -->
            <div class="text-center mt-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <p class="text-lg text-gray-800 font-semibold mb-2">
                    Need a program not listed here?
                </p>
                <p class="text-gray-700">
                    We can provide additional OSHA-aligned and workplace-specific training.<br>
                    Contact us to discuss your needs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Schedule a Free Consultation Section -->
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">
                Schedule a Free Consultation
            </h2>
            <p class="text-xl text-gray-700 leading-relaxed mb-8">
                Strengthen your OSHA safety program with training built for real work.
            </p>
            <a href="<?php echo home_url('/contact'); ?>" class="inline-flex items-center bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-lg shadow-lg hover:shadow-xl transform hover:scale-105">
                Schedule a Free Consultation
                <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide">
                    FAQ — OSHA Safety Programs
                </h2>
            </div>
            
            <!-- FAQ Items -->
            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Do you offer onsite OSHA training?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. We deliver OSHA programs onsite or at our facility.
                    </p>
                </div>
                
                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Are your OSHA programs customizable?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. OSHA content is tailored to your equipment, hazards, and workflow.
                    </p>
                </div>
                
                <!-- FAQ 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Do teams receive certificates?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. Documentation is provided after each session.
                    </p>
                </div>
                
                <!-- FAQ 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Do you offer group OSHA training?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. We train groups of all sizes.
                    </p>
                </div>
                
                <!-- FAQ 5 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Do you help companies prepare for OSHA inspections?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. We support both proactive preparation and post-inspection needs.
                    </p>
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
});
</script>

<style>
.animate-on-scroll {
    transition: all 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
}

.animate-on-scroll.animate-in {
    opacity: 1 !important;
}

.animate-on-scroll.animate-in:not(.particle-float) {
    transform: translateY(0) translateX(0) scale(1) !important;
}
</style>

<?php
get_footer();
