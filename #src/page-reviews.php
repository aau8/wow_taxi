<?php get_header(); ?>
<?php get_template_part('wp-parts/bread'); ?>
<?php get_template_part('wp-parts/page-header') ?>

<div class="review-page">
    <div class="container">
        <div class="review-page__body">
            <?php
                global $wp_query;

                $save_wpq = $wp_query;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'cat' => 6,
                    'paged' => $paged
                );

                $wp_query = new WP_Query($args);
                while($wp_query->have_posts()) {
                    $wp_query->the_post();
                    get_template_part('wp-parts/article-review');
                }
            ?>
        </div>
    </div>
</div>

<?php get_template_part('wp-parts/pagination'); ?>
<?php 
    wp_reset_postdata();
    $wp_query = $save_wpq;
?>
<section class="banner">
    <div class="container">
        <div class="banner__body">
            <div class="banner__content">
                <h2 class="banner-title">Вы пользовались нашими услугами?</h2>
                <p class="banner-text">Поделитесь своими впечатлениями, оставьте отзыв!</p>
            </div>
            <div class="banner__buttons">
                <!-- <a href="#" class="btn-outline banner-btn">Предложить улучшение</a> -->
                <a href="<?php echo home_url(); ?>/reviews/#review" class="btn banner-btn" data-modal-open="review">Оставить отзыв</a>
            </div>
        </div>
    </div>
</section>
<div class="modal review_add padding-lock" id="review" style="opacity: 0;">
    <div class="modal__body review_add__body">
    <button class="modal-close"></button>
    <div class="modal__content review_add__content">
        <div class="review_add__form">
            <h2 class="modal-title">Оставить отзыв</h2>
            <form action="<?php echo get_stylesheet_directory_uri(); ?>/wp-handlers/telegram-review.php" method="POST" class="review_add__form__body form">
                <div class="input">
                    <input id="review-name" class="input-upper-case _req" type="text" name="user-name">
                    <label for="review-name">Имя*</label>
                </div>
                <div class="input">
                    <input id="review-phone" class="_req" type="number" name="user-rating" min="1" max="5">
                    <label for="review-phone">Рейтинг (от 1 до 5)*</label>
                </div>
                <div class="input">
                    <input id="review-email" class="_req" type="text" name="user-email">
                    <label for="review-email">E-mail</label>
                </div>
                <div class="textarea">
                    <textarea id="review-message" class="_req" name="user-review"></textarea>
                    <label for="review-message">Отзыв</label>
                </div>
                <button class="btn review_add__form-btn submit">
                    <span class="submit-text">Отправить</span>
                    <span class="submit-loader">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 14C26 16.3734 25.2962 18.6935 23.9776 20.6668C22.6591 22.6402 20.7849 24.1783 18.5922 25.0866C16.3995 25.9948 13.9867 26.2324 11.6589 25.7694C9.33114 25.3064 7.19295 24.1635 5.51472 22.4853C3.83649 20.8071 2.6936 18.6689 2.23058 16.3411C1.76755 14.0133 2.00519 11.6005 2.91345 9.4078C3.8217 7.21509 5.35977 5.34094 7.33316 4.02236C9.30655 2.70379 11.6266 2 14 2" stroke="#333333" stroke-width="4"/>
                        </svg>
                    </span>
                </button>
            </form>
        </div>
    </div>
    </div>
</div>
<?php get_footer(); ?>