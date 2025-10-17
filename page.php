<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        
        // Get page slug to determine which template to use
        $page_slug = get_post_field('post_name', get_post());
        
        // Include specific page template if it exists
        $template_file = get_template_directory() . '/' . $page_slug . '.php';
        if (file_exists($template_file)) {
            include $template_file;
        } else {
            // Fallback to default page content
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    the_content();
                    
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'mind-assistant'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>
            <?php
        }
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
