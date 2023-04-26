<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/admin_menu.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!--Zoznam produktov-->
	<div class="product_list">
		<p><b>Zoznam Produktov</b> (počet: {{count($products)}})</p>
        <button class="add_product">Pridať produkt</button>
		<div class="products">
        @foreach ($products as $product)
            <div class="item">
                <img src="{{ asset('storage/' . $picture_finder->findOnePicture($product->id)) }}" alt="product">
                <section class="specs">
                <p>Title: {{ $product->title }}</p>
                <p>Brand: {{ $product->brand }}</p>
                <p>Size: {{ $product->size }}</p>
                <p>Price: {{ $product->price }}€</p>
                </section>
                <a method="GET"><img src="{{ asset('storage/src/x.png') }}" alt="X"></a>
                </div>
            @endforeach

		</div>
	</div>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>