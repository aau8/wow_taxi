<div <?php post_class('clients-item'); ?> id="<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" class="clients-link" title="<?php echo get_field('logo')['alt']; ?>">
        <img src="<?php echo get_field('logo')['url']; ?>" alt="<?php echo get_field('logo')['alt']; ?>">
    </a>
</div>