const config = {
  content: ["./src/**/*.{html,js,svelte,ts}"],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#8c3e74",
        primarydark: "#753562",
      },
    },
  },

  plugins: [require("@tailwindcss/typography")],
};

module.exports = config;
