<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * SEO Dinámico - Meta tags centralizados por página
 * Modifica el título y agrega la meta description según el template de página.
 * Utiliza los filtros de WordPress para compatibilidad con plugins de SEO.
 */
add_action( 'wp', 'creatblue_setup_seo' );
function creatblue_setup_seo() {
    // No ejecutar en el admin
    if ( is_admin() ) {
        return;
    }

    // Configuración de SEO por página
    $seo_config = array(
        'front-page' => array(
            'title' => 'Safety Training, OSHA Programs, and Workforce Support',
            'description' => 'Industrial safety training and workforce solutions that improve performance, strengthen operations, and support your team where it matters most.
'
        ),
        'page-entrenamiento' => array(
            'title' => 'Safety Training & Forklift Training | Hands-On Workforce Training | Creatblue USA',
            'description' => 'Hands-on safety training and forklift training with low trainer-to-student ratios. Practical, skills-focused workforce training built for real work environments.'
        ),
        'page-reclutamiento' => array(
            'title' => 'OSHA Safety Programs | OSHA Training & Workplace Safety | Creatblue USA',
            'description' => 'OSHA safety programs developed by in-field instructors. Practical OSHA training for safer, more capable teams.'
        ),
        'page-capacitacion' => array(
            'title' => 'Workplace Compliance Programs | OSHA & Safety Compliance | Creatblue USA',
            'description' => 'Workplace compliance programs built around real-world risks. OSHA, HAZWOPER, confined spaces, lockout/tagout, arc flash, and more.'
        ),
        'page-consultoria' => array(
            'title' => 'Safety Consulting & Workforce Consulting for Stronger, Safer Operations',
            'description' => 'Safety consulting and workforce consulting from experienced in-field experts. Site safety audits, compliance support, logistics, material handling, and more.'
        ),
        'page-originals' => array(
            'title' => 'Creatblue® Originals | Modelos propios para el desarrollo del talento humano',
            'description' => 'Impulsamos el desarrollo del talento humano con soluciones propias creadas para fortalecer personas, equipos y organizaciones.'
        ),
        'page-nosotros' => array(
            'title' => 'About Creatblue USA',
            'description' => 'Training, compliance, and workforce solutions backed by global expertise and delivered with a people-first approach.'
        ),
        'page-contacto' => array(
            'title' => 'Habla con un especialista en talento, entrenamiento, capacitación y consultoría | Creatblue® México',
            'description' => 'Contáctanos si buscas empleo o talento con soluciones de reclutamiento, capacitación, entrenamiento y consultoría empresarial. En Creatblue conectamos talento con oportunidades reales.'
        ),
    );

    // Detectar el template actual
    $template = '';
    if ( is_front_page() ) {
        $template = 'front-page';
    } elseif ( is_page_template() ) {
        $template_file = get_page_template_slug();
        $template = str_replace( '.php', '', $template_file );
    }

    // Si hay configuración SEO para este template, registrar los filtros y acciones
    if ( ! empty( $template ) && isset( $seo_config[ $template ] ) ) {
        $GLOBALS['creatblue_seo_data'] = $seo_config[ $template ];

        // Modificar el título
        add_filter( 'pre_get_document_title', 'creatblue_dynamic_title', 20 );

        // Agregar meta description
        add_action( 'wp_head', 'creatblue_dynamic_description', 1 );
    }
}

function creatblue_dynamic_title( $title ) {
    if ( isset( $GLOBALS['creatblue_seo_data']['title'] ) ) {
        return $GLOBALS['creatblue_seo_data']['title'];
    }
    return $title;
}

function creatblue_dynamic_description() {
    if ( isset( $GLOBALS['creatblue_seo_data']['description'] ) ) {
        echo '<meta name="description" content="' . esc_attr( $GLOBALS['creatblue_seo_data']['description'] ) . '">' . "\n";
    }
}

// Agregar Tailwind CSS al head
add_action( 'wp_head', 'add_tailwind_css' );
function add_tailwind_css() {
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/icons-sprite.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1c1e33',
                        secondary: '#85abff',
                    },
                    fontFamily: {
                        'sans': ['Lato', 'sans-serif'],
                    }
                },
                container: {
                    center: true,
                    screens: {
                        sm: '100%',
                        md: '100%',
                        lg: '100%',
                        xl: '1440px'
                    }
                }
            }
        }
    </script>
    <style>
        /* Anular fuentes por defecto de WordPress */
        body, 
        .wp-site-blocks,
        .editor-styles-wrapper,
        .wp-block,
        h1, h2, h3, h4, h5, h6,
        p, span, div, a {
            font-family: 'Lato', sans-serif !important;
        }
        
        /* Anular variables CSS de WordPress */
        :root {
            --wp--preset--font-family--body: 'Lato', sans-serif;
            --wp--preset--font-family--heading: 'Lato', sans-serif;
        }
        
        @layer utilities {
            .bg-gradient-radial {
                background-image: radial-gradient(var(--tw-gradient-stops));
            }
        }
    </style>
    <?php
}

// Registrar menús de navegación
add_action( 'after_setup_theme', 'creatblue_setup' );
function creatblue_setup() {
    register_nav_menus( array(
        'primary' => __( 'Menú Principal', 'creatblue' ),
        'footer' => __( 'Menú Footer', 'creatblue' ),
    ) );
    
    // Soporte para imágenes destacadas
    add_theme_support( 'post-thumbnails' );
    
    // Soporte para título del sitio
    add_theme_support( 'title-tag' );
    
    // Soporte para logo personalizado
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}

/**
 * ============================================
 * BLOG CONFIGURATION
 * ============================================
 * Configuration for blog system (home.php, single.php, archive.php, search.php)
 * Added: February 16, 2026
 */

/**
 * Configure posts per page for blog
 * Only applies to main blog page (home.php)
 * Doesn't affect other custom post types or queries
 */
add_action('pre_get_posts', 'theme_posts_per_page');
function theme_posts_per_page($query) {
    // Only modify the main query on the front-end (not in admin)
    if (!is_admin() && $query->is_main_query()) {
        // Set 7 posts per page for the blog home page
        if (is_home() && !is_front_page()) {
            $query->set('posts_per_page', 7);
        }
    }
}

/**
 * Add custom image sizes for blog
 * blog-card: Used in grid layouts (home.php, archive.php, search.php)
 * blog-hero: Used in single post hero section (single.php)
 */
add_action('after_setup_theme', 'theme_custom_image_sizes');
function theme_custom_image_sizes() {
    // Card size for blog listings (600x400, cropped)
    add_image_size('blog-card', 600, 400, true);
    
    // Hero size for single posts (1920x800, cropped)
    add_image_size('blog-hero', 1920, 800, true);
}

/**
 * Customize excerpt length to 30 words
 * Applied to all excerpts across the blog
 */
add_filter('excerpt_length', 'theme_excerpt_length', 999);
function theme_excerpt_length($length) {
    return 30;
}

/**
 * Customize excerpt "read more" string
 * Changes default [...] to ellipsis
 */
add_filter('excerpt_more', 'theme_excerpt_more');
function theme_excerpt_more($more) {
    return '...';
}

/**
 * Add custom body classes for blog pages
 * Useful for styling specific blog templates
 */
add_filter('body_class', 'theme_blog_body_classes');
function theme_blog_body_classes($classes) {
    if (is_home() && !is_front_page()) {
        $classes[] = 'blog-home';
    }
    if (is_single() && get_post_type() === 'post') {
        $classes[] = 'blog-single';
    }
    if (is_archive()) {
        $classes[] = 'blog-archive';
    }
    if (is_search()) {
        $classes[] = 'blog-search';
    }
    return $classes;
}

/**
 * END BLOG CONFIGURATION
 * ============================================
 */
?>