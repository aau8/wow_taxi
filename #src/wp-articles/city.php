<div <?php post_class('regions__card'); ?> id="<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" class="regions-link">
        <h3 class="regions__card-title"><?php the_title(); ?></h3>
        <div class="btn regions__card-btn">Подробнее</div>
        <div class="regions__card-img">
            <?php if (get_the_post_thumbnail($post->ID, array(374,180, true))) {
                echo get_the_post_thumbnail($post->ID, array(374,180, true));
            } else { ?>
                <img src="https://placeimg.com/500/300/arch" alt="Рандомная картинка" class="img-cap">
            <?php } ?>
        </div>
    </a>
</div>