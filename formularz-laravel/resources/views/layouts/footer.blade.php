@vite(['resources/css/layouts/footer.css'])

<!-- Komponent formularza kontaktowego -->
<x-contact-form :name="$name" :email="$email" :containerClass="'footer-form-container'" />
