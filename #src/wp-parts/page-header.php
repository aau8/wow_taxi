<div class="page__info">
    <div class="container">
        <div class="page__info__body">
            <h1 class="page__info-title"><?php the_title(); ?></h1>
            <?php if (get_field('descr_page')['radio']) { ?>
                <p class="page__info-text"><?php echo get_field('descr_page')['text']; ?></p>
            <?php } ?>
        </div>
    </div>
</div>