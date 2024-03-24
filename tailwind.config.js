import forms from "@tailwindcss/forms";

export default {
  content: ["./site/**/*.php", "./site/**/*.yml"],
  future: {
    hoverOnlyWhenSupported: true,
  },
  theme: {
    extend: {},
  },
  plugins: [forms],
};
