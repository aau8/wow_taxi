<li <?php post_class('brand-item'); ?> id="<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" class="brand-link" title="<?php echo get_field('logo')['alt']; ?>">
        <img src="<?php echo get_field('logo')['url']; ?>" alt="<?php echo get_field('logo')['alt']; ?>">
    </a>
</li>