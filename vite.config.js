import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "public/js/delete.js",
                "public/js/menu.js",
                "resources/css/app.css",
                "resources/css/menu.css",
                "resources/sass/app.scss",
                "resources/css/background.css",
                "resources/sass/_variables.scss",
            ],
            refresh: true,
        }),
    ],
});
