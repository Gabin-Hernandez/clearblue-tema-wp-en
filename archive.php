<?php
/**
 * Template for displaying archive pages
 * Handles: categories, tags, dates, and author archives
 * Displays dynamic hero based on archive type with breadcrumb navigation
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

<?php
// Get archive information
$archive_title = '';
$archive_description = '';
$archive_icon = '';

if (is_category()) {
    $archive_title = single_cat_title('', false);
    $archive_description = category_description();
    $archive_icon = '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>';
    $breadcrumb_type = 'Category';
} elseif (is_tag()) {
    $archive_title = single_tag_title('', false);
    $archive_description = tag_description();
    $archive_icon = '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg>';
    $breadcrumb_type = 'Tag';
} elseif (is_author()) {
    $archive_title = get_the_author();
    $archive_description = get_the_author_meta('description');
    $archive_icon = '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>';
    $breadcrumb_type = 'Author';
} elseif (is_day()) {
    $archive_title = get_the_date();
    $archive_icon = '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>';
    $breadcrumb_type = 'Daily Archives';
} elseif (is_month()) {
    $archive_title = get_the_date('F Y');
    $archive_icon = '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>';
    $breadcrumb_type = 'Monthly Archives';
} elseif (is_year()) {
    $archive_title = get_the_date('Y');
    $archive_icon = '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>';
    $breadcrumb_type = 'Yearly Archives';
} else {
    $archive_title = 'Archives';
    $archive_icon = '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>';
    $breadcrumb_type = 'Archives';
}
?>

<!-- Dynamic Hero Section -->
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
                    <li>
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="hover:text-white transition">
                            Blog
                        </a>
                    </li>
                    <li>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </li>
                    <li class="text-white font-semibold" aria-current="page">
                        <?php echo esc_html($breadcrumb_type); ?>
                    </li>
                </ol>
            </nav>
            
            <!-- Icon -->
            <div class="mb-6 text-white/80">
                <?php echo $archive_icon; ?>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6">
                <?php echo esc_html($archive_title); ?>
            </h1>
            
            <!-- Description -->
            <?php if ($archive_description) : ?>
                <div class="text-xl text-white/90 prose prose-invert max-w-none">
                    <?php echo wp_kses_post($archive_description); ?>
                </div>
            <?php endif; ?>
            
            <!-- Search Form (posts only) -->
            <div class="max-w-2xl mx-auto mt-8">
                <form role="search" method="get" class="relative" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="hidden" name="post_type" value="post">
                    <input type="search" 
                           name="s" 
                           placeholder="Search blog articles..." 
                           class="w-full px-6 py-4 pr-14 rounded-full text-lg focus:outline-none focus:ring-4 focus:ring-secondary/30 text-primary"
                           aria-label="Search the blog">
                    <button type="submit" 
                            class="absolute right-2 top-1/2 -translate-y-1/2 bg-secondary hover:bg-primary text-white p-3 rounded-full transition-colors"
                            aria-label="Search">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            
            <!-- Author specific info -->
            <?php if (is_author()) : ?>
                <div class="flex items-center gap-4 mt-8">
                    <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'rounded-2xl')); ?>
                    <div>
                        <p class="text-white/70 mb-1">Posts by this author</p>
                        <p class="text-2xl font-black text-white">
                            <?php
                            global $wp_query;
                            echo number_format_i18n($wp_query->found_posts);
                            ?> articles
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Archive Posts -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        
        <!-- Filters by Categories and Tags -->
        <div class="mb-8">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                
                <!-- Categories -->
                <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => true,
                ));
                
                $current_cat_id = is_category() ? get_queried_object_id() : 0;
                
                if (!empty($categories)) :
                ?>
                    <div class="mb-6">
                        <h3 class="text-lg font-black text-primary mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                            Filter by Category
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                               class="inline-block px-4 py-2 rounded-full font-semibold transition-colors <?php echo !is_category() && !is_tag() && !is_author() && !is_date() ? 'bg-secondary text-white' : 'bg-gray-100 text-gray-700 hover:bg-secondary hover:text-white'; ?>">
                                All
                            </a>
                            <?php foreach ($categories as $category) : ?>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                   class="inline-block px-4 py-2 rounded-full font-semibold transition-colors <?php echo $current_cat_id === $category->term_id ? 'bg-secondary text-white' : 'bg-gray-100 text-gray-700 hover:bg-secondary hover:text-white'; ?>">
                                    <?php echo esc_html($category->name); ?>
                                    <span class="text-xs opacity-60">(<?php echo $category->count; ?>)</span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Popular Tags -->
                <?php
                $tags = get_tags(array(
                    'orderby' => 'count',
                    'order'   => 'DESC',
                    'number'  => 10,
                    'hide_empty' => true,
                ));
                
                $current_tag_id = is_tag() ? get_queried_object_id() : 0;
                
                if (!empty($tags)) :
                ?>
                    <div>
                        <h3 class="text-lg font-black text-primary mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                            </svg>
                            Popular Tags
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag) : ?>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                                   class="inline-block px-3 py-1 rounded-full text-sm font-medium transition-colors <?php echo $current_tag_id === $tag->term_id ? 'bg-secondary text-white' : 'bg-gray-100 text-gray-700 hover:bg-secondary hover:text-white'; ?>">
                                    #<?php echo esc_html($tag->name); ?>
                                    <span class="text-xs opacity-60">(<?php echo $tag->count; ?>)</span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
        
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
                        esc_html__('Showing %d-%d of %d results', 'creatblue'),
                        $start,
                        $end,
                        $total
                    );
                    ?>
                </p>
            </div>

            <!-- Posts Grid -->
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
                            
                            <!-- Category badge (only show if not category archive) -->
                            <?php if (!is_category()) :
                                $categories = get_the_category();
                                if ($categories) :
                                    $category = $categories[0];
                            ?>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                   class="absolute top-4 left-4 bg-secondary text-white px-4 py-2 rounded-full text-sm font-bold hover:bg-primary transition"
                                   aria-label="View all posts in <?php echo esc_attr($category->name); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endif; endif; ?>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6">
                            
                            <!-- Meta -->
                            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date('F j, Y'); ?>
                                </time>
                                <?php if (!is_author()) : ?>
                                    <span class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <?php the_author(); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Title -->
                            <h2 class="text-2xl font-black text-primary mb-3 line-clamp-2 hover:text-secondary transition">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <!-- Excerpt -->
                            <div class="text-gray-600 mb-4 line-clamp-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
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
                <nav class="pagination-wrapper flex justify-center" role="navigation" aria-label="Archive pagination">
                    <?php echo $pagination; ?>
                </nav>
            <?php endif; ?>
            
        <?php else : ?>
            
            <!-- No posts found -->
            <div class="max-w-2xl mx-auto text-center py-16">
                <div class="mb-8">
                    <svg class="w-24 h-24 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-black text-primary mb-4">No articles found</h2>
                <p class="text-gray-600 mb-8">
                    Sorry, there are no articles in this archive yet.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                       class="inline-flex items-center justify-center gap-2 bg-secondary hover:bg-primary text-white px-8 py-4 rounded-full font-bold transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
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
            
        <?php endif; ?>
        
    </div>
</section>

<?php get_footer(); ?>
