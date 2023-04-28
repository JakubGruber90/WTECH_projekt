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
            <select class="select" id="payment">
                <option value="1" id="card">Karta</option>
                <option value="2" id="change">Hotovosťou pri dobierke</option>
            </select>
        </div>
        <div class="delivery">
            <label for="delivery">Vyberte spôsob dopravy:</label>
            <select class="select" id="delivery">
                <option value="1" id="courier">Kuriérom (osobný odber)</option>
                <option value="2" id="post">Poštou</option>
                <option value="3" id="mail">Zásielkovňa</option>
            </select>
        </div>
        <button type="button" class="cancel-btn"  onclick="cart()">Zrušiť</button>

        <form class="continue-form" method="GET" action="{{ route('payment-delivery-save') }}" accept-charset="UTF-8">
        <button type="submit" class="continue-btn">Pokračovať</button> 
        <input id="payment_input" type="hidden" name="payment_method" value="">
        <input id="delivery_input" type="hidden" name="delivery_method" value="">
        </form>
    </div>

    <!--Nožička stránky-->
    @include('footer')

    <script>
        const payment_input = document.getElementById('payment_input');
        const payment = document.getElementById('payment');
        const delivery_input = document.getElementById('delivery_input'); 
        const delivery = document.getElementById('delivery');
        
         payment_input.value = payment.value;
        delivery_input.value = delivery.value;

        payment.addEventListener('change', () => {
            payment_input.value = payment.value;
        });

        delivery.addEventListener('change', () => {
            delivery_input.value = delivery.value;
        });

        function cart() {
            window.location = "cart";
        }
        </script>
</body>
</html>