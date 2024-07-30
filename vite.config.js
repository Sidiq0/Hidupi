import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/style.css',
                    'resources/js/app.js', 'resources/js/main.js', 'resources/js/validate.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources'
        }
    }
});
