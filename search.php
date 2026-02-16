<?php
/**
 * Template for displaying search results
 * Includes highlighting, empty state, and popular categories
 */

get_header(); ?>

<style>
    /* Pagination Styles */
    .pagination-wrapper .page-numbers {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin: 0 0.25rem;
    }

    .pagination-wrapper a.page-numbers,
    .pagination-wrapper span.page-numbers {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 2.5rem;
        height: 2.5rem;
        padding: 0.5rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .pagination-wrapper a.page-numbers {
        background: white;
        color: #1c1e33;
        border: 2px solid #e5e7eb;
    }

    .pagination-wrapper a.page-numbers:hover {
        background: #85abff;
        color: white;
        border-color: #85abff;
        transform: translateY(-2px);
        box-shadow: 0 4px 6px -1px rgba(133, 171, 255, 0.3);
    }

    .pagination-wrapper span.current {
        background: #85abff;
        color: white;
        border: 2px solid #85abff;
    }

    .pagination-wrapper .prev,
    .pagination-wrapper .next {
        min-width: auto;
        padding: 0.5rem 1rem;
    }

    .pagination-wrapper .dots {
        border: none;
        background: transparent;
        color: #9ca3af;
    }

    /* Utility Classes */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    /* Highlight search terms */
    mark {
        background-color: #fef08a;
        color: #1c1e33;
        padding: 0.125rem 0.25rem;
        border-radius: 0.25rem;
        font-weight: 600;
    }

    /* Card hover effects */
    .blog-card {
        transition: all 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-8px);
    }

    .blog-card img {
        transition: transform 0.5s ease;
    }

    .blog-card:hover img {
        transform: scale(1.1);
    }

    .read-more-arrow {
        transition: transform 0.3s ease;
    }

    .blog-card:hover .read-more-arrow {
        transform: translateX(4px);
    }
</style>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary via-[#252947] to-secondary py-16 md:py-24 overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-72 h-72 bg-secondary rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-white rounded-full filter blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
            
            <!-- Breadcrumb -->
            <nav class="mb-6" aria-label="Breadcrumb">
                <ol class="flex flex-wrap items-center gap-2 text-white/70">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition">
                            Home
                        </a>
                    </li>
                    <li>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </li>
                    <li class="text-white font-semibold" aria-current="page">
                        Search Results
                    </li>
                </ol>
            </nav>
            
            <!-- Icon -->
            <div class="mb-6 text-white/80">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6">
                Search Results
            </h1>
            
            <?php if (get_search_query()) : ?>
                <p class="text-xl md:text-2xl text-white/90 mb-8">
                    Results for: "<mark class="bg-white/20 text-white px-2 py-1 rounded"><?php echo esc_html(get_search_query()); ?></mark>"
                </p>
            <?php endif; ?>
            
            <!-- Refined search form -->
            <div class="max-w-2xl">
                <form role="search" method="get" class="relative" action="<?php echo esc_url(home_url('/')); ?>">
                    <label for="search-input" class="sr-only">Search again</label>
                    <input 
                        type="search" 
                        id="search-input"
                        name="s" 
                        placeholder="Refine your search..." 
                        class="w-full px-6 py-4 pr-32 rounded-full text-gray-800 focus:outline-none focus:ring-4 focus:ring-secondary/50 transition"
                        value="<?php echo get_search_query(); ?>"
                    >
                    <button 
                        type="submit" 
                        class="absolute right-2 top-1/2 -translate-y-1/2 bg-secondary hover:bg-primary text-white px-8 py-3 rounded-full font-bold transition"
                        aria-label="Search"
                    >
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Search Results -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        
        <?php if (have_posts()) : ?>
            
            <!-- Result counter -->
            <div class="mb-8">
                <p class="text-gray-600 text-lg">
                    <?php
                    global $wp_query;
                    $total = $wp_query->found_posts;
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $posts_per_page = get_query_var('posts_per_page');
                    $start = ($paged - 1) * $posts_per_page + 1;
                    $end = min($paged * $posts_per_page, $total);
                    
                    printf(
                        esc_html__('Found %d results (showing %d-%d)', 'creatblue'),
                        $total,
                        $start,
                        $end
                    );
                    ?>
                </p>
            </div>

            <!-- Results Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card bg-white rounded-2xl shadow-lg overflow-hidden'); ?>>
                        
                        <!-- Featured Image -->
                        <div class="relative overflow-hidden aspect-[3/2]">
                            <a href="<?php the_permalink(); ?>" class="block h-full" aria-label="<?php echo esc_attr(get_the_title()); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('blog-card', array(
                                        'class' => 'w-full h-full object-cover',
                                        'alt' => get_the_title()
                                    )); ?>
                                <?php else : ?>
                                    <!-- Placeholder image -->
                                    <div class="w-full h-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                        <svg class="w-24 h-24 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                            </a>
                            
                            <!-- Category badge -->
                            <?php
                            $categories = get_the_category();
                            if ($categories) :
                                $category = $categories[0];
                            ?>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                   class="absolute top-4 left-4 bg-secondary text-white px-4 py-2 rounded-full text-sm font-bold hover:bg-primary transition"
                                   aria-label="View all posts in <?php echo esc_attr($category->name); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6">
                            
                            <!-- Meta -->
                            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date('F j, Y'); ?>
                                </time>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <?php the_author(); ?>
                                </span>
                            </div>
                            
                            <!-- Title with highlighted search terms -->
                            <h2 class="text-2xl font-black text-primary mb-3 line-clamp-2 hover:text-secondary transition">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    $title = get_the_title();
                                    $search_query = get_search_query();
                                    if ($search_query) {
                                        $title = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<mark>$1</mark>', $title);
                                    }
                                    echo $title;
                                    ?>
                                </a>
                            </h2>
                            
                            <!-- Excerpt with highlighted search terms -->
                            <div class="text-gray-600 mb-4 line-clamp-3">
                                <?php
                                $excerpt = wp_trim_words(get_the_excerpt(), 30, '...');
                                if ($search_query) {
                                    $excerpt = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<mark>$1</mark>', $excerpt);
                                }
                                echo $excerpt;
                                ?>
                            </div>
                            
                            <!-- Read more button -->
                            <a href="<?php the_permalink(); ?>" 
                               class="inline-flex items-center gap-2 text-secondary hover:text-primary font-bold transition group"
                               aria-label="Read more about <?php echo esc_attr(get_the_title()); ?>">
                                Read more
                                <svg class="w-5 h-5 read-more-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                    
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <?php
            $pagination = paginate_links(array(
                'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Previous',
                'next_text' => 'Next <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                'type' => 'list',
                'before_page_number' => '<span class="sr-only">Page </span>',
            ));
            
            if ($pagination) :
            ?>
                <nav class="pagination-wrapper flex justify-center" role="navigation" aria-label="Search results pagination">
                    <?php echo $pagination; ?>
                </nav>
            <?php endif; ?>
            
        <?php else : ?>
            
            <!-- No results found -->
            <div class="max-w-3xl mx-auto">
                
                <!-- Empty state -->
                <div class="text-center py-16 bg-white rounded-2xl shadow-lg mb-12">
                    <div class="mb-8">
                        <svg class="w-24 h-24 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-black text-primary mb-4">No results found</h2>
                    <p class="text-gray-600 mb-8 text-lg">
                        We couldn't find any posts matching "<strong><?php echo esc_html(get_search_query()); ?></strong>"
                    </p>
                    
                    <!-- Suggestions -->
                    <div class="max-w-xl mx-auto text-left bg-gray-50 p-6 rounded-xl mb-8">
                        <h3 class="font-bold text-primary mb-3">Search suggestions:</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Check your spelling or try different keywords</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Try more general terms</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Browse popular categories below</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Action buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                           class="inline-flex items-center justify-center gap-2 bg-secondary hover:bg-primary text-white px-8 py-4 rounded-full font-bold transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            View all posts
                        </a>
                        <a href="<?php echo esc_url(home_url('/')); ?>" 
                           class="inline-flex items-center justify-center gap-2 bg-gray-200 hover:bg-gray-300 text-primary px-8 py-4 rounded-full font-bold transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Back to home
                        </a>
                    </div>
                </div>
                
                <!-- Popular Categories -->
                <?php
                $categories = get_categories(array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'number' => 6,
                    'hide_empty' => true,
                ));
                
                if ($categories) :
                ?>
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-black text-primary mb-6 text-center">
                            Browse Popular Categories
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <?php foreach ($categories as $category) : ?>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                   class="group p-4 bg-gray-50 hover:bg-secondary rounded-xl transition text-center">
                                    <h4 class="font-bold text-primary group-hover:text-white mb-1 transition">
                                        <?php echo esc_html($category->name); ?>
                                    </h4>
                                    <p class="text-sm text-gray-500 group-hover:text-white/80 transition">
                                        <?php echo number_format_i18n($category->count); ?> 
                                        <?php echo _n('article', 'articles', $category->count, 'creatblue'); ?>
                                    </p>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
            
        <?php endif; ?>
        
    </div>
</section>

<?php get_footer(); ?>
