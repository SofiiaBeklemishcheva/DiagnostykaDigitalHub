import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/home.css',  // Dodajemy home.css
                'resources/css/layouts/header.css',
                'resources/css/layouts/footer.css',
                'resources/css/components/buttons/submit-input.css',
                'resources/css/components/input/date-input.css',
                'resources/css/components/input/email-input.css',
                'resources/css/components/input/select-input.css',
                'resources/css/components/input/text-input.css',
                'resources/css/components/input/textarea-input.css',
                'resources/css/components/forms/cake-order-form.css',
                'resources/css/components/forms/contact-form.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
