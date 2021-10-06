<!-- class="reviews__card <?php echo get_query_var('review-class'); ?>" -->
<div <?php post_class('reviews__card ' . get_query_var('swiper-slide')); ?> id="<?php the_ID(); ?>">
    <div class="reviews__card__header">
    <div class="reviews__card-img">
        <?php if (get_the_post_thumbnail($post->ID, array(374,180, true))) {
            echo get_the_post_thumbnail($post->ID, array(374,180, true));
        } else { ?>
            <img src="https://placeimg.com/500/300/arch" alt="Рандомная картинка" class="img-cap">
        <?php } ?>
    </div>
    <div class="reviews__card__info">
        <h3 class="reviews__card-name"><?php the_title(); ?></h3>
        <span class="reviews__card-date"><?php echo get_the_date('d.m.Y', $post->ID); ?></span>
    </div>
    <div class="reviews__card__rating">
        <?php 
            $rating = get_field('rating');
            $max = 5;
            $disabled = $max - $rating;

            for ($i=0; $i < $rating; $i++) { ?>
                <span>★</span>
            <?php }

            for ($i=0; $i < $disabled; $i++) { ?>
                <span class='_disabled'>★</span>
            <?php }
        ?>
    </div>
    </div>
    <div class="reviews__card__body">
    <div class="reviews__card-text"><?php the_content(); ?></div>
    </div>
</div>