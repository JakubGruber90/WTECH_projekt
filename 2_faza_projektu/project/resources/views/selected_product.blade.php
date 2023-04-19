<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/selected_product.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- PRODUCT -->
    <section class="product_section">
      <!-- fotky produktu -->
      <div class="photos">
        @foreach ($pictures as $picture)
          <img src="{{ asset('storage/' . $picture->picture_url) }}" alt="shoe image">
        @endforeach
      </div>

      <!-- velkost topanky -->
      <div class="shoe_info">
      @if ($product)
        <h1>{{ $product->title }}</h1>
        <h2>{{ $product->price }} €</h2>
        <article class="description">
          <span>{{ $product->description }}</span>
        </article>
        <h3 class="h_shoe_size">Vyberte si veľkosť (EU)</h3>
        <select title="sizes" class="shoe_size" id="shoe_size">
          @foreach ($sizes as $size)
          <option value="{{ $size->size }}">{{ $size->size }}</option>
          @endforeach
        </select>

        <!-- pridat do kosika -->
        <form method="GET" action="{{ route('cartAdd', $product->id) }}" accept-charset="UTF-8">
          {{ csrf_field() }}
          <input id="size_input" type="hidden" name="size" value="">
          <h3>Počet:</h3>
          <input type="number" class="product_num" name="prod_num" value=1 min="1" max="{{ $count }}">

          <br>
          <label id="sklad" class="count"><span>Na sklade: {{ $count }}</span></label>
          <br>

          <button id="add_to_cart"><img src="{{ asset('storage/src/add_to_cart.png') }}" alt=" "> Add to Cart</button>
        </form>

        <!-- <label id="rating" class="rating"> <span>Hodnotenie: @rating</span></label> -->
      @endif
      </div>
    </section>

    <!--Nožička stránky-->
    @include('footer')

    <script>
      document.getElementById('size_input').value = document.getElementById('shoe_size').value;
      document.getElementById('shoe_size').addEventListener('change', (event) => {
        document.getElementById('size_input').value = event.target.value;
      });
    </script>
</body>
</html>