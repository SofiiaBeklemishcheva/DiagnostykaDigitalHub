<div class="{{ $containerClass }}">
    <!-- Formularz kontaktowy -->
    @csrf

    <!-- Imię -->
    <x-input.text-input
        id="name"
        name="name"
        label="Imię"
        :value="old('name', $name)"
        :inputContainerClass="'custom-input-container'"
        :inputFieldClass="'custom-input-class'"
        :inputLabelClass="'custom-label-class'"
        :isRequired="true"
    />

    <!-- Email -->
    <x-input.email-input
        id="email"
        name="email"
        label="Email"
        :value="old('email', $email)"
        :inputContainerClass="'custom-container'"
        :inputLabelClass="'custom-label'"
        :inputFieldClass="'custom-input'"
        :isRequired="true"
    />

    <!-- Wiadomość -->
    <x-input.textarea-input
        id="textarea1"
        name="message"
        label="Opis"
        value="{{ old('message') }}"
        :isRequired="true"
    />

    <!-- Przycisk wysyłania -->
    <x-buttons.submit-input label="Wyślij formularz" class="btn-primary" />
</div>
