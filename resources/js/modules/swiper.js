import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

export default function initSwiper() {
    // Инициализация слайдера
    new Swiper(".swiper-hero-default-page", {
        simulateTouch: true,
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    new Swiper(".swiper-offer-single-page", {
        slidesPerView: 3,
        spaceBetween: 15,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom",
        },
    });

    new Swiper(".swiper-logo-company", {
        slidesPerView: 6,
        spaceBetween: 15,
        loop: true,
        autoplay: {
            delay: 1000,
        },
    });
}
