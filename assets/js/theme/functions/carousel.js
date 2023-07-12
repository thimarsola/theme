var swiper = new Swiper(".slide", {
    slidesPerView: "auto",
    spaceBetween: 32,
    autoHeight: true,
    loop: "true",
    loopFillGroupWithBlank: true,
    effect: "fade",
    grabCursor: "true",
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});
