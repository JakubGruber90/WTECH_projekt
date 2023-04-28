<!DOCTYPE html>
<html lang="sk">
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
        @if ((Session::has('cart') && !empty(Session::get('cart')->items)))
            @foreach ($products as $product)
                <div class="item">
                    <img src="{{ asset('storage/' . $picture_finder->findOnePicture($product['item']->id)) }}" alt="product">
                    <section class="specs">
                    <p>Title: {{ $product['item']->title }}</p>
                    <p>Brand: {{ $product['item']->brand }}</p>
                    <p>Size: {{ $product['item']->size }}</p>
                    <p>Price: {{ $product['item']->price }}€</p>
                    </section>
                    <p>Počet:</p>
                    <input type="number" class="count" name="count" value="{{ $product['item']->number }}" min=1 max="{{ $product['item']->max_number }}">
                    @auth
                        <a method="GET" href="{{ route('cartDeleteAuth', $product['item']->id) }}"><img src="{{ asset('storage/src/x.png') }}" alt="X"></a>
                    @else
                        <a method="GET" href="{{ route('cartDelete', $product['item']->id) }}"><img src="{{ asset('storage/src/x.png') }}" alt="X"></a>
                    @endauth
                </div>
            @endforeach
        @else
        <p>Váš košík je prázdny</p>
        @endif

		</div>
		<button type="button" class="cart-button" onclick="window.location.replace('homepage')">Zrušiť</button>
		<a class="continue" method="GET" href="{{ route('cart-payment') }}"><button type="button" class="cart-button" onclick="window.location.replace('cart-payment')">Pokračovať</button></a>
	</div>

    <!--Nožička stránky-->
    @include('footer')

    <script>
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