module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: [
        './*.php',
        './templates/**/*.php',
        './build/js/**/*.js',
    ],
    theme: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1348px'
        },
        container: {
            padding: '1.5rem',
            center: true,
        },
        fontFamily: {
            sans: [
                'Manrope',
                'sans-serif',
                'system-ui',
                '-apple-system',
                'BlinkMacSystemFont',
                '"Segoe UI"',
                'Roboto',
                '"Helvetica Neue"',
                'Arial',
                '"Noto Sans"',
                'sans-serif',
                '"Apple Color Emoji"',
                '"Segoe UI Emoji"',
                '"Segoe UI Symbol"',
                '"Noto Color Emoji"',
            ],
            serif: ['Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
            mono: ['Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
        },
        extend: {
            colors: {
                link: {
                    'default': '#3182ce',
                    'hover': '#63b3ed',
                }
                // brandpurple: {
                //     'default': '#af85b7'
                // },
                // brandpink: {
                //     'default': '#ef426f'
                // },
                // brandyellow: {
                //     'default': '#ffc658'
                // },
                // brandorange: {
                //     'default': '#eca154'
                // },
                // brandgreen: {
                //     'default': '#6bbbae'
                // },
                // brandlightgrey: {
                //     'default': '#a2aaad'
                // },
                // brandlightblue: {
                //     'default': '#41b6e6'
                // },
                // branddarkblue: {
                //     'default': '#2e334e'
                // },
                // brandblack: {
                //     'default': '#000000'
                // },
                // brandwhite: {
                //     'default': '#ffffff'
                // }
            },
            fontSize: {
                xxs: '0.675rem',
            },
            lineHeight: {
                tighter: '1.125',
            },
            // margin: {
            //     '60': '15rem',
            //     '80': '20rem',
            //     '96': '24rem',
            //     '384': '96rem',
            //     '-60': '-15rem',
            //     '-80': '-20rem',
            //     '-96': '-24rem',
            //     '-384': '-96rem',
            // },
        }
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
