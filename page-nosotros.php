<?php
/**
 * Template Name: About Us
 * Description: About Creatblue USA page
 * 
 * SEO:
 * - Title: About Us | Creatblue® USA
 * - Meta Description: Training, compliance, and workforce solutions backed by global expertise and delivered with a people-first approach.
 */

// SEO manejado dinámicamente desde functions.php
get_header();
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-4xl mx-auto mb-8">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                About Creatblue USA
            </h1>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                Training, compliance, and workforce solutions backed by global expertise and delivered with a people-first approach.
            </p>
        </div>
    </div>
</section>

<!-- Who We Are Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Text Column -->
            <div class="space-y-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide">
                    Who We Are
                </h2>
                <div class="space-y-4 text-gray-700">
                    <p class="text-lg leading-relaxed">
                        Creatblue® USA is a division of The Schnellecke Group, a German-owned company with more than 80 years of industrial, logistical, and operational expertise. Internationally, Schnellecke is recognized for world-class supply chain management across manufacturing, automotive, and industrial sectors.
                    </p>
                    <p class="text-lg leading-relaxed">
                        In the United States, we carry that heritage forward with a hands-on, human-centered approach.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Our team includes skilled trainers, experienced consultants, safety professionals, and workforce specialists who understand the realities of today's workplace—from manufacturing and logistics to commercial and community environments.
                    </p>
                    <p class="text-lg leading-relaxed">
                        We help companies strengthen their workforce through safety training, OSHA programs, compliance support, consulting, and trained personnel who integrate directly into your operation.
                    </p>
                </div>
            </div>
            
            <!-- Image Column -->
            <div class="opacity-0 scale-75 animate-on-scroll" data-delay="600">
                <div class="w-full h-[500px] rounded-2xl shadow-2xl overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/about.webp" 
                         alt="Who We Are - Creatblue USA" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Our Mission Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-8">
                Our Mission
            </h2>
            <p class="text-xl md:text-2xl text-gray-700 leading-relaxed">
                To help companies build safer, more capable teams by delivering thorough skill training, practical safety programs, and reliable workforce support rooted in real in-field experience.
            </p>
        </div>
    </div>
</section>

<!-- The Importance of Creatblue Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Image Column -->
            <div class="opacity-0 scale-75 animate-on-scroll" data-delay="400">
                <div class="w-full h-[500px] rounded-2xl shadow-2xl overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/importance.webp" 
                         alt="The Importance of Creatblue for Companies" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- Text Column -->
            <div class="space-y-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide">
                    The Importance of Creatblue for Companies
                </h2>
                
                <div class="space-y-4 text-gray-700">
                    <p class="text-lg leading-relaxed">
                        Workplaces across the U.S. face a growing demand for trained, dependable talent—and meeting that demand requires more than checking a box or handing out a certificate.
                    </p>
                    <p class="text-lg font-semibold leading-relaxed">
                        Companies need:
                    </p>
                    <ul class="space-y-3 text-lg">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Training that builds real skill</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Workforce support they can trust</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Safety programs that actually work</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Partners who understand their operation</span>
                        </li>
                    </ul>
                    <p class="text-lg font-bold text-primary pt-4">
                        That is why Creatblue USA exists.
                    </p>
                    <p class="text-lg leading-relaxed">
                        We don't just train workers.
                    </p>
                    <p class="text-lg leading-relaxed">
                        We help companies strengthen their workforce, increase safety, improve capability, and support operational performance.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- The Creatblue Promise Section -->
<section class="relative py-20 overflow-hidden">
    <!-- Background Image -->
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/back.webp" 
         alt="Background" 
         class="absolute inset-0 w-full h-full object-cover">
    
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#2f3082]/70 to-[#0f1229]/70"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
            <!-- Badge with glassmorphism effect -->
            <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-1 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <div class="px-6 py-8 md:px-14 md:py-14 text-center">
                    <p class="text-secondary uppercase tracking-[0.3em] text-sm font-black mb-6">
                        THE CREATBLUE PROMISE
                    </p>
                    <svg class="w-16 h-16 text-secondary mx-auto mb-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-light text-white leading-tight drop-shadow-2xl mb-6 italic">
                        We build safer, more capable teams through thorough skill training and dependable workforce support.
                    </h2>
                    <p class="text-white text-lg">
                        This is our commitment—to your people, your operation, and your long-term success.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-16 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-6">
                    How We Work
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Our approach is built on three principles:
                </p>
            </div>
            
            <!-- Three Principles Grid -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Principle 1 -->
                <div class="bg-gradient-to-b from-white to-secondary/10 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-secondary/20 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-2xl mb-4">
                            1
                        </div>
                        <h3 class="text-2xl font-bold text-primary mb-4">People First</h3>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Warm, clear, patient instruction that meets teams where they are.
                        </p>
                    </div>
                </div>
                
                <!-- Principle 2 -->
                <div class="bg-gradient-to-b from-white to-secondary/10 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-secondary/20 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-2xl mb-4">
                            2
                        </div>
                        <h3 class="text-2xl font-bold text-primary mb-4">Real-World Expertise</h3>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Our trainers and consultants bring decades of hands-on experience from industrial and commercial environments.
                        </p>
                    </div>
                </div>
                
                <!-- Principle 3 -->
                <div class="bg-gradient-to-b from-white to-secondary/10 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-secondary/20 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                        </div>
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold text-2xl mb-4">
                            3
                        </div>
                        <h3 class="text-2xl font-bold text-primary mb-4">Tailored to Your Operation</h3>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Training and solutions designed around your standards, equipment, workflows, and goals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Presence Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide mb-4">
                    Our Presence
                </h2>
                <p class="text-2xl font-semibold text-gray-800 mb-6">
                    Local Service. Global Strength.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
                    Creatblue® USA provides support across the Southeast with onsite training available throughout the region. Through the Schnellecke Group, we are part of an international network with a strong presence in:
                </p>
            </div>
            
            <!-- Global Presence Cards -->
            <div class="grid md:grid-cols-4 gap-6 mb-8 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <!-- Germany -->
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Germany</h3>
                </div>
                
                <!-- Mexico -->
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Mexico</h3>
                </div>
                
                <!-- Europe -->
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Europe</h3>
                </div>
                
                <!-- North America -->
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">North America</h3>
                </div>
            </div>
            
            <p class="text-center text-lg text-gray-700 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                This global foundation supports the consistent, high-quality service we deliver locally.
            </p>
        </div>
    </div>
</section>

<!-- Why Companies Trust Creatblue USA Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <!-- Title -->
            <div class="text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-primary uppercase tracking-wide">
                    Why Companies Trust Creatblue USA
                </h2>
            </div>
            
            <!-- Trust Points Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="300">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Low trainer-to-student ratios</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Hands-on training that mirrors real work</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="500">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Trainers with in-field experience</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Practical OSHA-aligned programs</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="700">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Compliance support shaped by operational realities</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="800">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Reliable workforce augmentation</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="900">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">Clear communication and responsive service</span>
                </div>
                
                <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="1000">
                    <svg class="w-6 h-6 text-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-800 text-lg">A partnership-centered approach</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schedule a Free Consultation Section -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">
                Schedule a Free Consultation
            </h2>
            <p class="text-xl text-gray-700 leading-relaxed mb-8">
                Whether you need training, compliance support, or help stabilizing your workforce, we're here to walk with you.
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
