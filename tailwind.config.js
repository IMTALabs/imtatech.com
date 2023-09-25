const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./resources/**/*.antlers.html",
        "./resources/**/*.antlers.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./content/**/*.md",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/@frostui/tailwindcss/dist/*.js",
    ],
    darkMode: ["class"],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "1rem",
                md: "1rem",
                lg: "1rem",
                xl: "3rem",
                "2xl": "13rem",
            },
        },

        fontFamily: {
            body: ["Be Vietnam Pro", "sans-serif"],
        },

        extend: {
            colors: {
                primary: colors.blue[600],
            },
        },
    },
    plugins: [
        require("@frostui/tailwindcss/plugin"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
