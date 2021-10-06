<div class="blog-search">
<?php get_template_part('wp-parts/bread'); ?>
    <div class="container">
        <div class="blog-search__block">
            <div class="blog-search__content">
                <form action="<?php echo home_url(); ?>" method="GET" role="search" class="blog-search__form">
                    <div class="blog-search-input">
                        <input type="text" name="s" placeholder="Ваш запрос...">
                    </div>
                    <button class="btn blog-search-btn">Поиск</button>
                </form>
                <ul class="blog-search__list">
                    <?php $args = array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'title_li' => '',
                        'exclude' => $GLOBALS['exclude_cats'],
                        'orderby' => 'name',
                        'depth' => 1,
                    ) ?>
                    <?php wp_list_categories($args); ?>
                </ul>
            </div>
        </div>
    </div>
</div>