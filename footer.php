<!-- Footer -->
<footer class="bg-gray-100 py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8">
            <!-- Columna 1 -->
            <div>
                <h4 class="font-black text-secondary mb-4">Acerca de nosotros</h4>
                <ul class="space-y-2">
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="text-gray-600 hover:text-secondary transition">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-gray-600 hover:text-secondary transition">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-gray-600 hover:text-secondary transition">Contact</a></li>
                </ul>
            </div>
            
            <!-- Columna 2 -->
            <div>
                <h4 class="font-black text-secondary mb-4">Services</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'space-y-2',
                    'fallback_cb' => function() {
                        ?>
                        <ul class="space-y-2">
                            <li><a href="<?php echo esc_url(home_url('/training')); ?>" class="text-gray-600 hover:text-secondary transition">Training</a></li>
                            <li><a href="<?php echo esc_url(home_url('/safety')); ?>" class="text-gray-600 hover:text-secondary transition">Safety</a></li>
                            <li><a href="<?php echo esc_url(home_url('/compliance')); ?>" class="text-gray-600 hover:text-secondary transition">Compliance</a></li>
                            <li><a href="<?php echo esc_url(home_url('/consulting')); ?>" class="text-gray-600 hover:text-secondary transition">Consulting</a></li>
                        </ul>
                        <?php
                    },
                    'link_before' => '<span class="text-gray-600 hover:text-secondary transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
            
            <!-- Columna 3 -->
            <div>
                <h4 class="font-black text-secondary mb-4">Sales</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="mailto:hello.cb@creatblue.com" class="text-gray-600 hover:text-secondary transition">
                            hello.cb@creatblue.com
                        </a>
                    </li>
                    <li>
                        <a href="tel:+14238004483" class="text-gray-600 hover:text-secondary transition">
                           423 800 4483
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
        
        <!-- Redes sociales y logo -->
        <div class="border-t border-gray-300 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo_dark.png" 
                             alt="<?php bloginfo('name'); ?>" 
                             class="h-8" 
                             onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                        <span class="text-gray-800 font-bold text-xl" style="display:none;">
                            <?php bloginfo('name'); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/creatblue-united-states" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-secondary transition" aria-label="LinkedIn">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
                
                <!-- Facebook -->
                <a href="https://www.facebook.com/creatblueusa" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-secondary transition" aria-label="Facebook">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <div class="text-center mt-8 text-gray-500 text-sm">
            <p class="font-black text-primary">Creatblue US</p>
            <?php 
            /*
            <p>&copy; <?php echo date('Y'); ?> XX XXXX XX, XXXXX.</p>
            <p class="mt-3">
                <a href="<?php echo esc_url(home_url('/politica-de-cookies')); ?>" class="hover:text-secondary transition">Cookie Policy</a>
                <span class="mx-2">|</span>
                <a href="<?php echo esc_url(home_url('/aviso-de-privacidad')); ?>" class="hover:text-secondary transition">Privacy Notice</a>
                <span class="mx-2">|</span>
                <a href="<?php echo esc_url(home_url('/terminos-y-condiciones')); ?>" class="hover:text-secondary transition">Terms and Conditions</a>
            </p>
            */
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
