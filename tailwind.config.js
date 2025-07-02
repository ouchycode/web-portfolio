import defaultTheme from "tailwindcss/defaultTheme";

export default {
    theme: {
        extend: {
            colors: {
                primary: "#5DA9E9",
                accent: "#457B9D",
            },
        },
    },
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    plugins: [],
};
