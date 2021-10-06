<?php get_header(); ?>
<?php get_template_part('wp-parts/blog-search'); ?>
<section > 
    <div class="container">
        <div class="posts__block">
            <?php 
                if (!have_posts()) {?>
                    <p style="text-align:center;">Ничего не найдено :(</p>
                <?php
                }
            ?>
            <div class="posts__list">
            <?php 
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('wp-parts/article');
                }
            }
            ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('wp-parts/pagination'); ?>
<?php get_footer(); ?>