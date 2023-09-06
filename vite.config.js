import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/css/main.css','resources/css/style.css', 'resources/js/main.js'],
            refresh: true,
        }),
    ],
});
