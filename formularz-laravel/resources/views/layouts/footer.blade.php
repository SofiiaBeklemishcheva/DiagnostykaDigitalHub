<link rel="stylesheet" href="{{ asset('css/layouts/footer.css') }}">
<footer class="footer-container">
<p class="footer-label">Masz pytania? Skontaktuj się z nami -></p>

<x-contact-form :name="$name" :email="$email" :containerClass="'footer-form-container'" />
</footer>
