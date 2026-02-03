<?php
/**
 * Template Name: Contact
 * Description: Creatblue Mexico Contact Page
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative min-h-[60vh] bg-gradient-to-br from-gray-50 to-gray-100 pt-32 pb-20 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Columna izquierda - Contenido de texto -->
            <div class="max-w-xl">
                <!-- Badge -->
                <div class="inline-block mb-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="100">
                    <span class="bg-secondary text-white text-xs font-bold px-4 py-2 rounded-full uppercase tracking-wider">
                    Contact
                    </span>
                </div>
                
                <!-- Main Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                    Let's talk about the future of your <span class="text-secondary font-black">talent</span>
                </h1>
                
                <!-- Description -->
                <p class="text-gray-600 text-lg leading-relaxed opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    At Creatblue® Mexico, we work with people and companies to build stronger, more productive, and better-prepared teams through recruitment, training, coaching, and consulting.
                </p>
            </div>
            
            <!-- Right Column - Single Image -->
            <div class="rounded-3xl overflow-hidden shadow-2xl opacity-0 scale-95 animate-on-scroll" data-delay="400">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/back_image.webp" 
                     alt="Contact Creatblue Mexico" 
                     class="w-full h-auto object-cover">
            </div>
            
        </div>
    </div>
</section>

<!-- How Can We Help You Today Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Section Title -->
        <div class="mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                How can we help you today?
            </h2>
            <p class="text-gray-600 text-lg">
                Tell us what you're looking for, and we'll guide you to the best solution.
            </p>
        </div>
        
        <!-- Grid de 2 tarjetas -->
        <div class="grid md:grid-cols-2 gap-8">
            
            <!-- Card 1: Professional Profile -->
            <div class="border-2 border-gray-200 rounded-3xl p-8 md:p-10 hover:border-secondary/50 hover:shadow-lg transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                    I want to develop my professional profile
                </h3>
                <p class="text-gray-600 text-base mb-8">
                    If you're looking for new job opportunities, here you can discover our variety of positions, from operational to executive roles.
                </p>
                <a href="<?php echo esc_url(home_url('/vacantes')); ?>" class="inline-block bg-secondary hover:bg-secondary/80 text-white px-8 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                    Discover Your New Job
                </a>
            </div>
            
            <!-- Card 2: Organization Solutions -->
            <div class="border-2 border-gray-200 rounded-3xl p-8 md:p-10 hover:border-secondary/50 hover:shadow-lg transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                    I'm looking for solutions for my organization
                </h3>
                <p class="text-gray-600 text-base mb-8">
                    We help companies attract talent, strengthen teams, and improve operations with customized strategic solutions.
                </p>
                <a href="<?php echo esc_url(home_url('/cotizar')); ?>" class="inline-block bg-primary hover:bg-primary/80 text-white px-8 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                    Tell Us More
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- Contact Form and WhatsApp -->
<section class="bg-white py-20">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-3 gap-12">

            <!-- Form Column -->
            <div class="lg:col-span-2">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tell us about your needs</h2>
                
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="nombre" class="sr-only">First Name</label>
                            <input type="text" name="nombre" id="nombre" placeholder="First Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary">
                        </div>
                        <div>
                            <label for="apellido" class="sr-only">Last Name</label>
                            <input type="text" name="apellido" id="apellido" placeholder="Last Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary">
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="correo" class="sr-only">Business Email</label>
                            <input type="email" name="correo" id="correo" placeholder="Business Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary">
                        </div>
                        <div>
                            <label for="empresa" class="sr-only">Company</label>
                            <input type="text" name="empresa" id="empresa" placeholder="Company" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary">
                        </div>
                    </div>
                    <div>
                        <label for="estado" class="sr-only">State</label>
                        <input type="text" name="estado" id="estado" placeholder="State" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary">
                    </div>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="codigo-postal" class="sr-only">Zip Code</label>
                            <input type="text" name="codigo-postal" id="codigo-postal" placeholder="Zip Code" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary">
                        </div>
                        <div>
                            <label for="telefono" class="sr-only">Phone</label>
                            <input type="tel" name="telefono" id="telefono" placeholder="Phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary">
                        </div>
                    </div>
                    <div>
                        <label for="solucion" class="sr-only">What solution are you interested in or need</label>
                        <input type="text" name="solucion" id="solucion" placeholder="What solution are you interested in or need" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary">
                    </div>
                    <div>
                        <label for="detalles" class="sr-only">Tell us more about the details to consider in the quote</label>
                        <textarea name="detalles" id="detalles" rows="4" placeholder="Tell us more about the details to consider in the quote" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-secondary focus:border-secondary"></textarea>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <input id="consentimiento" name="consentimiento" type="checkbox" class="h-4 w-4 text-secondary border-gray-300 rounded focus:ring-secondary mt-1">
                            <div class="ml-3 text-sm">
                                <label for="consentimiento" class="text-gray-600">I give my consent and accept the <a href="#" class="font-bold text-gray-800 hover:underline">COOKIE POLICIES, PRIVACY NOTICE, TERMS AND CONDITIONS</a></label>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <input id="marketing" name="marketing" type="checkbox" class="h-4 w-4 text-secondary border-gray-300 rounded focus:ring-secondary mt-1">
                            <div class="ml-3 text-sm">
                                <label for="marketing" class="text-gray-600">Keep me informed about news, events, promotions, and marketing activities from Creatblue® Mexico.</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full sm:w-auto bg-primary text-white px-8 py-3 rounded-lg font-bold hover:bg-primary/80 transition-colors">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

            <!-- WhatsApp Column -->
            <div class="lg:col-span-1">
                <div class="bg-gray-50 border-2 border-green-500 rounded-2xl p-8 text-center sticky top-28">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Prefer a direct conversation?</h3>
                    <p class="text-gray-600 mb-6">Our team is available via WhatsApp Business to assist you quickly.</p>
                    <a href="https://wa.me/5215512345678" target="_blank" class="inline-block bg-green-500 text-white px-10 py-4 rounded-lg font-bold hover:bg-green-600 transition-colors">
                        Contact us on WhatsApp
                    </a>
                </div>
                <p class="text-gray-600 mt-6 text-center lg:text-left">We believe in well-prepared talent and organizations that invest in continuous development. Let's talk!</p>
            </div>

        </div>
    </div>
</section>



<!-- Script para animaciones -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer para las animaciones de scroll
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.dataset.delay || 0;
                setTimeout(() => {
                    entry.target.classList.remove('opacity-0', 'translate-y-8', 'scale-95');
                    entry.target.classList.add('opacity-100', 'translate-y-0', 'scale-100');
                }, delay);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observar todos los elementos con la clase animate-on-scroll
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        el.classList.add('transition-all', 'duration-700', 'ease-out');
        observer.observe(el);
    });
});
</script>

<?php get_footer(); ?>
