const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
export default {
    content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Work Sans", ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xs: ".75rem",
                sm: ".875rem",
                tiny: ".875rem",
                base: "1rem",
                lg: "1.333rem",
                xl: "1.777rem",
                "2xl": "2.369rem",
                "3xl": "3.157rem",
                "4xl": "4.209rem",
                "5xl": "5.332rem",
                "6xl": "6.665rem",
                "7xl": "7.998rem",
            },
            colors: {
                blue: {
                    DEFAULT: "#0051E0",
                },
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
}
