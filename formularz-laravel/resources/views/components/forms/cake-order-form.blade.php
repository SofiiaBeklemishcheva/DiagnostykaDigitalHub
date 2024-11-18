<form action="{{ $action }}" method="{{ $method }}">
    <!-- Data zamówienia -->
    <x-date-input id="order_date" name="order_date" label="Data zamówienia" :value="old('order_date')" isRequired="true" />

    <!-- Imię zamawiającego -->
    <x-text-input id="customer_name" name="customer_name" label="Imię zamawiającego" :value="old('customer_name')" isRequired="true" />

    <!-- E-mail -->
    <x-email-input id="customer_email" name="customer_email" label="E-mail" :value="old('customer_email')" isRequired="true" />

    <!-- Rodzaj biszkopta -->
    <x-select-input id="biszkopt" name="biszkopt" label="Rodzaj biszkopta" :options="[
        'vanilla' => 'Waniliowy',
        'chocolate' => 'Czekoladowy',
        'red_velvet' => 'Red Velvet',
    ]" :value="old('biszkopt')" isRequired="true" />

    <!-- Rodzaj kremu -->
    <x-select-input id="krem" name="krem" label="Rodzaj kremu" :options="[
        'buttercream' => 'Mascarpone',
        'whipped_cream' => 'Bita śmietana',
        'chocolate' => 'Czekoladowy',
    ]" :value="old('krem')" isRequired="true" />

    <!-- Nadzienie -->
    <x-select-input id="nadzienie" name="nadzienie" label="Rodzaj nadzienia" :options="[
        'fruits' => 'Owoce',
        'chocolate' => 'Czekolada',
        'cream' => 'Krem',
    ]" :value="old('nadzienie')" isRequired="true" />

    <!-- Waga tortu -->
    <x-select-input id="waga" name="waga" label="Waga tortu" :options="[
        '1' => '1 kg',
        '2' => '2 kg',
        '3' => '3 kg',
        '4' => '4 kg',
    ]" :value="old('waga')" isRequired="true" />

    <!-- Budżet -->
    <x-select-input id="budzet" name="budzet" label="Budżet" :options="[
        '100-200' => '100 - 200 zł',
        '200-300' => '200 - 300 zł',
        '300-400' => '300 - 400 zł',
    ]" :value="old('budzet')" isRequired="true" />

    <!-- Opis wykończenia tortu -->
    <x-textarea-input id="wykonczenie" name="wykonczenie" label="Opis wykończenia tortu" :value="old('wykonczenie')" />

    <!-- Przycisk wysyłania formularza -->
    <x-submit-input label="Złóż zamówienie" />
</form>
