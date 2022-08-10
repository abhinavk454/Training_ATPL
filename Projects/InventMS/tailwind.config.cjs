/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["views/*.ejs", "public/**/*.ejs", "public/**/*.html"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
};
