module.exports = {
    future: {
        // removeDeprecatedGapUtilities: true,
        // purgeLayersByDefault: true,
    },
    purge: [],
    theme: {
        extend: {
            screens: {
                'dark': {'raw': '(prefers-color-scheme: dark)'},
                // => @media (prefers-color-scheme: dark) { ... }
            },
            backgroundColor: {
                dark: {
                    primary: 'var(--dark-bg-color-primary)',
                    secondary: 'var(--dark-bg-color-secondary)',
                    important: 'var(--dark-bg-color-important)',
                    hover: 'var(--dark-bg-color-hover)',
                },
                light: {
                    primary: 'var(--light-bg-color-primary)',
                    secondary: 'var(--light-bg-color-secondary)',
                    third: 'var(--light-bg-color-third)',
                    important: 'var(--light-bg-color-important)',
                    hover: 'var(--light-bg-color-hover)',
                },
            },
            textColor: {
                dark: {
                    primary: 'var(--dark-text-color-primary)',
                    important: 'var(--dark-text-color-important)',
                },
                light: {
                    primary: 'var(--light-text-color-primary)',
                    secondary: 'var(--light-text-color-secondary)',
                    important: 'var(--light-text-color-important)',
                },
            },
            borderColor: {
                dark: {
                    primary: 'var(--dark-bg-color-primary)',
                    secondary: 'var(--dark-bg-color-secondary)',
                    important: 'var(--dark-bg-color-important)',
                    hover: 'var(--dark-bg-color-hover)',
                },
                light: {
                    primary: 'var(--light-bg-color-primary)',
                    secondary: 'var(--light-bg-color-secondary)',
                    third: 'var(--light-bg-color-third)',
                    important: 'var(--light-bg-color-important)',
                    hover: 'var(--light-bg-color-hover)',
                },
            },
            inset: {
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%',
            },
            height: {
                72: '18rem',
                104: '24rem',
            },
            maxHeight: {
                '(screen-phone)': 'calc(100vw - 14rem)',
            }
        },
    },
    variants: {
        extend: {
            scale: ['active', 'group-hover', 'group-focus'],
        }
    },
    plugins: [],
}
