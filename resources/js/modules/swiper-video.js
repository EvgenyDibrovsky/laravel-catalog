import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

export default function initSwiperVideo() {
    // Initialize the thumbs swiper
    const thumbsSwiper = new Swiper(".swiper-video-thumbs", {
        slidesPerView: 5,
        direction: "vertical",
        spaceBetween: 15,
        loop: true,

        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom",
        },
    });

    // Initialize the main swiper
    const swiper = new Swiper(".swiper-video", {
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000,
        },
        thumbs: {
            swiper: thumbsSwiper,
        },
        on: {
            slideChangeTransitionStart: function () {
                // Pause all videos and iframes when transition starts
                swiper.slides.forEach((slide) => {
                    const videos = slide.querySelectorAll("video");
                    videos.forEach((video) => video.pause());

                    const iframes = slide.querySelectorAll("iframe");
                    iframes.forEach((iframe) => {
                        iframe.contentWindow.postMessage(
                            '{"event":"command","func":"pauseVideo","args":""}',
                            "*"
                        );
                    });
                });
            },
            slideChangeTransitionEnd: function () {
                const activeSlide = swiper.slides[swiper.activeIndex];
                const videoElements = activeSlide.querySelectorAll("video");
                const iframeElements = activeSlide.querySelectorAll("iframe");

                // Play videos in the active slide
                videoElements.forEach((video) => video.play());

                // Play iframe videos in the active slide
                iframeElements.forEach((iframe) => {
                    iframe.contentWindow.postMessage(
                        '{"event":"command","func":"playVideo","args":""}',
                        "*"
                    );
                });
            },
        },
    });

    // Disable Swiper dragging when interacting with iframes
    document.querySelectorAll("iframe").forEach((iframe) => {
        iframe.addEventListener("mouseenter", () => {
            swiper.allowTouchMove = false;
        });

        iframe.addEventListener("mouseleave", () => {
            swiper.allowTouchMove = true;
        });
    });

    // Manually trigger swiper initialization
    swiper.init();
}
