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
        <button class="add_product" onclick="window.location.replace('{{ redirect('admin/create-product')->headers->get('Location') }}')">Pridať produkt</button>
		<button class="other_button" onclick="window.location.replace('{{ redirect('admin/edit-product')->headers->get('Location') }}')">Zmeniť produkt</button>
		<button class="other_button" onclick="window.location.replace('{{ redirect('admin/delete-product')->headers->get('Location') }}')">Vymazať produkt</button>
        <div class="products">
            @foreach ($products as $product)
            <div class="item">
                <img src="{{ asset('storage/' . $picture_finder->findOnePicture($product->id)) }}" alt="product">
                <section class="specs">
<<<<<<< Updated upstream
                <p>Title: {{ $product->title }}</p>
                <p>ID: <span>{{$product->id}}</span></p>
                <p>Brand: {{ $product->brand }}</p>
                <p>Price: {{ $product->price }}€</p>
=======
                    <p>Title: {{ $product->title }}</p>
                    <p>ID: {{$product->id}}</p>
                    <p>Brand: {{ $product->brand }}</p>
                    <p>Price: {{ $product->price }}€</p>
>>>>>>> Stashed changes
                </section>
                <img class="delete" src="{{ asset('storage/src/x.png') }}" alt="X">
                </div>
            @endforeach

		</div>
	</div>
    <br><br>
    <div class="div-table">
        <div>
            <br><br>
            <table class="payment_methods_table">
                <label class="header-label"><b>Platobné metódy</b> (počet: {{count($payment_methods)}})</label>
                <tr class="table-header">
                    <td>ID</td>
                    <td>Názov</td>
                </tr>
                @foreach ($payment_methods as $payment_method)
                <tr class="table-info">
                    <td>{{ $payment_method->id }}</td>
                    <td>{{ $payment_method->title }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <br><br>
        <div>
            <table class="shipping_types_table">
            <label class="header-label"><b>Typy doručenia</b> (počet: {{count($shipping_types)}})</label>
                <tr class="table-header">
                    <td>ID</td>
                    <td>Názov</td>
                    <td>Cena</td>
                </tr>
                @foreach ($shipping_types as $shipping_type)
                <tr class="table-info">
                    <td>{{ $shipping_type->id }}</td>
                    <td>{{ $shipping_type->title }}</td>
                    <td>{{ $shipping_type->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <br><br>
    </div>

    <!--Nožička stránky-->
    @include('footer')

    <script>
        const deletes = document.querySelectorAll(".delete");
        deletes.forEach(del => {
            del.addEventListener('click', (event) => {
                var id = event.target.parentNode.children[1].children[1].children[0].innerText;
                window.location.replace("{{ redirect('admin/delete-product')->headers->get('Location') }}/" + id);
            });
        });
    </script>
</body>
</html>