import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        resolve:{
        alias:{
            '#':'resources/css/dahsboard/',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    }
    ],
    resolve:{
        alias:{
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    }

});
