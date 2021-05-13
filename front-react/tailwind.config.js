module.exports = {
  mode: "jit",
  purge: [
    "./src/**/*.html",
    "./src/**/*.{js,jsx,ts,tsx,vue}",
    "../*.php",
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
    extend: {},
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
