<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/cart.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!--Nákupný košík-->
	<div class="cart">
		<p><b>Košík</b> > Doprava a platba > Dodacie údaje</p>
		<div class="products">

            <div class="item">
				<img src="{{ asset('storage/src/kb_3.jpg') }}" alt="product">
				<section class="specs">
				<p>Meno</p>
				<p>Farba</p>
				<p>Veľkosť</p>
				<p>Cena</p>
				</section>
				<p>Počet:</p>
				<button type="button" onclick=dec()><</button>
				<input type="number" id="count" name="count" value=0 readonly>
				<button type="button" onclick=add()>></button>
				<img src="{{ asset('storage/src/x.png') }}" alt="X">
			</div>

		</div>
		<button type="button" class="cart-button" onclick="homepage()">Zrušiť</button>
		<button type="button" class="cart-button"  onclick="payment()">Pokračovať</button>
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

        function add() {
            var val = parseInt(document.getElementById("count").value);
            document.getElementById("count").value = val + 1;
        }

        function dec() {
            var val = parseInt(document.getElementById("count").value);
            if (parseInt(document.getElementById("count").value) > 0)
                document.getElementById("count").value = val - 1;
        }
    </script>
</body>
</html>