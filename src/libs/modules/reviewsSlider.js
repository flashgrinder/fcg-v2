import Swiper, { Navigation } from 'swiper';

function init() {

    Swiper.use([Navigation]);

    const reviewsSlider = new Swiper(".reviews-slider__swiper", {
        slidesPerView: 1,
        navigation: {
            nextEl: '.reviews-slider__arrow--next',
            prevEl: '.reviews-slider__arrow--prev'
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            }
        }
    });
}

export default { init }