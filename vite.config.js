import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
            'resources/css/my_css.css',
            'resources/css/my_footer_css.css',
            'resources/css/bootstrap.min.css',
            'resources/css/dashboard.css',
            'resources/js/jquery-3.7.1.min.js',
            'resources/js/search.js',
            'resources/js/app.js',
            'resources/js/bootstrap.js',
            'resources/js/bootstrap.bundle.min.js',
            'resources/js/jquery-events.js',
        ],
            refresh: true,
        }),
    ],
});
