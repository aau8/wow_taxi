<?php 
    /**
     * Template Name: Город
     * Template Post Type: post
     */
?>
<?php get_header(); ?>
<?php get_template_part('wp-parts/bread'); ?>
<section class="city">
    <div class="container">
        <div class="city__header">
            <h1 class="city-title"><?php the_title(); ?></h1>
        </div>
        <div class="city__body">
            <div class="city-thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/city3.png" alt=""></div>
            <div class="content city__content">
                <h2>О городе</h2>
                <p>Город Симферополь — это центр Крыма во всех смыслах. Географическое положение почти посередине полуострова, транспортное — именно отсюда во все стороны разбегаются автомобильные и железные дороги. 
                    И, конечно же, административное, Симферополь — столица Республики Крым.</p>
                <p>Несмотря на то, что этот город не имеет выхода к морю и не является «любимым» местом для туристов,
                    Площадь горда Симферополя – 107,41 кв. км, население – около 340 тысяч человек.</p>
                <h2>История</h2>
                <p>Во II веке до н. э. на месте Симферополя стоял старинный город Неаполь Скифский, однако датой основания современного города считается июнь 1784 года. Именно тогда, согласно приказу Императрицы Екатерины Великой, были воздвигнуты первые строения города. Приказ был отдан Григорию Потёмкину – фавориту Императрицы, и состоял в том, чтобы построить город в центре Тавриды. На выбор места для строительства повлияла близость реки Салгир и татарского местечка Ак-Мечеть.</p>
                <h2>Климат</h2>
                <p>Климат в Симферополе – умеренно континентальный. На него также влияет необычное расположение города – на границе между степной и горной зоной. Поэтому его также можно охарактеризовать как сухостепной и предгорный. Зима в городе, как правило, очень тёплая и малоснежная. Средняя температура чуть превышает отметку 0° С. </p>
                <p>Лето в городе жаркое, даже можно сказать знойное. Средняя температура превышает 25° С. Симферопольское лето отличается своей длительностью. Иногда оно может начаться в начале апреле, а закончится в октябре.</p>
                <h2>Отдых</h2>
                <p>Симферополь не курортный город, моря тут нет, поэтому принято считать, что смотреть здесь особо не на что. И совершенно зря. В городе есть достаточно много очень интересных и памятных мест. Главной достопримечательностью Симферополя можно считать Неаполь Скифский.</p>
            </div>
        </div>
    </div>
</section>
<section class="section info">
    <div class="container">
        <div class="info__body">
            <ul class="info__list">
                <li class="info__card">
                    <div class="info__card-icon">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 20.5L18 27L38 7M39.0949 15.1889C39.6826 17.0205 40 18.9732 40 21C40 31.4934 31.4934 40 21 40C10.5066 40 2 31.4934 2 21C2 10.5066 10.5066 2 21 2C25.0995 2 28.8957 3.29832 32 5.50621" stroke="#F3CC3F" stroke-width="3"/>
                        </svg>
                    </div>
                    <h2 class="info__card-title">Более 500 <br>поездок выполнено</h2>
                    <p class="info__card-text">Мы уже, успешно организовали более, 500 поездок в город Симферополь.</p>
                </li>
                <li class="info__card">
                    <div class="info__card-icon">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 12.4663H34C35.3807 12.4663 36.5 13.5856 36.5 14.9663V35.9663C36.5 37.347 35.3807 38.4663 34 38.4663H7C5.61929 38.4663 4.5 37.347 4.5 35.9663V14.9663C4.5 13.5856 5.61929 12.4663 7 12.4663Z" stroke="#F3CC3F" stroke-width="3"/>
                            <path d="M30.7284 7.59186V5.04806C30.7284 3.60833 29.253 2.64024 27.9322 3.21335L5.72852 12.8484" stroke="#F3CC3F" stroke-width="3" stroke-linejoin="round"/>
                            <circle cx="29.4258" cy="25.4663" r="3" fill="#F3CC3F"/>
                        </svg>
                    </div>
                    <h2 class="info__card-title">Средняя цена <br>в этом регионе</h2>
                    <p class="info__card-text">В этом регионе средняя цена варируется в районе $2 на одного человека.</p>
                </li>
                <li class="info__card">
                    <div class="info__card-icon">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M36.4481 8.14619C35.9766 7.46506 35.0422 7.29516 34.361 7.76671C33.6799 8.23826 33.51 9.17269 33.9816 9.85381L36.4481 8.14619ZM39.7148 15.5L40.9148 16.4C41.3022 15.8835 41.3156 15.177 40.9481 14.6462L39.7148 15.5ZM34.0148 20.6C33.5178 21.2627 33.6521 22.2029 34.3148 22.7C34.9776 23.1971 35.9178 23.0627 36.4148 22.4L34.0148 20.6ZM33.9816 9.85381L38.4816 16.3538L40.9481 14.6462L36.4481 8.14619L33.9816 9.85381ZM38.5148 14.6L34.0148 20.6L36.4148 22.4L40.9148 16.4L38.5148 14.6Z" fill="#F3CC3F"/>
                            <path d="M2.21471 17C3.04922 27.1136 15.2147 39.5 15.2147 39.5C15.2147 39.5 27.3802 27.1136 28.2147 17C28.3753 15.054 28.6046 13.9133 28.2147 12C26.9359 5.72389 21.6198 2 15.2147 2C8.80963 2 3.49354 5.72389 2.21471 12C1.82485 13.9133 2.05414 15.054 2.21471 17Z" stroke="#F3CC3F" stroke-width="3" stroke-linejoin="round"/>
                            <circle cx="15.2148" cy="15.3086" r="3" fill="#F3CC3F"/>
                        </svg>
                    </div>
                    <h2 class="info__card-title">Популярные маршруты <br>в городском округе Ялта</h2>
                    <button class="btn info__card-btn">Узнать подробнее</button>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="section list">
    <div class="container">
        <h2 class="list-title">Курорты в Симферополе</h2>
        <div class="list__body">
            <ul class="list__list">
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Горное</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/1.png" alt=""></div>
                    </a>
                </li>
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Апельсин</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/2.png" alt=""></div>
                    </a>
                </li>
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Николаевка</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/3.png" alt=""></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="section list">
    <div class="container">
        <h2 class="list-title">Достопримечательности</h2>
        <div class="list__body">
            <ul class="list__list">
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Неаполь Скифский</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/4.png" alt=""></div>
                    </a>
                </li>
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Мечеть Кебир-Джами</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/5.png" alt=""></div>
                    </a>
                </li>
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Дом Воронцова</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/6.png" alt=""></div>
                    </a>
                </li>
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Детский парк</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/7.png" alt=""></div>
                    </a>
                </li>
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Симферопольская кенасса</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/8.png" alt=""></div>
                    </a>
                </li>
                <li class="regions__card">
                    <a href="#" class="regions-link">
                        <h3 class="regions__card-title">Петропавловский собор</h3>
                        <button class="btn regions__card-btn">Подробнее</button>
                        <div class="regions__card-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cities/9.png" alt=""></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="section banner">
    <div class="container">
        <div class="banner__body">
            <div class="banner__content">
                <h2 class="banner-title">Вам также может быть интересно</h2>
                <p class="banner-text">Популярные маршруты в городском округе Ялта</p>
            </div>
            <button class="btn banner-btn">Подробнее</button>
        </div>
    </div>
</section>
<?php get_footer(); ?>