module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'primary-blue': 'rgba(46, 58, 89, 1.0)',
        'primary-blue-10': 'rgba(46, 58, 89, 0.1)',
        'primary-blue-50': 'rgba(46, 58, 89, 0.5)',
        'primary-blue-80': 'rgba(46, 58, 89, 0.8)'
      }
    },
  },
  variants: {
    extend: {
      fontStyle: ['hover', 'focus'],
    },
  },
  plugins: [],
}
