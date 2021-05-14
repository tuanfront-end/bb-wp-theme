module.exports = {
  mode: "jit",
  important: true,
  purge: [
    "./src/**/*.html",
    "./src/**/*.{js,jsx,ts,tsx,vue}",
    "../*.php",
    "../template-parts/*.php",
    "../template-parts/**/*.php",
  ],
  darkMode: "class", // or 'media' or 'class'
  theme: {
    container: {
      padding: "1rem",
    },
    fontFamily: {
      display: ["Inter"],
      body: ["Inter"],
    },
    extend: {
      colors: {
        "bg-button-1": "#E6E6FF",
        gray: {
          50: "#F0F4F8",
          100: "#D9E2EC",
          200: "#BCCCDC",
          300: "#9FB3C8",
          400: "#829AB1",
          500: "#627D98",
          600: "#486581",
          700: "#334E68",
          800: "#243B53",
          900: "#102A43",
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require("@tailwindcss/line-clamp"),
    require("@tailwindcss/typography"),
    require("@tailwindcss/forms"),
    require("@tailwindcss/aspect-ratio"),
  ],
};
