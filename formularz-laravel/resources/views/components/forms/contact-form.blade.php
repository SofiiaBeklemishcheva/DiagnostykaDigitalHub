<link rel="stylesheet" href="{{ asset('css/components/forms/contact-form.css') }}">
<form class="form-container" action="{{ route('contact.submit') }}" method="POST">
    @csrf

    <x-input.text-input
        id="name"
        name="name"
        label="Imię:"
        :value="old('name', $name)"
        :inputContainerClass="'footer-form-input-container'"
        :inputFieldClass="'footer-form-input-field'"
        :inputLabelClass="'footer-form-label'"
        :isRequired="true"
    />

    <x-input.email-input
        id="email"
        name="email"
        label="Email:"
        :value="old('email', $email)"
        :inputContainerClass="'footer-form-input-container'"
        :inputLabelClass="'footer-form-label'"
        :inputFieldClass="'footer-form-input-field'"
        :isRequired="true"
    />

    <x-input.textarea-input
        id="textarea1"
        name="message"
        label="Opis:"
        value="{{ old('message') }}"
        inputContainerClass="footer-form-input-container"
        inputLabelClass="footer-form-label"
        inputFieldClass="footer-form-input-field-textarea"
        :isRequired="true"
    />

    <x-buttons.submit-input label="Wyślij formularz" class="footer-form-submit-button" />
    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

</form>
