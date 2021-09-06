import Swiper, { Navigation } from 'swiper';

function init() {

    Swiper.use([Navigation]);

    const addServicesSlider = new Swiper(".add-services-slider__swiper", {
        slidesPerView: 1,
        navigation: {
            nextEl: '.add-services-slider__arrow--next',
            prevEl: '.add-services-slider__arrow--prev'
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 25
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 28,
                slidesPerColumn: 1
            }
        }
    });
}

export default { init }