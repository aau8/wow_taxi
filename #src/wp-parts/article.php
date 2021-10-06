<article <?php post_class('article'); ?> id="post-<?php the_ID(); ?>">
    <div class="article__header">
    <a href="<?php echo get_permalink(); ?>" class="article-img">
        <?php if (get_the_post_thumbnail($post->ID, array(374,180, true))) {
            echo get_the_post_thumbnail($post->ID, array(374,180, true));
        } else { ?>
            <img src="https://placeimg.com/500/300/arch" alt="Рандомная картинка" class="img-cap">
        <?php } ?>

    </a>
    <?php if (!get_the_post_thumbnail($post->ID, array(374,180, true))) { ?>
        <div class="article-robot" data-tooltip="Админу было лень поставить картинку для этого поста. Поэтому робот поставил рандомную.">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="article-robot-eyes" fill-rule="evenodd" clip-rule="evenodd" d="M7.5 18C6.83696 18 6.20107 17.7366 5.73223 17.2678C5.26339 16.7989 5 16.163 5 15.5C5 14.68 5.4 13.96 6 13.5L9.83 16.38C9.5 17.32 8.57 18 7.5 18ZM16.5 18C15.43 18 14.5 17.32 14.17 16.38L18 13.5C18.6 13.96 19 14.68 19 15.5C19 16.163 18.7366 16.7989 18.2678 17.2678C17.7989 17.7366 17.163 18 16.5 18Z" fill="#F3CC3F" opacity="0"/>
                <g opacity="0.8">
                    <path d="M22 14H21C21 10.13 17.87 7 14 7H13V5.73C13.3041 5.55442 13.5566 5.30186 13.7322 4.99773C13.9077 4.69359 14.0001 4.3486 14 3.99744C13.9999 3.64628 13.9074 3.30133 13.7317 2.99728C13.556 2.69324 13.3033 2.44081 12.9991 2.26539C12.6949 2.08996 12.3499 1.99772 11.9987 1.99795C11.6476 1.99818 11.3026 2.09085 10.9987 2.26667C10.6947 2.44248 10.4424 2.69523 10.2671 2.9995C10.0917 3.30377 9.99964 3.64884 10 4C10 4.74 10.4 5.39 11 5.73V7H10C6.13 7 3 10.13 3 14H2C1.45 14 1 14.45 1 15V18C1 18.55 1.45 19 2 19H3V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C20.11 22 21 21.11 21 20V19H22C22.55 19 23 18.55 23 18V15C23 14.45 22.55 14 22 14ZM7.5 18C6.83696 18 6.20107 17.7366 5.73223 17.2678C5.26339 16.7989 5 16.163 5 15.5C5 14.68 5.4 13.96 6 13.5L9.83 16.38C9.5 17.32 8.57 18 7.5 18ZM16.5 18C15.43 18 14.5 17.32 14.17 16.38L18 13.5C18.6 13.96 19 14.68 19 15.5C19 16.163 18.7366 16.7989 18.2678 17.2678C17.7989 17.7366 17.163 18 16.5 18Z" fill="white"/>
                </g>
            </svg>
        </div>
    <?php } ?>
    <div class="article__info">
        <div class="article__date">
        <span class="article__date-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/article/calendare.svg" alt="Дата написания"></span>
        <span class="article__date-text"><?php echo get_the_date('d.m.Y', $post->ID); ?></span>
        </div>
        <div class="article__write-time">
        <span class="article__write-time-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/article/time.svg" alt="Время чтения"></span>
        <span class="article__write-time-text"><span><?php echo get_read_time($post->ID); ?></span> мин.</span>
        </div>
    </div>
    </div>
    <div class="article__body">
    <?php the_category(); ?>
    <!-- <ul class="post__tags">
        <li class="post-tag"><a href="<?php echo get_category_link($misha_query->post->ID); ?>"><?php echo get_the_category( $misha_query->post->ID )[0]->name; ?></a></li>
    </ul> -->
    <a href="<?php echo get_permalink(); ?>" class="article-title-link"><h3 class="article-title"><?php the_title(); ?></h3></a>
    <!-- <p class="post-text"><?php the_excerpt(); ?></p> -->
    <!-- <a href="<?php echo get_permalink(); ?>" class="btn-outline post-btn">Перейти</a> -->
    </div>
</article>