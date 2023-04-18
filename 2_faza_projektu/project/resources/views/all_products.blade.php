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
            <li><a href="{{redirect('all-products/volleyball')->headers->get('Location')}}">Volleyball</a></li>
            <li><a href="{{redirect('all-products/football')->headers->get('Location')}}">Football</a></li>
            <li><a href="{{redirect('all-products/tennis')->headers->get('Location')}}">Tenis</a></li>
            <li><a href="{{redirect('all-products/running')->headers->get('Location')}}">Running</a></li>
            <li><a href="{{redirect('all-products/hiking')->headers->get('Location')}}">Hiking</a></li>
            <br>
            <li class="sales"><a href="{{redirect('sales')->headers->get('Location')}}">Sales</a><br></li>
            <br>
            <li class="price"><a href="{{redirect('all-products/price/50')->headers->get('Location')}}">0€ - 50€</a></li>
            <li class="price"><a href="{{redirect('all-products/price/100')->headers->get('Location')}}">50€ - 150€</a></li>
            <li class="price"><a href="{{redirect('all-products/price/150')->headers->get('Location')}}">150€+</a></li>
        </ul>

        <div class="dropdown">
          <button class="dropbutton">Zoradiť podľa ceny</button>
          <div class="dropdown-content">
            <a href="{{redirect('all-products/price_order/asc')->headers->get('Location')}}">Vzostupne</a>
            <a href="{{redirect('all-products/price_order/desc')->headers->get('Location')}}">Zostupne</a>
            <a href="{{redirect('all-products/price_order/default')->headers->get('Location')}}">Vypnúť</a>
          </div>
        </div>

        </nav>
        @if ($paging)
        <div class="paging">
          <a href="#" onclick="prev_page()">Previous Page</a>
          <a href="#" onclick="next_page()">Next Page</a>
        </div>
        @endif
      </aside>
      
      <!-- PRODUKTY -->
      <div class="products">
        <h2>Počet produktov: {{$count}}</h2>
        <section class="product_section">
          @foreach($products as $product)
            <!-- produkt -->
            <div class="product_card">
              <a href="selected-product/{{$product->id}}">
                <img src="{{ asset('storage/' . $picture_finder->findOnePicture($product->id)) }}" alt=" ">
                <h3>{{$product->title}}</h3>
              </a>
              <p>{{$product->price}} €</p>
              <button onclick="window.location.replace(`{{redirect('selected-product/')->headers->get('Location')}}/` + {{$product->id}})">Show Details</button>
            </div>
        @endforeach
      </div>
    </section>

    <!--footer-->
    @include('footer')

    @if ($paging)
    <script>
      function next_page() {
        const url = window.location.href;
        const current_page = url.substring(url.lastIndexOf('/') + 1);
        if (isNaN(current_page) || url.includes("price")) {
          window.location.replace("{{redirect('all-products/page/0')->headers->get('Location')}}");
        }
        else {
          window.location.replace("{{redirect('all-products/page/')->headers->get('Location')}}/" + (parseInt(current_page) + 1).toString());
        }
      }

      function prev_page() {
        const url = window.location.href;
        const current_page = url.substring(url.lastIndexOf('/') + 1);
        if (isNaN(current_page) || url.includes("price")) {
          window.location.replace("{{redirect('all-products/page/0')->headers->get('Location')}}");
        }
        else {
          window.location.replace("{{redirect('all-products/page/')->headers->get('Location')}}/" + (parseInt(current_page) - 1).toString());
        }
      }
    </script>
    @endif
  </body>
</html>
