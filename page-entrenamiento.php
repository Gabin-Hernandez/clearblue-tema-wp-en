<?php
/**
 * Template Name: Training
 * Description: Safety Training and Forklift Training Services
 * 
 * SEO:
 * - Title: Safety Training & Forklift Training | Creatblue® USA
 * - Meta Description: High-touch, skills-focused training taught by instructors with real in-field experience. Forklift training, MEWP, CPR/AED, and OSHA programs.
 */

// SEO manejado dinámicamente desde functions.php
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
                        SAFETY TRAINING
                    </span>
                </div>
                
                <!-- Main Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                    Safety Training & Forklift Training for Today's <span class="text-secondary font-black">Workforce</span>
                </h1>
                
                <p class="text-lg text-gray-700 mb-8 leading-relaxed opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    High-touch, skills-focused training taught by instructors with real in-field experience.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <button class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                        Get Started
                    </button>
                    <button class="bg-white hover:bg-gray-100 text-primary px-8 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 border-2 border-primary/20 flex items-center gap-3">
                        <svg class="w-6 h-6 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        See How It Works
                    </button>
                </div>
            </div>
            
            <!-- Right Column - Image -->
            <div class="relative h-[500px] lg:h-[600px] opacity-0 scale-75 animate-on-scroll" data-delay="500">
                <div class="rounded-2xl overflow-hidden shadow-2xl h-full">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/back_image.webp" 
                         alt="Safety Training" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    What We Offer
                </h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-4xl mx-auto mb-8">
                    Creatblue® USA delivers safety training that builds capability, confidence, and safer work habits. Our programs are designed for industrial, commercial, and community environments that rely on trained, capable people to keep operations running safely and consistently.
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="300">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Forklift training and PIT operator certification</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">MEWP operator training</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="500">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">CPR/AED & First Aid (American Red Cross certified)</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Safety training for new hires and experienced employees</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="700">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Custom workforce training designed for your equipment and standards</span>
                </div>
            </div>
            
            <div class="text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
                    Every program supports one essential goal: <span class="font-bold text-primary">a safer, more capable team that understands how to work confidently and responsibly on the job.</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Forklift Training Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            <!-- Image Column -->
            <div class="opacity-0 scale-75 animate-on-scroll" data-delay="200">
                <div class="w-full h-[500px] rounded-2xl shadow-2xl overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/back_image.webp" 
                         alt="Forklift Training" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- Text Column -->
            <div class="space-y-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide">
                    Forklift Training Built for Real Work Conditions
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Our forklift training is known for its depth, clarity, and hands-on approach. We maintain low trainer-to-student ratios, giving every operator the individual coaching needed to build real skill—not just pass a requirement.
                </p>
                <div class="space-y-3">
                    <p class="text-lg font-semibold text-gray-900">Your team trains:</p>
                    <ul class="space-y-2 text-lg text-gray-700">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>On real equipment</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>With real materials</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>In real-world scenarios</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>With trainers who understand the demands of industrial work</span>
                        </li>
                    </ul>
                </div>
                <p class="text-lg text-gray-700 leading-relaxed font-semibold">
                    This combination improves operator skill, reduces incidents, and supports stronger day-to-day performance across your workforce.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How We Deliver Safety Training Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    How We Deliver Safety Training
                </h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-8">
                    Our programs are built around a simple philosophy: <span class="font-bold">people learn best when training feels relevant, clear, and supportive.</span>
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gradient-to-b from-white to-secondary/10 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex items-center gap-4 mb-3">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Hands-on training that builds muscle memory</h3>
                    </div>
                </div>
                
                <div class="bg-gradient-to-b from-white to-secondary/10 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex items-center gap-4 mb-3">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Trainers with decades of operational and safety experience</h3>
                    </div>
                </div>
                
                <div class="bg-gradient-to-b from-white to-secondary/10 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex items-center gap-4 mb-3">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Programs tailored to your standards, equipment, and workflows</h3>
                    </div>
                </div>
                
                <div class="bg-gradient-to-b from-white to-secondary/10 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex items-center gap-4 mb-3">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Clear coaching for all learning styles</h3>
                    </div>
                </div>
                
                <div class="bg-gradient-to-b from-white to-secondary/10 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex items-center gap-4 mb-3">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Training onsite at your facility or at our dedicated training center</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <p class="text-2xl font-bold text-primary">
                    Your team leaves with real confidence, not just a card.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Safety Training Matters Section -->
<section class="py-20 bg-gradient-to-br from-[#2f3082] to-[#0f1229]">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold text-white uppercase tracking-wide mb-6">
                Why Safety Training Matters
            </h2>
            <p class="text-xl text-white/90 leading-relaxed mb-8">
                Effective safety training reduces risk, improves operational stability, and protects both people and productivity. When training is hands-on, consistent, and aligned with real work conditions, employees:
            </p>
            
            <div class="grid md:grid-cols-2 gap-6 mt-12">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="flex items-center gap-4 mb-2">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Make better decisions</h3>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="flex items-center gap-4 mb-2">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Recognize hazards sooner</h3>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="flex items-center gap-4 mb-2">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Use equipment more confidently</h3>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="flex items-center gap-4 mb-2">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Maintain higher levels of operational performance</h3>
                    </div>
                </div>
            </div>
            
            <p class="text-2xl font-bold text-secondary mt-12">
                Safety becomes a daily practice, not a one-time event.
            </p>
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
                    We support companies across:
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Manufacturing</h3>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Logistics and distribution</h3>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Warehousing</h3>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Construction</h3>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Commercial facilities</h3>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-xl p-6 text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex flex-col items-center gap-3">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Gyms, studios, offices</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="900">
                <p class="text-lg text-gray-700">
                    EHS managers, HR leaders, and operations directors rely on Creatblue for safety training that improves real outcomes.
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
                    <span class="text-gray-900 text-lg font-semibold">Low trainer-to-student ratios</span>
                </div>
                
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">Trainers with real in-field experience</span>
                </div>
                
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg opacity-0 translate-x-8 animate-on-scroll" data-delay="500">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">Programs tailored to your workplace</span>
                </div>
                
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">Warm, steady instruction that supports every learner</span>
                </div>
                
                <div class="flex items-center gap-4 bg-white rounded-xl p-6 shadow-lg md:col-span-2 opacity-0 translate-x-8 animate-on-scroll" data-delay="700">
                    <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-900 text-lg font-semibold">High skill development—not just certification</span>
                </div>
            </div>
        </div>
    </div>
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

<!-- FAQs Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide">
                    Frequently Asked Questions
                </h2>
            </div>
            
            <!-- FAQ Items -->
            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        What makes your forklift training different from other providers?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        We maintain Low trainer-to-student ratios, teach on real equipment, and use instructors with real operational experience — not classroom-only backgrounds. The result is stronger operator capability and safer daily performance.
                    </p>
                </div>
                
                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Do you offer onsite training?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. We can train onsite at your facility or at our dedicated Creatblue training center.
                    </p>
                </div>
                
                <!-- FAQ 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Can you customize training for our equipment and workflow?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Absolutely. We specialize in custom workplace training — including plant-specific hazards, equipment, material flow, and operational needs.
                    </p>
                </div>
                
                <!-- FAQ 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        How long does forklift or PIT training take?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Most programs can be completed in a single day. Refresher training is also available.
                    </p>
                </div>
                
                <!-- FAQ 5 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Do participants receive certification?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. Operators who meet all requirements receive recognized certification, along with coaching focused on real skill development.
                    </p>
                </div>
                
                <!-- FAQ 6 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Do you train small groups or large groups?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Both — but our approach is always low ratio, high coaching, regardless of group size.
                    </p>
                </div>
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
                Ready to strengthen your team?
            </p>
            <a href="#" class="inline-flex items-center bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-lg shadow-lg hover:shadow-xl transform hover:scale-105">
                Schedule a Free Consultation
                <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
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
