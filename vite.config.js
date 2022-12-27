import { defineConfig } from 'vite';
import Swal from 'sweetalert2/dist/sweetalert2.js'

import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
