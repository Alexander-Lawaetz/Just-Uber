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
                primary: 'var(--bg-color-primary)',
                secondary: 'var(--bg-color-secondary)',
                important: 'var(--bg-color-important)',
                hover: 'var(--bg-color-hover)',
            },
            color: {
                primary: 'var(--text-color-primary)',
            }
        },
    },
    variants: {},
    plugins: [],
}
