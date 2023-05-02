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
        <form class="finish-form" method="GET" action="{{ route('order-finish') }}" accept-charset="UTF-8">
            <div class="billing">
                @if (Auth::user() !== null)
                <input name="country" type="text" id="stat" placeholder="Štát" value="{{ Auth::user()->country }}" id="country" class="billing-input">
                <input name="city" type="text" id="mesto" placeholder="Mesto" value="{{ Auth::user()->city }}" id="city" class="billing-input">
                <input name="address" type="text" id="ulica" placeholder="Ulica" value="{{ Auth::user()->address }}" id="street" class="billing-input">
                <input name="postal_code" type="text" id="psc" placeholder="PSČ" value="{{ Auth::user()->postal_code }}" id="code" class="billing-input">
                <input name="phone_number" type="text" id="tel_cislo" placeholder="Telefónne číslo" value="{{ Auth::user()->phone_number }}" id="phone_num" class="billing-input">
                @else
                <input name="country" type="text" id="stat" placeholder="Štát" id="country" class="billing-input">
                <input name="city" type="text" id="mesto" placeholder="Mesto" id="city" class="billing-input">
                <input name="address" type="text" id="ulica" placeholder="Ulica" id="street" class="billing-input">
                <input name="postal_code" type="text" id="psc" placeholder="PSČ" id="code" class="billing-input">
                <input name="phone_number" type="text" id="tel_cislo" placeholder="Telefónne číslo" id="phone_num" class="billing-input">
                @endif
            </div>
            <button type="submit" class="finish-button">Dokončiť</button>
        </form>

        <button type="button" onclick="payment()">Zrušiť</button>
    </div>

    <!--Nožička stránky-->
    @include('footer')

    <script>
        function payment() {
            window.location = "cart-payment";
        }
    </script>
</body>
</html>