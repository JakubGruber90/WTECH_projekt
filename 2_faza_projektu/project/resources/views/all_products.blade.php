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
      <aside class="nav">
        <h1>List of all products</h1>
        <!-- kategorie -->
        <nav>
        <ul>
            <li><a href="{{redirect('all-products/basketball')->headers->get('Location')}}">Basketball</a></li>
            <li><a href="{{redirect('all-products/football')->headers->get('Location')}}">Football</a></li>
            <li><a href="{{redirect('all-products/tennis')->headers->get('Location')}}">Tenis</a></li>
            <li><a href="{{redirect('all-products/running')->headers->get('Location')}}">Running</a></li>
            <li><a href="{{redirect('all-products/hiking')->headers->get('Location')}}">Hiking</a></li>
            <br>
            <li class="sales"><a href="{{redirect('all-products/sales')->headers->get('Location')}}">Sales</a><br></li>
            <br>
            <li class="price"><a href="{{redirect('all-products/price/50')->headers->get('Location')}}">0€ - 50€</a></li>
            <li class="price"><a href="{{redirect('all-products/price/100')->headers->get('Location')}}">50€ - 150€</a></li>
            <li class="price"><a href="{{redirect('all-products/price/150')->headers->get('Location')}}">150€+</a></li>
        </ul>
        </nav>
      </aside>
      
      <!-- PRODUKTY -->
      <div class="products">
        <h2>Počet produktov: {{count($products)}}</h2>
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
