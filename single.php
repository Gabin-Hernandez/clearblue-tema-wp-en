<?php
/**
 * Template for displaying single blog posts
 * Includes hero, full content, author bio, related posts, and navigation
 */

get_header(); ?>

<style>
    /* Blog Content Styles */
    .blog-content {
        color: #374151;
        line-height: 1.8;
    }

    .blog-content h1, .blog-content h2, .blog-content h3,
    .blog-content h4, .blog-content h5, .blog-content h6 {
        color: #1c1e33;
        font-weight: 900;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .blog-content h2 { font-size: 2rem; }
    .blog-content h3 { font-size: 1.5rem; }
    .blog-content h4 { font-size: 1.25rem; }

    .blog-content p {
        margin-bottom: 1.5rem;
    }

    .blog-content a {
        color: #85abff;
        text-decoration: underline;
        transition: color 0.3s ease;
    }

    .blog-content a:hover {
        color: #1c1e33;
    }

    .blog-content ul, .blog-content ol {
        margin-bottom: 1.5rem;
        padding-left: 2rem;
    }

    .blog-content ul li {
        list-style-type: disc;
        margin-bottom: 0.5rem;
    }

    .blog-content ol li {
        list-style-type: decimal;
        margin-bottom: 0.5rem;
    }

    .blog-content blockquote {
        border-left: 4px solid #85abff;
        padding-left: 1.5rem;
        margin: 2rem 0;
        font-style: italic;
        color: #6b7280;
    }

    .blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 1rem;
        margin: 2rem 0;
    }

    .blog-content pre {
        background: #f3f4f6;
        padding: 1.5rem;
        border-radius: 0.5rem;
        overflow-x: auto;
        margin-bottom: 1.5rem;
    }

    .blog-content code {
        background: #f3f4f6;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
        font-family: 'Courier New', monospace;
        font-size: 0.9em;
    }

    .blog-content table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1.5rem;
    }

    .blog-content table th,
    .blog-content table td {
        border: 1px solid #e5e7eb;
        padding: 0.75rem;
        text-align: left;
    }

    .blog-content table th {
        background: #f3f4f6;
        font-weight: bold;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
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
</style>

<?php while (have_posts()) : the_post(); ?>

<!-- Hero Section with Featured Image -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden">
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('blog-hero', array(
            'class' => 'absolute inset-0 w-full h-full object-cover',
            'alt' => get_the_title()
        )); ?>
    <?php else : ?>
        <div class="absolute inset-0 bg-gradient-to-br from-primary via-[#252947] to-secondary"></div>
    <?php endif; ?>
    
    <!-- Gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
    
    <!-- Content -->
    <div class="container mx-auto px-6 h-full flex items-end pb-12 md:pb-16 relative z-10">
        <div class="max-w-4xl">
            
            <!-- Categories -->
            <?php
            $categories = get_the_category();
            if ($categories) :
            ?>
                <div class="flex flex-wrap gap-2 mb-4">
                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                           class="bg-secondary text-white px-4 py-2 rounded-full text-sm font-bold hover:bg-white hover:text-primary transition"
                           aria-label="View all posts in <?php echo esc_attr($category->name); ?>">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-white mb-6">
                <?php the_title(); ?>
            </h1>
            
            <!-- Meta -->
            <div class="flex flex-wrap items-center gap-4 md:gap-6 text-white/90">
                <!-- Author with avatar -->
                <div class="flex items-center gap-3">
                    <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('class' => 'rounded-full')); ?>
                    <div>
                        <p class="font-bold"><?php the_author(); ?></p>
                        <p class="text-sm text-white/70">Author</p>
                    </div>
                </div>
                
                <!-- Date -->
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <time datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date('F j, Y'); ?>
                    </time>
                </div>
                
                <!-- Reading time -->
                <?php
                $word_count = str_word_count(strip_tags(get_the_content()));
                $reading_time = ceil($word_count / 200); // Average reading speed: 200 words per minute
                ?>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span><?php echo $reading_time; ?> min read</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<article id="post-<?php the_ID(); ?>" <?php post_class('py-16 md:py-24'); ?>>
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            
            <!-- Post Content -->
            <div class="blog-content prose prose-lg max-w-none mb-12">
                <?php
                the_content();
                
                // Support for <!--nextpage--> pagination
                wp_link_pages(array(
                    'before' => '<nav class="page-links flex flex-wrap gap-2 mt-8 pt-8 border-t border-gray-200" aria-label="Page navigation"><span class="font-bold text-primary mr-4">Pages:</span>',
                    'after' => '</nav>',
                    'link_before' => '<span class="px-4 py-2 bg-gray-100 hover:bg-secondary hover:text-white rounded-lg font-semibold transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
            
            <!-- Tags -->
            <?php
            $tags = get_the_tags();
            if ($tags) :
            ?>
                <div class="mb-12 pb-12 border-b border-gray-200">
                    <h3 class="text-lg font-bold text-primary mb-4">Tags:</h3>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                               class="px-4 py-2 bg-gray-100 hover:bg-secondary hover:text-white text-gray-700 rounded-lg text-sm font-semibold transition"
                               aria-label="View all posts tagged with <?php echo esc_attr($tag->name); ?>">
                                #<?php echo esc_html($tag->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Author Bio Box -->
            <div class="mb-12 p-8 bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <?php echo get_avatar(get_the_author_meta('ID'), 120, '', '', array('class' => 'rounded-2xl')); ?>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-black text-primary mb-2">
                            About <?php the_author(); ?>
                        </h3>
                        <?php if (get_the_author_meta('description')) : ?>
                            <p class="text-gray-600 mb-4">
                                <?php echo wp_kses_post(get_the_author_meta('description')); ?>
                            </p>
                        <?php else : ?>
                            <p class="text-gray-600 mb-4">
                                Professional writer and contributor sharing insights and expertise.
                            </p>
                        <?php endif; ?>
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" 
                           class="inline-flex items-center gap-2 text-secondary hover:text-primary font-bold transition">
                            View all posts by <?php the_author(); ?>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Post Navigation (Previous/Next) -->
            <nav class="mb-16" aria-label="Post navigation">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    
                    <!-- Previous Post -->
                    <?php if ($prev_post) : ?>
                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" 
                           class="group p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition border-2 border-transparent hover:border-secondary">
                            <div class="flex items-center gap-3 text-gray-500 text-sm mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span>Previous post</span>
                            </div>
                            <h4 class="text-xl font-black text-primary group-hover:text-secondary transition line-clamp-2">
                                <?php echo esc_html($prev_post->post_title); ?>
                            </h4>
                        </a>
                    <?php endif; ?>
                    
                    <!-- Next Post -->
                    <?php if ($next_post) : ?>
                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" 
                           class="group p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition border-2 border-transparent hover:border-secondary text-right">
                            <div class="flex items-center justify-end gap-3 text-gray-500 text-sm mb-3">
                                <span>Next post</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-black text-primary group-hover:text-secondary transition line-clamp-2">
                                <?php echo esc_html($next_post->post_title); ?>
                            </h4>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
            
        </div>
    </div>
</article>

<!-- Related Posts Section -->
<?php
// Get related posts from the same category
$categories = get_the_category();
if ($categories) {
    $category_ids = array();
    foreach ($categories as $category) {
        $category_ids[] = $category->term_id;
    }
    
    $related_args = array(
        'category__in' => $category_ids,
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'ignore_sticky_posts' => 1,
    );
    
    $related_query = new WP_Query($related_args);
    
    if ($related_query->have_posts()) :
    ?>
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-black text-primary mb-12 text-center">
                        Related Articles
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                            
                            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition group">
                                <!-- Featured Image -->
                                <div class="relative overflow-hidden aspect-[3/2]">
                                    <a href="<?php the_permalink(); ?>" class="block h-full">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('blog-card', array(
                                                'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500',
                                                'alt' => get_the_title()
                                            )); ?>
                                        <?php else : ?>
                                            <div class="w-full h-full bg-gradient-to-br from-primary to-secondary"></div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                
                                <!-- Content -->
                                <div class="p-6">
                                    <time datetime="<?php echo get_the_date('c'); ?>" class="text-sm text-gray-500 mb-2 block">
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </time>
                                    <h3 class="text-xl font-black text-primary mb-3 line-clamp-2 group-hover:text-secondary transition">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <a href="<?php the_permalink(); ?>" 
                                       class="inline-flex items-center gap-2 text-secondary hover:text-primary font-bold transition">
                                        Read more
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                            
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
        wp_reset_postdata();
    endif;
}
?>

<!-- Comments Section -->
<?php
if (comments_open() || get_comments_number()) :
?>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <?php comments_template(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>
