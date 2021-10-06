<?php get_header(); ?>
<?php get_template_part('wp-parts/bread'); ?>
<?php get_template_part('wp-parts/page-header'); ?>
<section class="regions">
    <div class="container">
        <div class="regions__body">

            <?php 
                $child_cats = get_term_children(3, 'category');
                
                for ($i=0; $i < count($child_cats); $i++) { ?>
                    <?php
                        global $post;

                        $posts = get_posts(array(
                            'numberposts' => 0,
                            'category' => $child_cats[$i],
                            'orderby' => 'title',
                            'order' => 'ASC',
                        ));
                    ?>
                    <?php if (count($posts) != 0) { ?>
                        <div class="regions__region">
                            <h2 class="regions__region-title"><?php echo get_category($child_cats[$i])->name; ?></h2>
                            <div class="regions__list">
                            <?php
                                foreach($posts as $post) {
                                    setup_postdata($post);
                                    get_template_part('wp-articles/city');
                                }
                                
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php }
            ?>

            <!-- <div class="regions__region">
                <h2 class="regions__region-title">Городской округ Ялта</h2>
                <ul class="regions__list">
                    <li class="regions__card">
                        <a href="#" class="regions-link">
                            <h3 class="regions__card-title">Ялта</h3>
                            <button class="btn regions__card-btn">Подробнее</button>
                            <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/city.png" alt=""></div>
                        </a>
                    </li>
                    <li class="regions__card">
                        <a href="#" class="regions-link">
                            <h3 class="regions__card-title">Ялта</h3>
                            <button class="btn regions__card-btn">Подробнее</button>
                            <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/city.png" alt=""></div>
                        </a>
                    </li>
                    <li class="regions__card">
                        <a href="#" class="regions-link">
                            <h3 class="regions__card-title">Ялта</h3>
                            <button class="btn regions__card-btn">Подробнее</button>
                            <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/city.png" alt=""></div>
                        </a>
                    </li>
                    <li class="regions__card">
                        <a href="#" class="regions-link">
                            <h3 class="regions__card-title">Ялта</h3>
                            <button class="btn regions__card-btn">Подробнее</button>
                            <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/city.png" alt=""></div>
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</section>
<?php get_footer(); ?>