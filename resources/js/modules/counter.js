export default function initCounterAnimation() {
    const counters = document.querySelectorAll(".section-about-counter-item");
    let animated = false;

    const animateCounter = (counter, targetValue) => {
        const stepTime = Math.abs(2000 / (targetValue / 10));
        let count = 0;

        const timer = setInterval(() => {
            count += 10;
            counter.textContent = count;
            if (count >= targetValue) {
                counter.textContent = targetValue; // Чтобы точно установить конечное значение
                clearInterval(timer);
            }
        }, stepTime);
    };

    const checkAnimation = () => {
        if (animated) return;

        const sectionCount = document.getElementById("section-counter-script");
        const rect = sectionCount.getBoundingClientRect();

        if (rect.top < window.innerHeight && rect.bottom >= 0) {
            counters.forEach((counter) => {
                animateCounter(
                    counter,
                    parseInt(counter.getAttribute("data-target"), 10)
                );
            });
            animated = true;
        }
    };

    window.addEventListener("scroll", checkAnimation);
    checkAnimation();
}
