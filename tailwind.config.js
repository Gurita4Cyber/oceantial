/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{html,js,php}',
    './about/*.{php,js,html}',
    './inc/*.{php,js,html}',
    './id/*.{php,js,html}',
    './how-it-works/*.{php,js,html}'
  ],
  theme: {
    extend: {
     
      colors : {
        "bg-section"  : '#F6F6F6',
        "btnbg"  : '#964F4C',
        "bgstart" : '#ffce31',
        "title2" : '#232020',
        "border2" : '#D2D3D3',
        "btnsosmed" : '#E0DED4',
        "font-small" : '#6C6C71',
        "font-nav":'#797A7B'
        
        
        
      }
    },
  },
  plugins: [],
}

