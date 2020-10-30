module.exports = {
    important: true,
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
        },
    },
    variants: {},
    plugins: [],
}
