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
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
