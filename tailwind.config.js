/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./application/views/**/*.{php,html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'radial-gradient': 'radial-gradient(circle 250px at center, #65A8FB, #F3F3FD)',
      },
      boxShadow: {
        Button: '0 4px 8px 0 rgba(0, 0, 0, 0.1)',
        Card: '0 2px 12px 0 rgba(0, 0, 0, 0.15)',
        Popup: '0 8px 20px 0 rgba(0, 0, 0, 0.07)',
      },
      colors: {
        Main1: '#2196F3',
        Main2: '#42A5F5',
        Main3: '#64B5F6',
        Main4: '#90CAF9',
        Main5: '#BBDEFB',
        Main6: '#E3F2FD',
        Main7: '#65A8FB',
        Main8: '#3D93FF',
        Main9: '#1678F2',
        White: '#FFFFFF',
        Bg1: '#EDF2FB',
        Bg2: '#E2EAFC',
        Bg3: '#F3F3FD',
        Bg4: {
          default: '#65A8FB',
          30: 'rgba(101, 168, 251, 0.3)', // 30% opacity
        },
        Button1: {
          default: '#F3F3FD',
          40: 'rgba(243, 243, 253, 0.4)', // 40% opacity
        },
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
}