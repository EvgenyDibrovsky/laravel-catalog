/** @type {import('tailwindcss').Config} */

module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            xs: "320px", // extra small devices, phones
            sm: "640px", // small devices, tablets
            md: "768px", // medium devices, small laptops
            lg: "1024px", // large devices, laptops
            xl: "1280px", // extra large devices, large laptops, desktops
            xxl: "1440px", // xxl devices, large desktops
            // "2xl": "1920px", // Full HD screens
            // "3xl": "2560px", // QHD screens
            // "4xl": "3840px", // 4K screens
            // "5xl": "100%", // covers everything above
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "15px",
                lg: "20px", // large devices, laptops
                xl: "25px", // extra large devices, large laptops, desktops
                xxl: "30px", // xxl devices, large desktops
                // "2xl": "35px", // Full HD screens
                // "3xl": "40px", // QHD screens
                // "4xl": "45px", // 4K screens
                // "5xl": "50px", // covers everything above
            },
        },
        extend: {
            colors: {
                // Header
                bgHeader: "#fff",
                darkBgHeader: "#1f1f1f",
                // Footer
                bgFooter: "#e3e3e3",
                bgFooterMini: "#333333",
                darkBgFooter: "#1f1f1f",
                darkBgFooterMini: "#111111",
            },
            backgroundImage: {
                "arrow-select": "url('/public/images/arrow-select.svg')",
                hero: "url('/public/images/backround/bg-hero.jpg')",
                auth: "url('/public/images/backround/bg-auth.jpg')",

                bgCheck: "url('/public/images/check.svg')",
            },
            fontSize: {
                heroTitle: ["32px", "normal"],
                titleH1: ["24px", "normal"],
                titleH2: ["22px", "normal"],
                titleH3: ["20px", "normal"],
                titleH4: ["16px", "normal"],
                titleH4Slider: ["18px", "normal"],
                content: ["18px", "24px"],

                titleH1Dashboard: ["18px", "normal"],

                mainMenu: ["18px", "normal"],
                langSwitcher: ["14px", "normal"],
                iconHeader: ["16px", "normal"],
                logoText: ["10px", "normal"],
                textContent: ["14px", "normal"],

                mainMenuFooter: ["16px", "normal"],

                textFotterMini: ["12px", "normal"],
            },
        },
    },
    plugins: [],
};
