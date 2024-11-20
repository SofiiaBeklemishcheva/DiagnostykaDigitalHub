<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/forms/cake-order-form.css') }}">

</head>
<body>
<x-header
    containerClass="header-container"
    headerLabelClass="header-label"
    headerLabel="Sweet-Corner"
/>
<div class="page-container">

    <div class="content-container">
    <p class="text">Powiedz nam jaki tort chcesz, a my w ciągu 24 godzin skontaktujemy się z Tobą w celu złożenia zamówienia</p>
        <x-cake-order-form />

    </div>



</div>

<x-footer
    :name="old('name')"
    :email="old('email')"
    :message="old('message')"
    containerClass="footer-container"
/>
</body>
</html>
