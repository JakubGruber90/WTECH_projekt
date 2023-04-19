<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/cart_payment.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!--Doprava a platba-->
    <div class="cart">
        <p class="cart-title">Košík > <b>Doprava a platba</b> > Dodacie údaje</p>
        <div class="payment">
            <label for="payment">Vyberte spôsob platby:</label>
            <select name="payment" class="select">
                <option value="karta" id="card">Karta</option>
                <option value="hotovost" id="cash">Hotovosťou pri dobierke</option>
              </select>
        </div>
        <div class="delivery">
            <label for="delivery">Vyberte spôsob dopravy:</label>
            <select name="delivery" class="select">
                <option value="kurier" id="courier">Kuriérom (osobný odber)</option>
                <option value="zasielkovna" id="mail">Zásielkovňa</option>
                <option value="posta" id="post">Poštou</option>
              </select>
        </div>
        <button type="button" class="cancel-btn"  onclick="cart()">Zrušiť</button>
        <button type="button" class="continue-btn"  onclick="billing()">Pokračovať</button>
    </div>

    <!--Nožička stránky-->
    @include('footer')

    <script>
        function cart() {
            window.location = "cart";
        }

        function billing() {
            window.location = "cart-address";
        }
    </script>
</body>
</html>