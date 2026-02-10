<?php
/**
 * Template Name: Consulting
 * Description: Safety Consulting & Workforce Consulting Services
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
                        CONSULTING SERVICES
                    </span>
                </div>
                
                <!-- Main Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                    Safety Consulting & Workforce Consulting for <span class="text-secondary font-black">Stronger, Safer Operations</span>
                </h1>
                
                <p class="text-lg text-gray-700 mb-8 leading-relaxed opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    Practical, personalized guidance backed by real operational experience.
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/consulting.webp" 
                         alt="Safety Consulting Services" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección de Estadísticas y Gestión -->
<!-- Section: What We Offer -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    What We Offer
                </h2>
                <p class="text-xl text-gray-700 leading-relaxed max-w-3xl mx-auto">
                    Creatblue® USA provides safety consulting and workforce consulting services that help companies strengthen safety, reinforce compliance, and improve workforce capability.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Site Safety Reviews</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Compliance Evaluations</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">HAZMAT Guidance</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Active Shooter Preparedness</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Workforce Capability Assessments</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Logistics & Material Handling Consulting</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="900">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">New Initiative Support</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="1000">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Corrective Action Planning</h3>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="1100">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <h3 class="text-lg font-bold text-gray-900">Training Program Development</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8 opacity-0 translate-y-8 animate-on-scroll" data-delay="1200">
                <p class="text-lg text-gray-700 font-semibold">
                    Our consultants work directly with your team to address real challenges with practical, actionable solutions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section: How We Work -->
<section class="relative py-20 overflow-hidden">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/back2.webp" 
         alt="Background" 
         class="absolute inset-0 w-full h-full object-cover">
    
    <div class="absolute inset-0 bg-gradient-to-br from-[#2f3082]/80 to-[#0f1229]/80"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">How We Work</h2>
                <p class="text-white/90 text-lg max-w-3xl mx-auto">
                    We don't just give advice—we partner with you to create lasting improvements.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">1</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Discovery & Assessment</h3>
                            <p class="text-white/80">We learn your operation, your people, and your priorities.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">2</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Collaborative Planning</h3>
                            <p class="text-white/80">We develop a strategy together, built around your goals and your team.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">3</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Implementation Support</h3>
                            <p class="text-white/80">We guide you through changes with hands-on assistance and real-time coaching.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Progress Review & Adjustment</h3>
                            <p class="text-white/80">We check what's working, adjust what's not, and keep momentum going.</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">5</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Ongoing Partnership (Optional)</h3>
                            <p class="text-white/80">We're available for follow-up support, audits, refreshers, or expansion into new areas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Section: Why Consulting Matters -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    Why Consulting Matters
                </h2>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Investing in expert guidance pays off—in stronger teams, fewer incidents, and greater operational confidence.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Improved Safety Performance</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Stronger Workforce Capability</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Greater Operational Consistency</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Compliance Readiness</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Proactive Risk Management</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Increased Employee Confidence</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="900">
                    <div class="flex flex-col items-center text-center gap-4">
                        <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-gray-900">Leadership Alignment & Accountability</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="1000">
                <p class="text-2xl font-bold text-primary">
                    Companies choose Creatblue for consulting services that strengthen both safety and performance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section: Who We Serve -->
<section class="py-20 bg-gradient-to-br from-[#2f3082] to-[#0f1229]">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-white uppercase tracking-wide mb-6">
                    Who We Serve
                </h2>
                <p class="text-xl text-white/90 leading-relaxed">
                    We work with companies across industries:
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Industrial Manufacturers</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Warehousing & Logistics</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Commercial Facilities</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Construction & Contractors</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Community Organizations</h3>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Companies Preparing for Audits, Expansions, or Change</h3>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="900">
                <p class="text-2xl font-bold text-secondary">
                    Anywhere safety and workforce development matter, we support excellence.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section: The Creatblue Difference -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">The Creatblue® Difference</h2>
            <p class="text-gray-600 text-lg">
                We combine technical knowledge with a people-first approach that respects your team and your goals.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Real In-Field Expertise</h3>
                        <p class="text-gray-600">Our consultants have actually done the work—not just studied it.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Warm, Supportive Guidance</h3>
                        <p class="text-gray-600">We don't shame or judge—we help you improve from where you are.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Practical, Doable Recommendations</h3>
                        <p class="text-gray-600">Solutions fit your resources, timeline, and culture—no ivory tower advice.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">People-First Approach</h3>
                        <p class="text-gray-600">We care about your workforce—not just your compliance checklist.</p>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Deep Collaboration</h3>
                        <p class="text-gray-600">We work with you, not around you. Your input drives the plan, and your team owns the outcome.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Schedule a Free Consultation -->
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">
                Schedule a Free Consultation
            </h2>
            <p class="text-xl text-gray-700 leading-relaxed mb-8">
                Strengthen your workforce and your operation with expert consulting that's grounded in real experience and delivered with real respect.
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

<!-- Section: FAQ -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide">
                    FAQ — Safety Consulting & Workforce Consulting
                </h2>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        What's included in a typical consulting engagement?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Every project is customized, but most include an initial assessment, a collaborative planning session, implementation guidance, and follow-up review. We tailor the scope and timeline to your needs and budget.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Can we work with you before an upcoming audit or inspection?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Absolutely. Many clients engage us to strengthen their readiness before audits, inspections, or expansions. We help identify gaps, organize documentation, and improve processes so you can approach the audit with confidence.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="500">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        We recently had a safety incident. Can you help us respond?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. We provide post-incident support, including root cause analysis, corrective action planning, and training to prevent recurrence. Our goal is to help you learn, improve, and move forward safely.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Do you work with our existing staff, or bring in outside people?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        We work with your team. Our approach is collaborative—we partner with your supervisors, managers, and employees to build solutions that fit your culture and operation. We don't take over; we empower.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="700">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Can consulting be customized for our specific industry?
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yes. We adapt our approach to your industry, workforce, and regulatory environment. Whether you're in manufacturing, construction, logistics, or community services, we tailor recommendations to your reality.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for scroll animations
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
    /* We don't apply transform here to avoid conflicts with parallax */
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
