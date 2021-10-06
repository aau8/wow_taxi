<?php get_header(); ?>
    <section class="section error">
        <div class="container">
            <div class="error__body">
                <div class="error-icon"><span style="transform: rotate(90deg)">:(</span></div>
                <div class="error-text"><span>Такой страницы не существует!</span></div>
                <a href="<?php echo home_url(); ?>" class="btn error-btn">Вернуться на главную</a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>