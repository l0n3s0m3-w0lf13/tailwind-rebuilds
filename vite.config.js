import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/pages.css',
                'resources/js/app.js',
                'resources/assets/sass/icons.scss',
                'resources/assets/sass/trail.scss',
                'resources/assets/sass/loader.scss'
            ],
            refresh: true,
        }),
    ],
});
