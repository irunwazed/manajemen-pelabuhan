/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
			colors: {
        primary: '#1e40af',
				warning: '#E65F2B',
				info: '#06b6d4',
				secondary: '#64748b',
				dark: '#060606',
				default: '#EBDFD7',
			},
    },
  },
  plugins: [],
}

