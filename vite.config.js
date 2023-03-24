import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import createSvgSpritePlugin from 'vite-plugin-svg-sprite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        createSvgSpritePlugin({
            include: 'resources/icons/*.svg',
            symbolId: 'icon-[name]-[hash]',
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
