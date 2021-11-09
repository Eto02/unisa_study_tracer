module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    
    extend: {
      colors:{
      'base':'#046307',
    },
  },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
