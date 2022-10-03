const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    mode: 'jit',
    content: [
        './*/*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),

            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
            },
            backgroundColor: {
                'darkBlue'     : '#00152e',
                'orange'       : '#ff961c',
                'offWhite'     : '#dde4ed',
                'NeonBlue'     : '#546eff',
                'darkgrey'     : '#252b32',
                'darkCynaBlue' : '#1a2d43',
                'cynaBlue'     : '#011a39'
            },
            textColor: {
                'darkBlue'   : '#00152e',
                'orange'     : '#ff961c',
                'offWhite'   : '#dde4ed',
                'NeonBlue'   : '#546eff',
                'cyanblue'   : '#252b32'
            },
            lineHeight: {
                '73px'  : '73px',
                '66px'  : '66px',
                '50px'  : '50px',
                '45px'  : '45px',
                '42px'  : '42px',
                '40px'  : '40px',
                '30px'  : '30px',
                '28px'  : '28px',
                '27px'  : '27px',
                '26px'  : '26px',
                '25px'  : '25px',
                '22px'  : '22px',
                '16px'  : '16px'
            },
            fontSize: {
                '42px'  : '42px',
                '58px'  : '58px',
                '38px'  : '38px',
                '32px'  : '32px',
                '31px'  : '31px',
                '26px'  : '26px',
                '22px'  : '22px',
                '19px'  : '19px',
                '17px'  : '17px',
                '15px'  : '15px',
                '11px'  : '11px'
            },
            padding: {
                '232px'  : '232px',
                '226px'  : '226px',
                '180px'  : '180px',
                '165px'  : '165px',
                '155px'  : '155px',
                '142px'  : '142px',
                '141px'  : '141px',
                '138px'  : '138px',
                '128px'  : '128px',
                '126px'  : '126px',
                '125px'  : '125px',
                '120px'  : '120px',
                '119px'  : '119px',
                '114px'  : '114px',
                '113px'  : '113px',
                '106px'  : '106px',
                '104px'  : '104px',
                '100px'  : '100px',
                '80px'   : '80px',
                '78px'   : '78px',
                '72px'   : '72px',
                '70px'   : '70px',
                '65px'   : '65px',
                '58px'   : '58px',
                '55px'   : '55px',
                '53px'   : '53px',
                '52px'   : '52px',
                '50px'   : '50px',
                '49px'   : '49px',
                '47px'   : '47px',
                '45px'   : '45px',
                '40px'   : '40px',
                '34px'   : '34px',
                '30px'   : '30px',
                '27px'   : '27px',
                '25px'   : '25px',
                '22px'   : '22px',
                '21px'   : '21px',
                '20px'   : '20px',
                '19.5px' : '19.5px',
                '18px'   : '18px',
                '15px'   : '15px',
                '7px'    : '7px'
            },
            margin: {
                '120px' : '120px',
                '110px' : '110px',
                '105px' : '105px',
                '99px'  : '99px',
                '97px'  : '97px',
                '95px'  : '95px',
                '90px'  : '90px',
                '86px'  : '86px',
                '80px'  : '80px',
                '72px'  : '72px',
                '70px'  : '70px',
                '68px'  : '68px',
                '63px'  : '63px',
                '59px'  : '59px',
                '55px'  : '55px',
                '53px'  : '53px',
                '52px'  : '52px',
                '47px'  : '47px',
                '45px'  : '45px',
                '35px'  : '35px',
                '43px'  : '43px',
                '42px'  : '42px',
                '35px'  : '35px',
                '34px'  : '34px',
                '33px'  : '33px',
                '31px'  : '31px',
                '30px'  : '30px',
                '28px'  : '28px',
                '27px'  : '27px',
                '25px'  : '25px',
                '23px'  : '23px',
                '22px'  : '22px',
                '21px'  : '21px',
                '18px'  : '18px',
                '15px'  : '15px',
                '13px'  : '13px',
                '11px'  : '11px',
                '9px'  : '9px'
            },
            borderColor: {
                'orange'    : '#ff961c',
                'blue'      : '#3b55c4',
                'NeonBlue'   : '#546eff',
                'd-blue'    : '#2b449c',
                'md-blue'    : '#19306d'
            },
            maxWidth: {
                '1164px'  :  '1164px',
                '1140px'  :  '1140px',
                '1000px'  :  '1000px',
                '910px'   :  '910px',
                '865px'   :  '865px',
                '795px'   :  '795px',
                '760px'   :  '760px',
                '696px'   :  '696px',
                '660px'   :  '660px',
                '620px'   :  '620px',
                '585px'   :  '585px',
                '530px'   :  '530px',
                '520px'   :  '520px',
                '515px'   :  '515px',
                '490px'   :  '490px',
                '482px'   :  '482px',
                '412px'   :  '412px',
                '365px'   :  '365px',
                '232px'   :  '232px',
                '264px'   :  '264px',
                '214px'   :  '214px',
                '186px'   :  '186px',
                '144px'   :  '144px',
                '100px'   :  '100px',
                '94px'    :  '94px',
                '78px'    :  '78px',
                '45px'    :  '45px'
            },
            width: {
                '52' : '52%',
                '48' : '48%',
                '55' : '55%',
                '45' : '45%',
                '94' : '94px',
                '40' : '40px',
                '365': '365px'
            },
            height: {
                '265px' : '265px',
                '78px'  : '78px',
                '48px'  : '48px',
                '40px'  : '40px'
            },
            gap: {
                '68px'  : '68px'
            }
        },
        screens: {
            'xs': '640px',
            'sm': '767px',
            'md': '768px',
            'lg': '1024px',
            'xl': tailpress.theme('settings.layout.wideSize', theme)
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};