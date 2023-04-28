<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/cart_address.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!--Dodacie údaje-->
    <div class="info">
        <p class="info-title">Košík > Doprava a platba > <b>Dodacie údaje</b></p>
        <div class="billing">
        @if (Auth::user() !== null)
        <input type="text" id="ulica" value="{{ Auth::user()->address }}" id="street" class="billing-input">
        <input type="text" id="psc" value="{{ Auth::user()->postal_code }}" id="code" class="billing-input">
        <input type="text" id="mesto" value="{{ Auth::user()->city }}" id="city" class="billing-input">
        @else
        <input type="text" id="ulica" placeholder="Ulica" id="street" class="billing-input">
        <input type="text" id="psc" placeholder="PSČ" id="code" class="billing-input">
        <input type="text" id="mesto" placeholder="Mesto" id="city" class="billing-input">
        @endif
        </div>
        <button type="button" onclick="payment()">Zrušiť</button>
        <button type="button" onclick="homepage()">Dokončiť</button>
    </div>

    <!--Nožička stránky-->
    @include('footer')

    <script>
        function homepage() {
            window.location = "homepage";
        }

        function payment() {
            window.location = "cart-payment";
        }
    </script>
</body>
</html>