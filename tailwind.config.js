/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./assets/js/**/*.js",
  ],
  safelist: [
    'flex','flex-col','w-full','lg:w-[600px]','mx-auto','pt-6','lg:pt-8',
    'pb-2','lora','lora-medium',
    'h-12','mb-6','border','rounded-xl',
    'h-[180px]','pl-3','pt-3',
    'px-6','py-3','bg-[var(--footer-cta-bg)]','max-w-[102px]','text-white',
    'hover:scale-105','transition-all','hover:shadow-lg','border-[var(--footer-cta-bg)]',
    'hover:bg-[var(--main-bg)]','hover:text-black'
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


