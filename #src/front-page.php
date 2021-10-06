<?php get_header(); ?>
    <main class="main">
      <div class="container">
        <div class="main__body">
          <div class="main__slider swiper-container">
            <div class="swiper-wrapper">
              <div class="main-slide swiper-slide">
                <div class="main-slide__content">
                  <h1 class="main-slide-title title-bg" data-title-bg="WOW">Трансфер в Крыму</h1>
                  <p class="main-slide-text">Услуги трансфера по всему Крыму. Заберем откуда угодно и привезем куда угодно.</p>
                  <ul class="main-slide__list">
                    <li>По городу, в аэропорт, в ж/д</li>
                    <li>Из города в город</li>
                    <li>Из и на курорты</li>
                  </ul>
                  <a href="#calc" class="btn main-slide-btn">Заказать трансфер</a>
                </div>
                <div class="main-slide-img main-slide-img-transfer">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main/transfer_ill.png" alt="Трансфер">
                </div>
              </div>
              <div class="main-slide swiper-slide">
                <div class="main-slide__content">
                  <h1 class="main-slide-title title-bg" data-title-bg="WOW">Такси в Крыму</h1>
                  <p class="main-slide-text">Услуги такси по всему Крыму. Заберем откуда угодно и привезем куда угодно.</p>
                  <ul class="main-slide__list">
                    <li>По городу, в аэропорт, в ж/д</li>
                    <li>Из города в город</li>
                    <li>Из и на курорты</li>
                  </ul>
                  <a href="#calc" class="btn main-slide-btn">Заказать такси</a>
                </div>
                <div class="main-slide-img main-slide-img-taxi">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main/taxi_ill.png" alt="Такси">
                </div>
              </div>
            </div>
          </div>
          <div class="main__elems">
            <div class="main__advantages">
              <div class="main__advantages__list">
                <?php 
                  global $post;

                  $posts = get_posts(array(
                    'numberposts' => 4,
                    'category' => 35,
                  ));

                  foreach($posts as $post) {
                    setup_postdata($post); ?>
                    <div class="advantages__card">
                      <div class="advantages__card__header">
                        <h4 class="advantages__card-title"><?php the_title(); ?></h4>
                        <div class="advantages-img"><?php the_field('icon_svg'); ?></div>
                      </div>
                    </div>
                  <?php }

                  wp_reset_postdata();
                ?>
                <!-- <div class="advantages__card">
                  <div class="advantages__card__header">
                    <h4 class="advantages__card-title">Всегда вовремя!</h4>
                    <div class="advantages-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/advantages/advantages-time.svg" alt="Время"></div>
                  </div>
                </div>
                <li class="advantages__card">
                  <div class="advantages__card__header">
                    <h4 class="advantages__card-title">Более 10 тыс. счастливых поездок!</h4>
                    <div class="advantages-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/advantages/advantages-map.svg" alt="Путь"></div>
                  </div>
                </li>
                <li class="advantages__card">
                  <div class="advantages__card__header">
                    <h4 class="advantages__card-title">Авто от 2012 года!</h4>
                    <div class="advantages-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/advantages/advantages-taxi.svg" alt="Такси"></div>
                  </div>
                </li> -->
              </div>
            </div>
            <ul class="main__slider__pagination slider__pagination">
              <li class="slider__pagination-item _active">
                <span>1</span>
              </li>
              <li class="slider__pagination-item">
                <span>2</span>
              </li>
            </ul> 
          </div>
        </div>
      </div>
    </main>
    <?php get_template_part('wp-parts/calc'); ?>
    <section class="section advantages">
      <div class="container">
        <div class="advantages__body">
          <h2 class="advantages-title title-bg" data-title-bg="advantages">Преимущества</h2>
          <div class="advantages__list">
            <?php 
              global $post;

              $posts = get_posts(array(
                'numberposts' => 4,
                'category' => 35,
              ));

              foreach($posts as $post) {
                setup_postdata($post); ?>
                <div class="advantages__card">
                  <div class="advantages__card__header">
                    <h4 class="advantages__card-title"><?php the_title(); ?></h4>
                    <div class="advantages-img"><?php the_field('icon_svg'); ?></div>
                  </div>
                  <div class="advantages-text"><?php the_content(); ?></div>
                </div>
              <?php }

              wp_reset_postdata();
            ?>
            <!-- <li class="advantages__card">
              <div class="advantages__card__header">
                <h4 class="advantages__card-title">Всегда вовремя!</h4>
                <div class="advantages-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/advantages/advantages-time.svg" alt="Время"></div>
              </div>
              <p class="advantages-text">Мы работаем уже более 3 лет и за это время оказали услугу такси/трансфера более 10 000 раз.</p>
            </li>
            <li class="advantages__card">
              <div class="advantages__card__header">
                <h4 class="advantages__card-title">Всегда вовремя!</h4>
                <div class="advantages-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/advantages/advantages-time.svg" alt="Время"></div>
              </div>
              <p class="advantages-text">Мы работаем уже более 3 лет и за это время оказали услугу такси/трансфера более 10 000 раз.</p>
            </li>
            <li class="advantages__card">
              <div class="advantages__card__header">
                <h4 class="advantages__card-title">Всегда вовремя!</h4>
                <div class="advantages-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/advantages/advantages-time.svg" alt="Время"></div>
              </div>
              <p class="advantages-text">Мы работаем уже более 3 лет и за это время оказали услугу такси/трансфера более 10 000 раз.</p>
            </li>
            <li class="advantages__card">
              <div class="advantages__card__header">
                <h4 class="advantages__card-title">Всегда вовремя!</h4>
                <div class="advantages-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/advantages/advantages-time.svg" alt="Время"></div>
              </div>
              <p class="advantages-text">Мы работаем уже более 3 лет и за это время оказали услугу такси/трансфера более 10 000 раз.</p>
            </li> -->
          </div>
        </div>
      </div>
    </section>
    <section class="section region">
      <div class="container">
        <h2 class="region-title" data-title-bg="regions">Регионы обслуживания</h2>
        <div class="region__body">
          <div class="region__content">
            <?php 
              global $post;
              $id = 5;
              $category = get_category(5);
              
              $posts = get_posts(array(
                'numberposts' => 15,
                'category' => $id,
                'orderby' => 'title',
                'order' => 'ASC'
              ));
              // var_dump($posts);
            ?>
            <?php 
              $count = count($posts);
              $random = rand(1, $count) - 1;
            ?>
            <div class="region-img"><?php echo get_the_post_thumbnail($posts[$random]->ID, array(460, 'auto')); ?></div>
            <h3 class="region-subtitle"><?php echo $category->name; ?></h3>
            <ul class="region__list">
              <?php 
                foreach($posts as $post) { 
                  setup_postdata($post); ?>
                  <li><a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a></li>
                <?php }
                wp_reset_postdata();
              ?>
              <!-- <li><a href="#" title="Алупка">Алупка</a></li>
              <li><a href="#" title="Береговое">Береговое</a></li>
              <li><a href="#" title="Виноградное">Виноградное</a></li>
              <li><a href="#" title="Восход">Восход</a></li>
              <li><a href="#" title="Высокогорное">Высокогорное</a></li>
              <li><a href="#" title="Высокогорное">Высокогорное</a></li>
              <li><a href="#" title="Гаспра">Гаспра</a></li>
              <li><a href="#" title="Голубой Залив">Голубой Залив</a></li>
              <li><a href="#" title="Горное">Горное</a></li>
              <li><a href="#" title="Гурзуф">Гурзуф</a></li>
              <li><a href="#" title="Даниловка">Даниловка</a></li>
              <li><a href="#" title="Кацивели">Кацивели</a></li>
              <li><a href="#" title="Кореиз">Кореиз</a></li>
              <li><a href="#" title="Краснокаменка">Краснокаменка</a></li>
              <li><a href="#" title="Куйбышево">Куйбышево</a></li> -->
            </ul>
            <a href="<?php echo get_permalink(28); ?>" class="btn-outline region-btn">Смотреть все города</a>
          </div>
          <?php get_template_part('wp-parts/region-map'); ?>
        </div>
      </div>
    </section>
    <section class="section section brand">
      <div class="container">
        <h2 class="brand-title" data-title-bg="brands">Марки авто в нашем автопарке</h2>
        <div class="brand__body">
          <ul class="brand__list">
            <?php 
              global $post;

              $posts = get_posts(array(
                'numberposts' => 20,
                'category' => 9,
              ));

              foreach($posts as $post) {
                setup_postdata($post);
                get_template_part('wp-articles/autopark');
              }

              wp_reset_postdata();
            ?>
            <!-- <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/1.png" alt="volkswagen"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="audi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/2.png" alt="audi"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="bmw"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/3.png" alt="bmw"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="ford"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/4.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/5.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/6.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/7.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/8.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/9.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/10.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/11.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/12.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/13.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/14.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/15.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/16.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/17.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/18.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/19.png" alt="ford"></a></li>
            <li class="brand-item"><a href="#" class="brand-link" title="volkswagen"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/20.png" alt="ford"></a></li> -->
          </ul>
        </div>
      </div>
    </section>
    <section class="section news">
      <div class="container">
        <h2 class="news-title" data-title-bg="news">Наши новости</h2>
        <div class="news__body">
          <?php 
            global $post;

            $posts = get_posts(array(
              'numberposts' => 3,
              'category' => [-6,-7,-8,-9,-3],
            ));
 
            foreach($posts as $post) {
              setup_postdata($post);
              get_template_part('wp-parts/article');
            }

            wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>
    <section class="section clients">
      <div class="container">
        <h2 class="clients-title" data-title-bg="clients">Среди наших клиентов</h2>
        <div class="clients__body">
          <div class="clients__list">
            <?php 
              global $post;

              $posts = get_posts(array(
                'numberposts' => 14,
                'category' => 7,
              ));

              foreach($posts as $post) {
                setup_postdata($post);
                get_template_part('wp-parts/article-client');
              }

              wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </section>
    <section class="section reviews">
      <div class="container">
        <div class="reviews__header">
          <h2 class="reviews-title" data-title-bg="reviews">Отзывы</h2>
        </div>
        <div class="reviews__body swiper-container">
          <div class="reviews__list swiper-wrapper">
            <?php
              global $post;

              $posts = get_posts(array(
                'numberposts' => 10,
                'category' => 6,
              ));

              foreach($posts as $post) {
                setup_postdata($post);
                set_query_var('swiper-slide', 'swiper-slide');
                get_template_part('wp-parts/article-review');
              }
              
              wp_reset_postdata();
            ?>
          </div>
          <div class="reviews__cards__pagination"></div>
        </div>
        <div class="reviews__buttons">
          <a href="<?php echo home_url() . '/reviews#review'; ?>" class="btn reviews-btn-add">Оставить отзыв</a>
          <a href="<?php echo home_url() . '/reviews'; ?>" class="btn-outline reviews-btn-show">Смотреть все отзывы</a>
        </div>
      </div>
    </section>
    <section class="section faq">
      <div class="container">
        <div class="faq__header">
          <h2 class="faq-title" data-title-bg="faq">Остались вопросы?</h2>
        </div>
        <div class="faq__body">
          <div class="faq__content">
            <p class="faq-text">Не нашли на сайте ответ на свой вопрос? В этом разделе мы собрали одни из самых популярных вопросов наших клиентов.
              <br><br>
              Если среди этого списка нет вашего вопроса, напишите к нам в тех. поддержку. Мы с радостью поможем вам и проконсультируем по всем вопросам!</p>
          </div>
          <div class="faq__acc__list">
            <?php 
              global $post;

              $posts = get_posts(array(
                'numberposts' => 10,
                'category' => 8,
              ));
              $i = 1;

              foreach($posts as $post) {
                setup_postdata($post);
                if ($i === 1) { set_query_var('acc-class', ' _open'); } else { set_query_var('acc-class', ''); }
                get_template_part('wp-parts/article-faq');
                $i++;
              }

              wp_reset_postdata();
            ?>
            <!-- <div class="faq__acc">
              <div class="faq__acc__header">
                <h3 class="faq__acc-title">Можно курить в машине?</h3>
                <div class="faq__acc-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/faq/arrow.svg" alt="стрелка"></div>
              </div>
              <div class="faq__acc__body">
                <p class="faq__acc-text">В доп. услугах вы можете выбрать услугу <a href="#">курящий салон</a>. Если вы заказали автомобиль без этой услуги, то курение в салоне запрещено!</p>
              </div>
            </div>
            <div class="faq__acc">
              <div class="faq__acc__header">
                <h3 class="faq__acc-title">Можно курить в машине?</h3>
                <div class="faq__acc-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/faq/arrow.svg" alt="стрелка"></div>
              </div>
              <div class="faq__acc__body">
                <p class="faq__acc-text">В доп. услугах вы можете выбрать услугу <a href="#">курящий салон</a>. Если вы заказали автомобиль без этой услуги, то курение в салоне запрещено!</p>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>