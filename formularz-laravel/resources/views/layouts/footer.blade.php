<div class="{{ $containerClass }}">
    <!-- Formularz kontaktowy -->
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf

        <!-- Imię -->
        <x-text-input 
            id="name"
            name="name"
            label="Imię"
            :value="$name"
            :inputFieldClass="'default-input-class'"
            :inputLabelClass="'default-label-class'"
            :isRequired="true"
        />

        <!-- Email -->
        <x-email-input 
            id="email"
            name="email"
            label="Email"
            :value="$email"
            :inputFieldClass="'default-input-class'"
            :inputLabelClass="'default-label-class'"
            :isRequired="true"
        />

        <!-- Wiadomość -->
        <x-textarea-input 
            id="message"
            name="message"
            label="Wiadomość"
            :value="$message"
            :inputFieldClass="'default-textarea-class'"
            :inputLabelClass="'default-label-class'"
            :isRequired="true"
            rows="5"
        />

        <!-- Przycisk wysyłania -->
        <x-submit-input 
            label="Wyślij"
            :attributes="['type' => 'submit']"
            :containerClass="'submit-container'"
        />
    </form>
</div>
