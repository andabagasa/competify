import './bootstrap';
import Swiper from 'swiper/bundle';

let swiperLomba = new Swiper('.swiper-lomba', {
    // Optional parameters
    loop: true,
    grabCursor: true,
    spaceBetween: 16,
    slidesPerView: 4,
    slidesPerGroup: 1,
    slidesPerColumn: 1,

    // Navigation arrows
    navigation: {
        nextEl: '.btn-next-lomba',
        prevEl: '.btn-prev-lomba',
    },
});

let swiperPartner = new Swiper('.swiper-partner', {
    // Optional parameters
    loop: true,
    grabCursor: true,
    spaceBetween: 16,
    slidesPerView: 4,
    slidesPerGroup: 1,
    slidesPerColumn: 1,

    // Navigation arrows
    navigation: {
        nextEl: '.btn-next-partner',
        prevEl: '.btn-prev-partner',
    },
});
