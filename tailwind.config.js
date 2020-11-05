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
            },
            textColor: {
                dark: {
                    primary: 'var(--dark-text-color-primary)',
                    important: 'var(--dark-text-color-important)',
                },
            },
            borderColor: {
                dark: {
                    primary: 'var(--dark-bg-color-primary)',
                    secondary: 'var(--dark-bg-color-secondary)',
                    important: 'var(--dark-bg-color-important)',
                    hover: 'var(--dark-bg-color-hover)',
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
    variants: {},
    plugins: [],
}
