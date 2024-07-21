export default function initBackToTop() {
    const backToTopButton = document.getElementById("back_to_top");

    const toggleButtonVisibility = () => {
        // Получение высоты прокрутки (в пикселях), свыше которой кнопка будет показываться
        const scrollTriggerHeight = window.innerHeight / 2;

        if (window.scrollY > scrollTriggerHeight) {
            backToTopButton.style.opacity = "1";
            backToTopButton.style.visibility = "visible";
        } else {
            backToTopButton.style.opacity = "0";
            backToTopButton.style.visibility = "hidden";
        }
    };

    // Добавление слушателя события на прокрутку страницы
    window.addEventListener("scroll", toggleButtonVisibility);

    // Добавление слушателя события на клик по кнопке
    backToTopButton.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
        });
    });

    // Первоначальная проверка видимости кнопки
    toggleButtonVisibility();
}
