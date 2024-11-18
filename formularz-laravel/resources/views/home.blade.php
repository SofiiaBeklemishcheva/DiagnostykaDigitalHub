<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <x-header
        containerClass="header-container"
        headerLabelClass="header-label"
        headerLabel="Sweet-Corner"
    />

    <h1>Powiedz nam jaki tort chcesz, a my w ciągu 24 godzin skontaktujemy się z Tobą w celu złożenia zamówienia</h1>



    <x-footer 
    :name="old('name')" 
    :email="old('email')" 
    :message="old('message')" 
    containerClass="footer-container"
/>
</div>
</body>
</html>
