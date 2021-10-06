const postSlider = new Swiper('.content__slider', {

    slidesPerView: 1, // Кол-во показываемых слайдов
    spaceBetween: 0, // Расстояние между слайдами
    loop: true, // Бесконечный слайдер
    //   freeMode: true, // Слайдеры не зафиксированны
    // effect: 'fade',


    breakpoints: {
        1200: {

        },
        700: {

        },
        400: {

        }
    },

    pagination: {
        el: '.content-pagination',
    },

    navigation: {
        nextEl: '.content__arrow-next',
        prevEl: '.content__arrow-prev',
    },
});