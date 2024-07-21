export default function initDarkMode() {
    const themeToggleButton = document.getElementById("theme-toggle");
    const iconDark = document.getElementById("icon-dark");
    const iconLight = document.getElementById("icon-light");

    // Function to set the theme
    function setTheme(theme) {
        if (theme === "dark") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme", "dark");
            iconDark.classList.remove("hidden");
            iconLight.classList.add("hidden");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("theme", "light");
            iconDark.classList.add("hidden");
            iconLight.classList.remove("hidden");
        }
    }

    // Event listener for button
    themeToggleButton.addEventListener("click", () => {
        const currentTheme = localStorage.getItem("theme");
        if (currentTheme === "dark") {
            setTheme("light");
        } else {
            setTheme("dark");
        }
    });

    // Load theme from localStorage
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        setTheme(savedTheme);
    } else {
        // Default to light theme
        setTheme("light");
    }
}
