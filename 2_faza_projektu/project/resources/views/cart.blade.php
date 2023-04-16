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
        @if (Session::has('cart'))
            @foreach ($products as $product)
                <div class="item">
                    <img src="{{ asset('storage/' . $picture_finder->findOnePicture($product['item']['id'])) }}" alt="product">
                    <section class="specs">
                    <p>{{ $product['item']['title'] }}</p>
                    <p>{{ $product['item']['brand'] }}</p>
                    <p>{{ $product['item']['size'] }}</p> <!-- Treba pridat vyberanie size, ked clovek dava do kosika -->
                    <p>{{ $product['item']['price'] }}€</p>
                    </section>
                    <p>Počet:</p>
                    <input type="number" class="count" name="count" value=1>
                    <a method="GET" href="{{ route('cartDelete', $product['item']['id']) }}"><img src="{{ asset('storage/src/x.png') }}" alt="X"></a>
                </div>
            @endforeach
        @else
        <p>Váš košík je prázdny</p>
        @endif

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
    </script>
</body>
</html>