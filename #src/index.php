<?php 
    /**
     * Страница блога. На этой странице выводяться все записи
     */

    $GLOBALS['exclude_cats'] = [-6, -8, -35];
?>

<?php get_header(); ?>
<?php get_template_part('wp-parts/blog-search'); ?>

<div class="section posts">
    <div class="container">
        <div class="posts__block">
            <div class="posts__list"> 
            <?php 
            // if (have_posts()) {
            //     while (have_posts()) {
            //         the_post(); 
            //         $cat = get_the_category($post->ID)[0]->term_id;
            //         $exclude_cats = [6, 8];
                    
            //         if (in_array($cat, $exclude_cats) === false) {
            //             get_template_part('wp-parts/article');
            //         }
            //     }
            // }
            ?>
            
            <?php
                global $wp_query;

                $save_wpq = $wp_query;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'cat' => $GLOBALS['exclude_cats'],
                    'paged' => $paged
                );

                $wp_query = new WP_Query($args);
                while($wp_query->have_posts()) {
                    $wp_query->the_post();
                    get_template_part('wp-parts/article');
                }
            ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('wp-parts/pagination'); ?>
<?php 
    wp_reset_postdata();
    $wp_query = $save_wpq;
?>
<?php get_footer(); ?>