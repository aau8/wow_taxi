<?php get_header(); ?>
<?php get_template_part('wp-parts/bread'); ?>
    <section class="post_content">
        <div class="container">
            <div class="post_content__body"> 
                <div class="post_content__info">
                    <div class="post_content__info__header">
                        <h1 class="post_content-title"><?php the_title(); ?></h1>
                        <div class="post_content-descr"><?php the_excerpt(); ?></div>
                    </div>
                    <div class="post_content__info__footer">
                        <div class="post_content__info__block post_content__info__date">
                            <div class="post_content__info__block-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-page/date.svg" alt=""></div>
                            <span class="post_content__info__block-text" id="post-date"><?php echo get_the_date(); ?></span>
                        </div>
                        <div class="post_content__info__block post_content__info__read">
                            <div class="post_content__info__block-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-page/read_time.svg" alt=""></div>
                            <span class="post_content__info__block-text" id="post-read-time"><span><?php echo get_read_time($post->ID); ?></span> мин.</span>
                        </div>
                        <?php the_category(); ?>
                        <!-- <span class="post_content__info-author">Автор: <a href="#">Степан Кулибин</a></span> -->
                        <!-- <button class="post_content__info-share">Поделиться</button> -->
                    </div>
                    <div class="post_content__info-thumbnail">
                        <?php 
                            if (get_the_post_thumbnail($post->ID)) { ?>
                                <div class="post_content__info-thumbnail-img">
                                    <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>    
                                </div>
                            <?php
                            }           
                        ?>
                        <!-- <span class="post_content__info-thumbnail-signa">Фотография взята с unsplash.com</span> -->
                    </div>
                </div>
                <div class="post_content__text content">
                    <?php the_content(); ?>
                    <!-- <h2>При чем тут инфографика</h2>
                    <p>Инфографика — это осмысленная работа с информацией и графическая форма подачи данных, ускоряющая их восприятие. Форма инфографики может быть любая: презентация, график, отчет или интерактивный проект.</p>
                    <p>Чтобы создавать инфографику необязательно быть дизайнером или обладать художественными навыками. Например, если мы работаем только с текстом письма и выделяем в нём нужные смыслы: цветом, жирностью и размером — получится инфографика.</p>
                    <h2>Как это помогает бизнесу</h2>
                    <p>В любой бизнес-коммуникации всегда есть одна главная мысль, которую нужно донести до целевой аудитории. Все остальное обслуживает главную мысль: дополняет, подтверждает и иллюстрирует информацию. Суть инфографики в том, чтобы читателю просто воспринимать информацию.</p>
                    <h3>Малый бизнес</h3>
                    <p>В любой бизнес-коммуникации всегда есть одна главная мысль, которую нужно донести до целевой аудитории. Все остальное обслуживает главную мысль: дополняет, подтверждает и иллюстрирует информацию. Суть инфографики в том, чтобы читателю просто воспринимать информацию.</p>
                    <h4>Законы и права владельца</h4>
                    <p>В статье мы рассказали только про пять приемов инфографики, которые помогут создавать <a href="#">понятные слайды</a> и документы. Мы надеемся, что эти приемы пригодятся вам и вы добавите статью в закладки.</p>
                    <ol>
                        <li>Графики и диаграммы должны соответствовать данным, которые они отображают.</li>
                        <li>При подготовке таблиц нужно избавляться от декоративных элементов и повторов.</li>
                        <li>Соблюдать единство стиля во всем документе.</li>
                        <li>Использовать не более двух семейств шрифтов и акцентных цветов.</li>
                    </ol>
                    <div class="post_content__slider__block">
                        <div class="post_content__slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="post_content__slide swiper-slide">
                                    <div class="post_content__slide-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-page/1.png" alt=""></div>
                                    <div class="post_content__slide-text"><span>Фотография взята с unsplash.com</span></div>
                                </div>
                                <div class="post_content__slide swiper-slide">
                                    <div class="post_content__slide-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-page/thumbnail.png" alt=""></div>
                                    <div class="post_content__slide-text"><span>Фотография взята с unsplash.com</span></div>
                                </div>
                                <div class="post_content__slide swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-page/thumbnail.png" alt=""></div>
                            </div>
                            <div class="post_content__arrows swiper__arrow">
                                <div class="post_content__arrow post_content__arrow-prev swiper__arrow-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-page/slider-arrow.svg" alt=""></div>
                                <div class="post_content__arrow post_content__arrow-next swiper__arrow-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-page/slider-arrow.svg" alt="" style="transform: rotate(180deg);"></div>
                            </div>
                        </div>
                        <div class="post_content-pagination"></div>
                    </div>
                    <h3>Средний бизнес</h3>
                    <p>Чтобы документы одинаково хорошо выглядели на любом компьютере, лучше использовать стандартные шрифты, которые есть в большинстве текстовых редакторов — Arial, Garamond, Georgia, Verdana. Да они скучные, зато можно быть точно уверенным, что на компьютере вашего клиента документ откроется с нужной версткой.</p>
                    <h4>Бизнес-план</h4>
                    <p>Идея статьи в том, что работу над документами стоит начинать не с дизайна, а с анализа, структурирования и представления информации. Вот, что для этого нужно:</p>
                    <ul>
                        <li>Разработать структуру, которая сделает удобным и логичным восприятие информации Разработать структуру, которая сделает удобным и логичным восприятие информации.</li>
                        <li>Главная мысль должна быть самой большой или восприниматься такой.</li>
                        <li>Помнить, что любую информацию можно сократить без потери качества.</li>
                        <li>Графики и диаграммы должны соответствовать данным, которые они отображают.</li>
                    </ul> -->

                </div>
                <?php 
                    $prev = get_adjacent_post(true,'',true); 
                    $next = get_adjacent_post(true,'',false);
                ?>
                <?php 
                    if ($prev || $next) { ?>
                        <div class="post_content__more">
                            <div class="post_content__more__body">
                                <!-- <div class="post_content__more__card__block">
                                    <h2 class="post_content__more__card__block-title">Предыдущая статья:</h2>
                                    <div class="post_content__more__card">
                                        <div class="post_content__more-img"><img src="<?php the_post_thumbnail_url($prev->ID); ?>" alt=""></div>
                                    </div>
                                </div> -->
                                <?php 
                                    if ($prev) { ?>
                                        <a href="<?php echo get_permalink($prev->ID); ?>" class="post_content__more__card post_content__more__card-prev">
                                            <div class="post_content__more__card__header">
                                                <div class="post_content__more__title">
                                                    <span class="post_content__more__title-correction">Предыдущая статья:</span>
                                                    <span class="post_content__more__title-text"><?php echo $prev->post_title; ?></span>
                                                </div>
                                                <div class="btn-outline post_content__more-btn">Читать</div>
                                            </div>
                                        </a> 
                                    <?php }
                                ?>
                                <?php 
                                    if ($next) { ?>
                                        <a href="<?php echo get_permalink($next->ID) ?>" class="post_content__more__card post_content__more__card-next">
                                            <div class="post_content__more__card__header">
                                                <div class="post_content__more__title">
                                                    <span class="post_content__more__title-correction">Следующая статья:</span>
                                                    <span class="post_content__more__title-text"><?php echo $next->post_title; ?></span>
                                                </div>
                                                <div class="btn-outline post_content__more-btn">Читать</div>
                                            </div>
                                        </a>
                                    <?}
                                ?>
                            </div>
                        </div>
                    <?php }
                ?>
            </div>
        </div>
    </section>
    <div class="offer-post">
        <div class="container">
            <!-- <a href="#" class="offer-post-link">Предложить статью</a> -->
        </div>
    </div>
    <section class="section news news-post">
      <div class="container">
        <h2 class="news-title" data-title-bg="news">Похожие статьи</h2>
        <div class="news__body">
        <?php 
            global $post;
            
            // тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
            $related_tax = 'category';
            
            // получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
            $cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );
            
            // массив параметров для WP_Query
            $args = array(
                'posts_per_page' => 4, // сколько похожих постов нужно вывести,
                'tax_query' => array(
                    array(
                        'taxonomy' => $related_tax,
                        'field' => 'id',
                        'include_children' => false, // нужно ли включать посты дочерних рубрик
                        'terms' => $cats_tags_or_taxes,
                        'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
                    )
                )
            );
            $misha_query = new WP_Query( $args );
            
            if( $misha_query->have_posts() ) {
                while($misha_query->have_posts()) {
                    $misha_query->the_post();
                    get_template_part('wp-parts/article');
                }
            }
            
            wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>