/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./assets/js/**/*.js",
  ],
  theme: { 
      extend: {
      screens: {
        xs: "270px"
      },
    } 
  },
  plugins: [],
  // Optional: keep dynamic/conditional classes from being purged
  // safelist: [{ pattern: /(bg|text|border)-(red|blue|green|gray)-(100|200|300|400|500|600|700)/ }]
};


