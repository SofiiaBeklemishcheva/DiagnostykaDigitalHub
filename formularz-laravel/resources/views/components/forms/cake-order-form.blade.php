<link rel="stylesheet" href="{{ asset('css/components/forms/cake-order-form.css') }}">
<form class="cake-order-form-container" action="{{ route('cake.order.submit') }}" method="POST">
    @csrf

    <x-input.text-input
        id="order_date"
        name="order_date"
        label="Data zamówienia:"
        :value="old('order_date')"
        :inputContainerClass="'cake-order-form-input-container'"
        :inputFieldClass="'cake-order-form-input-field'"
        :inputLabelClass="'cake-order-form-label'"
        :isRequired="true"
    />

    <x-input.text-input
        id="customer_name"
        name="customer_name"
        label="Imię zamawiającego:"
        :value="old('customer_name')"
        :inputContainerClass="'cake-order-form-input-container'"
        :inputFieldClass="'cake-order-form-input-field'"
        :inputLabelClass="'cake-order-form-label'"
        :isRequired="true"
    />

    <x-input.email-input
        id="customer_email"
        name="customer_email"
        label="E-mail:"
        :value="old('customer_email')"
        :inputContainerClass="'cake-order-form-input-container'"
        :inputFieldClass="'cake-order-form-input-field'"
        :inputLabelClass="'cake-order-form-label'"
        :isRequired="true"
    />

    <x-input.select-input
        id="biszkopt"
        name="biszkopt"
        :label="'Rodzaj biszkopta:'"
        :options="['vanilla' => 'Waniliowy', 'chocolate' => 'Czekoladowy', 'red_velvet' => 'Czerwony Aksamit']"
        :value="old('biszkopt', 'vanilla')"
        :containerClass="'cake-order-form-input-container'"
        :inputFieldClass="'cake-order-form-select-field'"
        :inputLabelClass="'cake-order-form-label'"
        :isRequired="true"
    />


    <x-input.select-input
        id="krem"
        name="krem"
        :label="'Rodzaj kremu:'"
        :options="['buttercream' => 'Krem Maślany', 'whipped_cream' => 'Bita Śmietana', 'chocolate' => 'Czekoladowy']"
        :value="old('krem', 'buttercream')"
        :containerClass="'cake-order-form-input-container'"
        :inputFieldClass="'cake-order-form-select-field'"
        :inputLabelClass="'cake-order-form-label'"
        :isRequired="true"
    />

    <x-input.select-input
        id="nadzienie"
        name="nadzienie"
        :label="'Rodzaj nadzienia:'"
        :options="['fruits' => 'Owoce', 'chocolate' => 'Czekolada', 'cream' => 'Krem']"
        :value="old('nadzienie')"
        :containerClass="'cake-order-form-input-container'"
        :inputFieldClass="'cake-order-form-select-field'"
        :inputLabelClass="'cake-order-form-label'"
        :isRequired="true"
    />

    <x-input.select-input
        id="waga"
        name="waga"
        :label="'Waga tortu:'"
        :options="['1' => '1 kg', '2' => '2 kg', '3' => '3 kg', '4' => '4 kg']"
        :value="old('waga', '1')"
    :containerClass="'cake-order-form-input-container'"
    :inputFieldClass="'cake-order-form-select-field'"
    :inputLabelClass="'cake-order-form-label'"
    :isRequired="true"
    />

    <x-input.select-input
        id="budzet"
        name="budzet"
        :label="'Budżet:'"
        :options="[
        '100-200' => '100 - 200 zł',
        '200-300' => '200 - 300 zł',
        '300-400' => '300 - 400 zł',
    ]"
        :value="old('budzet', '100-200')"
        :containerClass="'cake-order-form-input-container'"
        :inputFieldClass="'cake-order-form-select-field'"
        :inputLabelClass="'cake-order-form-label'"
    :isRequired="true"
    />

    <x-input.textarea-input
        id="wykonczenie"
        name="wykonczenie"
        :label="'Opis wykończenia tortu:'"
        :value="old('wykonczenie')"
        inputContainerClass="cake-order-form-input-container"
        inputFieldClass="cake-order-form-textarea-field"
        inputLabelClass="cake-order-form-label"
    />

    <x-buttons.submit-input
        label="Złóż zamówienie"
        class="cake-order-form-submit-button"
    />

    @if (session('success'))
        <div class="cake-order-form-success-message">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


</form>
