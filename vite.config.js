import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/base.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',
        rollupOptions: {
            output: {
                manualChunks: {
                    alpinejs: ['alpinejs']
                }
            }
        }
    },
    server: {
        host: 'heraconnecting.local', // Usa tu dominio personalizado
        hmr: {
            host: 'heraconnecting.local'
        },
    },
});
