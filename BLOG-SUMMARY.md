# 🔧 Blog System Technical Summary

Technical documentation for developers explaining implementation details, best practices, and WordPress template hierarchy.

**Created:** February 16, 2026  
**Author:** GitHub Copilot  
**Theme:** Clearblue Child Theme

---

## 📖 Table of Contents

1. [WordPress Template Hierarchy](#wordpress-template-hierarchy)
2. [How WordPress Resolves Templates](#how-wordpress-resolves-templates)
3. [Implementation Architecture](#implementation-architecture)
4. [The WordPress Loop](#the-wordpress-loop)
5. [Why pre_get_posts is Correct](#why-pre_get_posts-is-correct)
6. [Bad Practices to Avoid](#bad-practices-to-avoid)
7. [Code Standards Applied](#code-standards-applied)
8. [Performance Considerations](#performance-considerations)
9. [Debugging Guide](#debugging-guide)
10. [Key Concepts](#key-concepts)

---

## 🗂️ WordPress Template Hierarchy

### Understanding Template Resolution

WordPress follows a specific hierarchy when deciding which template file to use. This is fundamental to theme development.

### For Blog Listing (`/blog/`)

When a user visits the blog page (configured as "Posts page" in Settings → Reading):

```
┌─────────────────────────────────────────┐
│ WordPress Template Hierarchy Search     │
└─────────────────────────────────────────┘
           ↓
    1. home.php          ← ✅ WE USE THIS
           ↓
    2. index.php         ← Parent theme fallback
```

**Key Points:**
- `home.php` is specifically for the blog posts index
- `front-page.php` is for the site homepage
- These are different templates for different purposes
- We created `home.php` in the child theme
- WordPress finds it first and uses it

### For Individual Post (`/blog/my-post/`)

When a user clicks to view a single blog post:

```
┌─────────────────────────────────────────┐
│ WordPress Template Hierarchy Search     │
└─────────────────────────────────────────┘
           ↓
    1. single-post.php   ← Doesn't exist
           ↓
    2. single.php        ← ✅ WE USE THIS
           ↓
    3. singular.php      ← Doesn't exist
           ↓
    4. index.php         ← Won't reach here
```

**Key Points:**
- `single.php` handles ALL individual posts
- `single-{post-type}.php` would be more specific (e.g., `single-post.php`)
- We use the more general `single.php` for simplicity
- Works for all post types unless overridden

### For Category Archive (`/category/name/`)

When a user browses a category:

```
┌─────────────────────────────────────────┐
│ WordPress Template Hierarchy Search     │
└─────────────────────────────────────────┘
           ↓
    1. category-{slug}.php  ← e.g., category-news.php
           ↓
    2. category-{id}.php    ← e.g., category-5.php
           ↓
    3. category.php         ← Doesn't exist
           ↓
    4. archive.php          ← ✅ WE USE THIS
           ↓
    5. index.php            ← Won't reach here
```

**Key Points:**
- One `archive.php` handles ALL archive types
- Includes: categories, tags, dates, authors
- More maintainable than separate templates
- Dynamic content based on archive type

### For Tag Archive (`/tag/name/`)

```
┌─────────────────────────────────────────┐
│ WordPress Template Hierarchy Search     │
└─────────────────────────────────────────┘
           ↓
    1. tag-{slug}.php       ← e.g., tag-tutorial.php
           ↓
    2. tag-{id}.php         ← e.g., tag-3.php
           ↓
    3. tag.php              ← Doesn't exist
           ↓
    4. archive.php          ← ✅ WE USE THIS
           ↓
    5. index.php            ← Won't reach here
```

### For Search Results (`/?s=query`)

```
┌─────────────────────────────────────────┐
│ WordPress Template Hierarchy Search     │
└─────────────────────────────────────────┘
           ↓
    1. search.php        ← ✅ WE USE THIS
           ↓
    2. index.php         ← Won't reach here
```

**Key Points:**
- `search.php` is straightforward
- Only one option before `index.php`
- Handles all search queries

---

## 🔄 How WordPress Resolves Templates

### The Resolution Process

```php
// Simplified WordPress template resolution flow

function get_template() {
    // 1. Determine query type
    if (is_home()) {
        $templates = ['home.php', 'index.php'];
    } elseif (is_single()) {
        $templates = ['single-' . $post_type . '.php', 'single.php', 'singular.php', 'index.php'];
    } elseif (is_category()) {
        $templates = ['category-' . $slug . '.php', 'category-' . $id . '.php', 'category.php', 'archive.php', 'index.php'];
    } elseif (is_search()) {
        $templates = ['search.php', 'index.php'];
    }
    // ... more conditions
    
    // 2. Search for first existing template
    foreach ($templates as $template) {
        // Check child theme first
        if (file_exists(CHILD_THEME . '/' . $template)) {
            return CHILD_THEME . '/' . $template;
        }
        // Then parent theme
        if (file_exists(PARENT_THEME . '/' . $template)) {
            return PARENT_THEME . '/' . $template;
        }
    }
    
    // 3. Fallback to index.php (always required)
    return 'index.php';
}
```

### Child Theme vs Parent Theme

```
File Resolution Order:
┌─────────────────────────────────┐
│ 1. Child Theme                  │  ← Our files
│    /wp-content/themes/child/    │
└─────────────────────────────────┘
           ↓
┌─────────────────────────────────┐
│ 2. Parent Theme                 │  ← Original files
│    /wp-content/themes/parent/   │
└─────────────────────────────────┘
```

**Why Child Themes:**
- Preserve parent theme updates
- Override specific files only
- Safe customization
- Professional approach

---

## 🏗️ Implementation Architecture

### System Overview

```
┌──────────────────────────────────────────────────────────┐
│                    WordPress Core                         │
│  (Handles routing, queries, template loading)            │
└──────────────────────────────────────────────────────────┘
                           ↓
┌──────────────────────────────────────────────────────────┐
│                   functions.php                           │
│  • Configure posts_per_page (7 for blog)                 │
│  • Register image sizes (blog-card, blog-hero)           │
│  • Customize excerpt (30 words)                          │
│  • Add custom body classes                               │
└──────────────────────────────────────────────────────────┘
                           ↓
        ┌─────────────────────────────────────┐
        │                                     │
┌───────▼────────┐  ┌────────▼────────┐  ┌──▼─────────┐
│   home.php     │  │   single.php    │  │ archive.php│
│  Blog listing  │  │  Single post    │  │  Archives  │
│  7 posts/page  │  │  Full content   │  │  Dynamic   │
│  Pagination    │  │  Related posts  │  │  Breadcrumb│
└────────────────┘  └─────────────────┘  └────────────┘
                           
                    ┌────────▼────────┐
                    │   search.php    │
                    │  Search results │
                    │  Highlighting   │
                    └─────────────────┘
```

### Data Flow

```
User Request → WordPress Core → Query → Template → Loop → Output

Example: /blog/ page

1. User visits /blog/
2. WordPress detects: is_home() = true
3. Runs pre_get_posts hook
4. Sets posts_per_page to 7
5. Executes main query
6. Loads home.php template
7. Template runs The Loop
8. Outputs HTML
9. Returns to user
```

---

## 🔁 The WordPress Loop

### What is The Loop?

The Loop is WordPress's mechanism for iterating through posts returned by a query.

### Basic Loop Structure

```php
<?php
// Check if there are posts
if (have_posts()) :
    
    // Start looping through posts
    while (have_posts()) : the_post();
        
        // Display post content
        the_title();
        the_content();
        
    endwhile;
    
    // No posts found
else :
    echo 'No posts found';
endif;
?>
```

### How It Works Internally

```php
// Simplified internal implementation

global $wp_query; // Main query object

function have_posts() {
    global $wp_query;
    return $wp_query->have_posts(); // Are there more posts?
}

function the_post() {
    global $wp_query, $post;
    $wp_query->the_post(); // Move to next post
    $post = $wp_query->post; // Set global $post
    setup_postdata($post);   // Set up template tags
}
```

### Our Implementation

In `home.php`, `archive.php`, and `search.php`:

```php
<?php if (have_posts()) : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <?php the_post_thumbnail(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read more</a>
            </article>
        <?php endwhile; ?>
    </div>
    <?php echo paginate_links(); ?>
<?php else : ?>
    <p>No posts found</p>
<?php endif; ?>
```

### Secondary Loop (Related Posts)

In `single.php`:

```php
<?php
// Custom query for related posts
$related_query = new WP_Query(array(
    'category__in' => $category_ids,
    'post__not_in' => array(get_the_ID()),
    'posts_per_page' => 3,
));

// Secondary loop
if ($related_query->have_posts()) :
    while ($related_query->have_posts()) : $related_query->the_post();
        // Display related post
    endwhile;
    wp_reset_postdata(); // ← IMPORTANT: Reset to main query
endif;
?>
```

**Critical:** Always `wp_reset_postdata()` after custom queries!

---

## ✅ Why pre_get_posts is Correct

### The Problem We're Solving

**Requirement:** Display 7 posts per page on the blog listing (home.php)

**Wrong approaches:**
1. ❌ Hardcode in template
2. ❌ Custom query in template
3. ❌ Modify query with query_posts()

**Correct approach:**
✅ Use `pre_get_posts` hook

### Our Implementation

```php
add_action('pre_get_posts', 'theme_posts_per_page');
function theme_posts_per_page($query) {
    // Only modify the main query on the front-end
    if (!is_admin() && $query->is_main_query()) {
        // Set 7 posts per page ONLY for blog home
        if (is_home() && !is_front_page()) {
            $query->set('posts_per_page', 7);
        }
    }
}
```

### Why This is Correct

1. **Modifies Before Query Runs**
   - Hook fires before database query
   - Changes query parameters efficiently
   - One database query (not multiple)

2. **Affects Main Query Only**
   - `$query->is_main_query()` ensures we modify the right query
   - Doesn't break widgets, sidebars, or custom queries
   - Respects WordPress architecture

3. **Conditional & Specific**
   - `!is_admin()` - Only affects front-end
   - `is_home()` - Only blog listing page
   - `!is_front_page()` - Excludes homepage
   - Won't affect other post types or pages

4. **Pagination-Friendly**
   - WordPress knows the correct posts_per_page
   - Calculates pagination automatically
   - Page 2, 3, 4... all work correctly

5. **Performance**
   - Single database query
   - No extra queries
   - Efficient pagination

### Execution Flow

```
User visits /blog/
      ↓
WordPress initializes
      ↓
pre_get_posts hook fires ← OUR FUNCTION RUNS HERE
      ↓
Main query executes (with posts_per_page=7)
      ↓
home.php template loads
      ↓
The Loop runs
      ↓
7 posts displayed
```

---

## ⚠️ Bad Practices to Avoid

### 1. Using query_posts()

```php
// ❌ WRONG - Never use query_posts()
<?php query_posts('posts_per_page=7'); ?>
```

**Why it's bad:**
- Overwrites main query completely
- Breaks pagination
- Causes duplicate queries
- Deprecated in modern WordPress
- Memory inefficient

### 2. Custom Query in Template

```php
// ❌ WRONG - Don't replace main query
<?php
$custom_query = new WP_Query(array('posts_per_page' => 7));
while ($custom_query->have_posts()) : $custom_query->the_post();
    // ...
endwhile;
?>
```

**Why it's bad:**
- Extra database query
- Pagination breaks (needs manual implementation)
- Ignores WordPress routing
- More code to maintain

### 3. Hardcoding in Template

```php
// ❌ WRONG - Not dynamic
<?php
$posts = get_posts(array('numberposts' => 7));
foreach ($posts as $post) {
    setup_postdata($post);
    // ...
}
?>
```

**Why it's bad:**
- `get_posts()` doesn't support pagination well
- Manual pagination required
- Not using main query benefits
- Less efficient

### 4. Modifying Global Query

```php
// ❌ WRONG - Don't modify global directly
<?php
global $wp_query;
$wp_query->set('posts_per_page', 7);
?>
```

**Why it's bad:**
- Too late (query already ran)
- Doesn't affect current page
- Side effects on other queries
- Not the WordPress way

### Comparison Table

| Method | Efficiency | Pagination | Maintainability | Correct |
|--------|-----------|------------|-----------------|---------|
| `pre_get_posts` | ✅ High | ✅ Automatic | ✅ Excellent | ✅ Yes |
| `query_posts()` | ❌ Low | ❌ Breaks | ❌ Poor | ❌ No |
| Custom WP_Query | ⚠️ Medium | ⚠️ Manual | ⚠️ Okay | ⚠️ Sometimes |
| `get_posts()` | ❌ Low | ❌ No | ❌ Poor | ❌ No |

---

## 📏 Code Standards Applied

### WordPress Coding Standards

We follow official WordPress PHP coding standards:

1. **Naming Conventions**
   ```php
   // Functions: lowercase with underscores
   function theme_posts_per_page() {}
   
   // Variables: lowercase with underscores
   $posts_per_page = 7;
   
   // Constants: UPPERCASE with underscores
   define('THEME_VERSION', '1.0.0');
   ```

2. **Indentation**
   - 4 spaces (not tabs)
   - Consistent throughout

3. **Braces**
   ```php
   // Opening brace on same line
   if (condition) {
       // code
   } else {
       // code
   }
   ```

4. **Spacing**
   ```php
   // Space after control structures
   if (condition) {
   
   // Space around operators
   $result = $a + $b;
   
   // Space after commas
   array('key' => 'value', 'key2' => 'value2')
   ```

### Security: Output Escaping

We escape ALL dynamic output:

```php
// Plain text
echo esc_html($title);
echo esc_html__('Translate me', 'textdomain');

// URLs
echo esc_url($permalink);

// Attributes
echo '<a href="' . esc_url($link) . '" title="' . esc_attr($title) . '">';

// HTML (when needed)
echo wp_kses_post($content); // Allows safe HTML
```

**Rules:**
- Never output raw variables
- Always escape at output time
- Use appropriate escaping function
- Trust nothing from users

### Internationalization (i18n)

Ready for translation:

```php
// Text string
esc_html__('Read more', 'creatblue');

// With variables
printf(
    esc_html__('Showing %d-%d of %d results', 'creatblue'),
    $start,
    $end,
    $total
);

// Plurals
_n('article', 'articles', $count, 'creatblue');
```

### Accessibility

1. **Semantic HTML**
   ```html
   <article>
   <nav aria-label="Posts pagination">
   <header>
   <main>
   <footer>
   ```

2. **ARIA Labels**
   ```html
   <a href="#" aria-label="View all posts in Category">
   <button aria-label="Search">
   <nav role="navigation">
   ```

3. **Screen Reader Text**
   ```css
   .sr-only {
       position: absolute;
       width: 1px;
       height: 1px;
       /* ... hides visually but keeps for screen readers */
   }
   ```

4. **Keyboard Navigation**
   - All interactive elements are keyboard accessible
   - Logical tab order
   - Focus states visible

---

## ⚡ Performance Considerations

### Query Optimization

1. **Single Main Query**
   - Use `pre_get_posts` to modify
   - One database query per page
   - Efficient pagination

2. **Image Sizes**
   ```php
   add_image_size('blog-card', 600, 400, true);
   add_image_size('blog-hero', 1920, 800, true);
   ```
   - Only loads necessary size
   - Faster page loads
   - Reduced bandwidth

3. **Lazy Loading**
   - WordPress native (since 5.5)
   - Images load as user scrolls
   - Faster initial page load

### Database Queries

**Check query count:**
```php
// Add to footer temporarily
if (defined('SAVEQUERIES') && SAVEQUERIES) {
    global $wpdb;
    echo '<!-- ' . count($wpdb->queries) . ' queries -->';
}
```

**Optimize:**
- Avoid queries in loops
- Use transients for expensive queries
- Index custom fields if querying
- Cache results when possible

### Frontend Performance

1. **CSS**
   - Tailwind via CDN (production should be purged)
   - Minimal custom CSS
   - No render-blocking CSS

2. **JavaScript**
   - No JS dependencies (none needed!)
   - Only Tailwind config
   - No jQuery required

3. **Images**
   - Proper sizes
   - Alt text
   - Lazy loading
   - WebP recommended

### Caching Compatibility

Works with all caching plugins:
- **WP Super Cache**
- **W3 Total Cache**
- **WP Rocket**
- **LiteSpeed Cache**
- **Cloudflare**

No dynamic elements that break caching.

---

## 🐛 Debugging Guide

### Enable WordPress Debug Mode

Add to `wp-config.php`:

```php
// Enable debugging
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

// Log queries (for performance testing)
define('SAVEQUERIES', true);
```

Check log: `/wp-content/debug.log`

### Template Debugging

**Which template is loading?**

Add to template temporarily:

```php
<?php
// Show template file name
echo '<!-- Template: ' . basename(__FILE__) . ' -->';

// Show query details
global $wp_query;
echo '<!-- Query vars: ';
print_r($wp_query->query_vars);
echo '-->';
?>
```

View page source to see comments.

### Query Debugging

**See what posts are returned:**

```php
<?php
global $wp_query;
echo '<pre>';
print_r($wp_query->posts);
echo '</pre>';
?>
```

**Check query SQL:**

```php
<?php
global $wpdb;
if (defined('SAVEQUERIES') && SAVEQUERIES) {
    echo '<pre>';
    print_r($wpdb->queries);
    echo '</pre>';
}
?>
```

### Common Issues & Solutions

**Issue:** Blog shows homepage
- **Check:** Settings → Reading → Posts page is set
- **Fix:** Set a page as "Posts page"

**Issue:** 404 on blog
- **Check:** Permalinks
- **Fix:** Settings → Permalinks → Save Changes

**Issue:** Wrong number of posts
- **Check:** functions.php `pre_get_posts`
- **Check:** Settings → Reading → "Blog pages show at most"
- **Fix:** Ensure no conflicts

**Issue:** Pagination broken
- **Check:** Using `pre_get_posts` (not custom query)
- **Check:** Permalinks saved
- **Fix:** Regenerate permalinks

**Issue:** Images not sized correctly
- **Check:** Image sizes registered
- **Check:** Images regenerated
- **Fix:** `wp media regenerate`

### Query Monitor Plugin

Install for advanced debugging:

```bash
wp plugin install query-monitor --activate
```

Shows:
- All database queries
- Template hierarchy
- Hooks fired
- PHP errors
- Performance metrics

---

## 🎓 Key Concepts

### 1. The Main Query

```php
// The main query is WordPress's default query for the current page
// Set automatically based on URL

// Examples:
// /blog/ → Query for blog posts
// /category/news/ → Query for posts in "news" category
// /?s=wordpress → Query for posts matching "wordpress"

// Access it:
global $wp_query; // The main query object
```

### 2. Template Tags

Functions that output post data:

```php
the_title();          // Echo post title
the_content();        // Echo post content
the_permalink();      // Echo post URL
the_post_thumbnail(); // Echo featured image
the_excerpt();        // Echo excerpt
the_author();         // Echo author name
the_date();           // Echo publish date
```

All work within The Loop.

### 3. Conditional Tags

Determine what type of page is being viewed:

```php
is_home();           // Blog posts index
is_front_page();     // Site homepage
is_single();         // Single post
is_page();           // Single page
is_category();       // Category archive
is_tag();            // Tag archive
is_archive();        // Any archive
is_search();         // Search results
is_404();            // 404 page
```

### 4. Template Hierarchy

The order WordPress searches for template files.

**Visualized:**

```
┌─────────────┐
│  Most       │  single-post-123.php
│  Specific   │  single-post.php
│             │  single.php
│     ↓       │  singular.php
│             │  index.php
│  Least      │
│  Specific   │  ← Always fallback
└─────────────┘
```

### 5. Child Themes

Override parent theme files safely:

```
Parent Theme        Child Theme
├── style.css       ├── style.css (required)
├── home.php        ├── home.php ← Overrides parent
├── single.php      ├── single.php ← Overrides parent
└── functions.php   └── functions.php ← Additive (both run)
```

### 6. Hooks & Filters

**Actions:** Do something at a specific point
```php
add_action('pre_get_posts', 'my_function');
```

**Filters:** Modify data
```php
add_filter('excerpt_length', 'my_function');
```

### 7. WP_Query vs The Loop

```php
// The Main Query (automatic)
if (have_posts()) :
    while (have_posts()) : the_post();
        // Display post
    endwhile;
endif;

// Custom Query (manual)
$query = new WP_Query(array('posts_per_page' => 5));
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Display post
    endwhile;
    wp_reset_postdata(); // Reset!
endif;
```

### 8. Escaping vs Sanitization

**Escaping:** For OUTPUT (prevent XSS)
```php
echo esc_html($user_input);     // Output as text
echo esc_url($user_url);        // Output as URL
echo esc_attr($user_attr);      // Output as attribute
```

**Sanitization:** For INPUT (clean data)
```php
$clean = sanitize_text_field($_POST['field']);
$email = sanitize_email($_POST['email']);
$html = wp_kses_post($_POST['content']);
```

---

## 📊 Architecture Diagrams

### Request Flow

```
┌─────────────┐
│   Browser   │
└──────┬──────┘
       │ HTTP Request: /blog/
       ↓
┌─────────────┐
│   Apache/   │
│   Nginx     │
└──────┬──────┘
       ↓
┌─────────────────────────────────┐
│   WordPress Core (index.php)    │
│   • Parse request                │
│   • Determine query type         │
│   • Run pre_get_posts hook  ←── ✅ Our function runs
│   • Execute main query           │
└──────┬──────────────────────────┘
       ↓
┌─────────────────────────────────┐
│   Template Loader                │
│   • Check for home.php      ←── ✅ Found in child theme
│   • Load template file           │
└──────┬──────────────────────────┘
       ↓
┌─────────────────────────────────┐
│   home.php                       │
│   • get_header()                 │
│   • The Loop                     │
│   • paginate_links()             │
│   • get_footer()                 │
└──────┬──────────────────────────┘
       ↓
┌─────────────┐
│   Browser   │
│   Displays  │
└─────────────┘
```

### File Dependencies

```
functions.php
    ↓ Hooks & configurations
    │
    ├→ home.php
    │   ├→ header.php
    │   ├→ The Loop (main query)
    │   └→ footer.php
    │
    ├→ single.php
    │   ├→ header.php
    │   ├→ The Loop (main query)
    │   ├→ WP_Query (related posts)
    │   └→ footer.php
    │
    ├→ archive.php
    │   ├→ header.php
    │   ├→ The Loop (main query)
    │   └→ footer.php
    │
    └→ search.php
        ├→ header.php
        ├→ The Loop (main query)
        ├→ get_categories() (popular)
        └→ footer.php
```

---

## 🎯 Best Practices Summary

### Do's ✅

1. ✅ Use `pre_get_posts` for main query modifications
2. ✅ Use child themes for customization
3. ✅ Follow WordPress template hierarchy
4. ✅ Escape all output
5. ✅ Use semantic HTML
6. ✅ Add ARIA labels
7. ✅ Support i18n
8. ✅ Register custom image sizes
9. ✅ Use `wp_reset_postdata()` after custom queries
10. ✅ Follow WordPress coding standards

### Don'ts ❌

1. ❌ Don't use `query_posts()`
2. ❌ Don't modify parent theme files
3. ❌ Don't output unescaped data
4. ❌ Don't make database queries in loops
5. ❌ Don't hardcode values that should be dynamic
6. ❌ Don't forget pagination
7. ❌ Don't skip accessibility
8. ❌ Don't ignore mobile users
9. ❌ Don't load full-size images
10. ❌ Don't break WordPress conventions

---

## 📚 Additional Resources

### Official Documentation
- [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- [The Loop](https://developer.wordpress.org/themes/basics/the-loop/)
- [Template Tags](https://developer.wordpress.org/themes/basics/template-tags/)
- [Conditional Tags](https://developer.wordpress.org/themes/basics/conditional-tags/)
- [WP_Query](https://developer.wordpress.org/reference/classes/wp_query/)
- [Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/)

### Recommended Reading
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [Plugin Handbook](https://developer.wordpress.org/plugins/)
- [Common APIs](https://developer.wordpress.org/apis/)

### Tools
- [Query Monitor](https://wordpress.org/plugins/query-monitor/) - Debug bar
- [Theme Check](https://wordpress.org/plugins/theme-check/) - Theme validator
- [Debug Bar](https://wordpress.org/plugins/debug-bar/) - Debug info

---

## 🔍 Quick Reference

### Template Hierarchy Cheat Sheet

| URL | is_*() | Template Used |
|-----|--------|---------------|
| `/blog/` | `is_home()` | `home.php` |
| `/blog/my-post/` | `is_single()` | `single.php` |
| `/category/news/` | `is_category()` | `archive.php` |
| `/tag/tutorial/` | `is_tag()` | `archive.php` |
| `/author/john/` | `is_author()` | `archive.php` |
| `/?s=wordpress` | `is_search()` | `search.php` |
| `/` | `is_front_page()` | `front-page.php` |

### Common Template Tags

```php
// Post data
the_ID();                  // Post ID
the_title();               // Post title
the_content();             // Post content
the_excerpt();             // Post excerpt
the_permalink();           // Post URL
the_author();              // Author name
the_date();                // Publish date
the_category();            // Categories
the_tags();                // Tags
the_post_thumbnail();      // Featured image

// Get (return, don't echo)
get_the_ID();
get_the_title();
get_the_content();
get_the_excerpt();
get_permalink();
get_the_author();
get_the_date();
```

### Common Conditional Tags

```php
// Page type
is_home();                 // Blog listing
is_front_page();           // Homepage
is_single();               // Single post
is_page();                 // Single page
is_archive();              // Any archive

// Archive type
is_category();             // Category archive
is_tag();                  // Tag archive
is_author();               // Author archive
is_date();                 // Date archive

// Other
is_search();               // Search results
is_404();                  // 404 page
is_attachment();           // Attachment page
```

---

## 🎓 Advanced Topics

### Custom Queries

When you need a custom query (not modifying main query):

```php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'category_name' => 'news',
    'orderby' => 'date',
    'order' => 'DESC',
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
        // Display post
    endwhile;
    wp_reset_postdata(); // ALWAYS reset!
endif;
```

### Transients (Caching)

Cache expensive queries:

```php
// Check cache first
$related_posts = get_transient('related_posts_' . get_the_ID());

if (false === $related_posts) {
    // Cache miss - run query
    $related_posts = new WP_Query(/* ... */);
    
    // Store in cache for 12 hours
    set_transient('related_posts_' . get_the_ID(), $related_posts, 12 * HOUR_IN_SECONDS);
}

// Use cached data
// ...
```

### Custom Body Classes

Already implemented in functions.php:

```php
add_filter('body_class', 'theme_blog_body_classes');
function theme_blog_body_classes($classes) {
    if (is_home()) {
        $classes[] = 'blog-home';
    }
    return $classes;
}
```

Use in CSS:
```css
.blog-home .header {
    /* Styles specific to blog home */
}
```

---

## ✅ Conclusion

This blog system follows WordPress best practices:

- ✅ Proper template hierarchy
- ✅ Efficient queries
- ✅ Clean code
- ✅ Security-first
- ✅ Accessible
- ✅ Performance optimized
- ✅ Maintainable
- ✅ Scalable

**Ready for production.**

---

**Questions?** Review [BLOG-README.md](BLOG-README.md) for user-facing documentation.
