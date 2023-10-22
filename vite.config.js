import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    
    //jQueryを使用する
    // resolve: {
    //     alias: {
    //         vue:'vue/dis/vue.esm-bundler.js',
    //         '$':'jQuery',
    //     },
    // },
});
