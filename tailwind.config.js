module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container:{
      center:true,
    },
    extend: {
      colors:{
        green:{
          100:'#009200',
          150:'#1E8449',
          200:'#8CBE11',
          300:'#808000',
          400:'#34D399', 
        },
        grey:{
          100:'#d6d7d8',
          200:'#A9A9A9',
          300:'#808080'
        }
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
