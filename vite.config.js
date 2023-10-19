import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/menu.css",
                "resources/js/app.js",
                "resources/sass/app.scss",
                "resources/css/background.css",
                "public/js/menu.js",
            ],
            refresh: true,
        }),
    ],
});