import initBackToTop from "./modules/back-to-top";
import iniDarkMode from "./modules/dark-mode";
import initSwiper from "./modules/swiper";
import initCounterAnimation from "./modules/counter";
// import("fslightbox");

document.addEventListener("DOMContentLoaded", function () {
    initBackToTop();
    iniDarkMode();
    initSwiper();
    initCounterAnimation();
});
/**
 * Don't delete!
 * Enable Hot Module Reload for Dev
 */
if (import.meta.webpackHot) {
    import.meta.webpackHot.accept();
}
