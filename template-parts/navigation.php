<!-- Header/Nav fixed con efecto glassmorphism -->
<header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md border-b border-white/10 shadow-lg bg-primary/80" id="main-header">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo_light.png" 
                             alt="<?php bloginfo('name'); ?>" 
                             class="h-16" 
                             onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                        <span class="text-white font-bold text-xl" style="display:none;">
                            <?php bloginfo('name'); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            <!-- Menú Central y botón móvil -->
            <div class="flex items-center space-x-8">
                <!-- Menú Central -->
                <div class="hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'items_wrap' => '%3$s',
                    'fallback_cb' => function() {
                        ?>
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="text-white hover:text-secondary transition">About Us</a>
                        
                        <!-- Dropdown: Services -->
                        <div class="relative dropdown-container">
                            <button class="text-white hover:text-secondary transition flex items-center gap-1 dropdown-toggle">
                                Services
                                <svg class="w-4 h-4 transition-transform dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="dropdown-menu absolute top-full left-0 right-0 mt-2 w-screen bg-white rounded-lg shadow-2xl opacity-0 invisible transition-all duration-200 transform translate-y-2">
                                <div class="container mx-auto px-6 py-10">
                                    <div class="grid grid-cols-4 gap-8">
                                        <a href="<?php echo esc_url(home_url('/training')); ?>" class="flex flex-col items-center gap-4 p-6 text-gray-800 hover:bg-secondary hover:text-white transition rounded-xl group">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/training.webp" alt="Training" class="w-full h-48 object-cover rounded-lg shadow-lg group-hover:scale-105 transition-transform">
                                            <span class="font-bold text-xl text-center">Training</span>
                                        </a>
                                        <a href="<?php echo esc_url(home_url('/safety')); ?>" class="flex flex-col items-center gap-4 p-6 text-gray-800 hover:bg-secondary hover:text-white transition rounded-xl group">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/safety.webp" alt="Safety" class="w-full h-48 object-cover rounded-lg shadow-lg group-hover:scale-105 transition-transform">
                                            <span class="font-bold text-xl text-center">Safety</span>
                                        </a>
                                        <a href="<?php echo esc_url(home_url('/compliance')); ?>" class="flex flex-col items-center gap-4 p-6 text-gray-800 hover:bg-secondary hover:text-white transition rounded-xl group">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/compliance.webp" alt="Compliance" class="w-full h-48 object-cover rounded-lg shadow-lg group-hover:scale-105 transition-transform">
                                            <span class="font-bold text-xl text-center">Compliance</span>
                                        </a>
                                        <a href="<?php echo esc_url(home_url('/consulting')); ?>" class="flex flex-col items-center gap-4 p-6 text-gray-800 hover:bg-secondary hover:text-white transition rounded-xl group">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/consulting.webp" alt="Consulting" class="w-full h-48 object-cover rounded-lg shadow-lg group-hover:scale-105 transition-transform">
                                            <span class="font-bold text-xl text-center">Consulting</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php /* <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="text-white hover:text-secondary transition">Blog</a> */ ?>
                        <?php /* <a href="#" class="text-white hover:text-secondary transition">Path to Talent</a> */ ?>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-white hover:text-secondary transition">Contact</a>
                        <?php
                    },
                    'link_before' => '<span class="text-white hover:text-secondary transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
            
            <!-- Menú móvil toggle  --> 
            <button id="mobile-menu-toggle" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            </div> 
        </div>
        
        <!-- Menú móvil -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'space-y-3',
                'fallback_cb' => function() {
                    ?>
                    <div class="space-y-3">
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="block text-white hover:text-secondary transition py-2">About Us</a>
                        
                        <!-- Dropdown móvil: Services -->
                        <div class="mobile-dropdown">
                            <button class="w-full flex items-center justify-between text-white hover:text-secondary transition py-2 mobile-dropdown-toggle">
                                Services
                                <svg class="w-4 h-4 transition-transform mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="mobile-dropdown-menu hidden pl-2 pt-2 space-y-2">
                                <a href="<?php echo esc_url(home_url('/training')); ?>" class="flex items-center gap-3 text-white/80 hover:text-secondary transition py-2 px-2 rounded hover:bg-white/10">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/training.webp" alt="Training" class="w-12 h-12 object-cover rounded">
                                    <span>Training</span>
                                </a>
                                <a href="<?php echo esc_url(home_url('/safety')); ?>" class="flex items-center gap-3 text-white/80 hover:text-secondary transition py-2 px-2 rounded hover:bg-white/10">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/safety.webp" alt="Safety" class="w-12 h-12 object-cover rounded">
                                    <span>Safety</span>
                                </a>
                                <a href="<?php echo esc_url(home_url('/compliance')); ?>" class="flex items-center gap-3 text-white/80 hover:text-secondary transition py-2 px-2 rounded hover:bg-white/10">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/compliance.webp" alt="Compliance" class="w-12 h-12 object-cover rounded">
                                    <span>Compliance</span>
                                </a>
                                <a href="<?php echo esc_url(home_url('/consulting')); ?>" class="flex items-center gap-3 text-white/80 hover:text-secondary transition py-2 px-2 rounded hover:bg-white/10">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/consulting.webp" alt="Consulting" class="w-12 h-12 object-cover rounded">
                                    <span>Consulting</span>
                                </a>
                            </div>
                        </div>
                        
                        <?php /* <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="block text-white hover:text-secondary transition py-2">Blog</a> */ ?>
                        <?php /* <a href="#" class="block text-white hover:text-secondary transition py-2">Path to Talent</a> */ ?>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-white hover:text-secondary transition py-2">Contact</a>
                    </div>
                    <?php
                },
                'link_before' => '<span class="block text-white hover:text-secondary transition py-2">',
                'link_after' => '</span>',
            ));
            ?>
        </div>
    </nav>
</header>

<script>
// Toggle menú móvil
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    
    if (toggle && menu) {
        toggle.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    }
    
    // Dropdown Desktop
    const dropdownContainers = document.querySelectorAll('.dropdown-container');
    
    dropdownContainers.forEach(container => {
        const toggle = container.querySelector('.dropdown-toggle');
        const menu = container.querySelector('.dropdown-menu');
        const arrow = container.querySelector('.dropdown-arrow');
        
        // Hover para mostrar/ocultar
        container.addEventListener('mouseenter', function() {
            menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
            menu.classList.add('opacity-100', 'visible', 'translate-y-0');
            arrow.style.transform = 'rotate(180deg)';
        });
        
        container.addEventListener('mouseleave', function() {
            menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
            menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
            arrow.style.transform = 'rotate(0deg)';
        });
        
        // Click también funciona
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const isVisible = menu.classList.contains('opacity-100');
            
            if (isVisible) {
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                arrow.style.transform = 'rotate(0deg)';
            } else {
                menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.add('opacity-100', 'visible', 'translate-y-0');
                arrow.style.transform = 'rotate(180deg)';
            }
        });
    });
    
    // Dropdown Móvil
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
    
    mobileDropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.mobile-dropdown-toggle');
        const menu = dropdown.querySelector('.mobile-dropdown-menu');
        const arrow = dropdown.querySelector('.mobile-dropdown-arrow');
        
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const isHidden = menu.classList.contains('hidden');
            
            if (isHidden) {
                menu.classList.remove('hidden');
                arrow.style.transform = 'rotate(180deg)';
            } else {
                menu.classList.add('hidden');
                arrow.style.transform = 'rotate(0deg)';
            }
        });
    });
    
    // Cerrar dropdown al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown-container')) {
            dropdownContainers.forEach(container => {
                const menu = container.querySelector('.dropdown-menu');
                const arrow = container.querySelector('.dropdown-arrow');
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                arrow.style.transform = 'rotate(0deg)';
            });
        }
    });
});
</script>
