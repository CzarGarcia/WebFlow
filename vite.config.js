import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';



export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/web/js/webflow.js',
                    'resources/web/css/webflow.css',
                    'resources/web/css/normalize.css',
                    'resources/web/css/honda-motos2.webflow.css',
            ],
            refresh: [
                    "resources/admin/**",
                    "resources/web/**",
                    "routes/**",
                ],
        }),
    ],
});
