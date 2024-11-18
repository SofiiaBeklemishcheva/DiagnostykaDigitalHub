<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Welcome to Home Page</h1>
    <form action="/submit-form" method="POST">
        @csrf <!-- Zabezpieczenie formularza -->

        <!-- Kolejne pola formularza -->
        <x-date-input
            id="appointment_date"
            name="appointment_date"
            label="Appointment Date"
            value="{{ old('appointment_date') }}"
            input-field-class="appointment-field"
            input-label-class="appointment-label"
            input-container-class="appointment-container"
        />

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
