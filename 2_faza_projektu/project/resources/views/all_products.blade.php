<!DOCTYPE html>
<html>
  <!-- head -->
  <head>
    <title>Footwear Shop</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('storage/css/all_products.css') }}">
  </head>
  <body>
    <!--header-->
    @include('header')

    <div class="spacer">
      &nbsp;
    </div>

    <!-- ALL PRODUCTS -->
    <section class="container">
      <!-- CATEGORIES -->
      <div class="nav">
        <h1>List of all products</h1>
        <!-- kategorie -->
        <nav>
        <ul>
            <li><a href="#">Basketball</a></li>
            <li><a href="#">Football</a></li>
            <li><a href="#">Tenis</a></li>
            <li><a href="#">Running</a></li>
            <li><a href="#">Hiking</a></li>
            <br>
            <li class="sales"><a href="#">Sales</a><br></li>
            <br>
            <li class="price"><input type="checkbox" id="0,50" name="0,50"><label for="0,50">0€ - 50€</label></li>
            <li class="price"><input type="checkbox" id="50,100" name="50,100"><label for="50,100">50€ - 100€</label></li>
            <li class="price"><input type="checkbox" id="150" name="150"><label for="150">150€+</label></li>
        </ul>
        </nav>
      </div>
      
      <!-- PRODUKTY -->
      <div class="products">
        <h2>{{count($products)}}</h2>
        <section class="product_section">
          @foreach($products as $product)
            <!-- produkt -->
            <div class="product_card">
              <a href="selected-product/{{$product->id}}">
                <img src="{{ asset('storage/' . $picture_finder->findOnePicture($product->id)) }}" alt=" ">
                <h3>{{$product->title}}</h3>
              </a>
              <p>{{$product->price}} €</p>
              <button id="add_to_cart_{{$product->id}}">Add to Cart</button>
            </div>
        @endforeach
    </section>

    <!--footer-->
    @include('footer')
  </body>
</html>
