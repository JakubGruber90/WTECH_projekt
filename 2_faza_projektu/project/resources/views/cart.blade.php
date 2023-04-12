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
				<input type="number" class="count" name="count" value=1>
				<img src="{{ asset('storage/src/x.png') }}" alt="X" class="remove">
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

        document.querySelectorAll('.count').forEach((element) => {
            element.addEventListener(('change'), (event) => {
                if (parseInt(event.target.value) <= 1) {
                    event.target.value = 1;
                }
            });
        });

        document.querySelectorAll('.remove').forEach((element) => {
            element.addEventListener('click', (event) => {
                const parent = event.target.parentNode;
                parent.parentNode.removeChild(parent);
            });
        });
    </script>
</body>
</html>