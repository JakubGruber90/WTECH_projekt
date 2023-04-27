<!DOCTYPE html>
<html lang="sk">
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
            <li><a href="{{redirect('all-products/basketball')->headers->get('Location')}}">Basketbal</a></li>
            <li><a href="{{redirect('all-products/volleyball')->headers->get('Location')}}">Volejbal</a></li>
            <li><a href="{{redirect('all-products/football')->headers->get('Location')}}">Futbal</a></li>
            <li><a href="{{redirect('all-products/tennis')->headers->get('Location')}}">Tenis</a></li>
            <li><a href="{{redirect('all-products/running')->headers->get('Location')}}">Beh</a></li>
            <li><a href="{{redirect('all-products/hiking')->headers->get('Location')}}">Turistika</a></li>
            <br>
            <li class="sales"><a href="{{redirect('sales')->headers->get('Location')}}">Zľavy</a><br></li>
            <br>
            <li class="price"><input type="number" id="price" step=".01" placeholder="Filtrovať podľa ceny" value="" min="0"></li>
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
          <a href="#" onclick="prev_page()">Predchádzajúca</a>
          <a href="#" onclick="next_page()">Nasledujúca</a>
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
              <button onclick="window.location.replace(`{{redirect('selected-product/')->headers->get('Location')}}/` + {{$product->id}})">Detail
                @if (Auth::user() !== null && Auth::user()->hasRole('ADMIN', 'role_users'))
                  (ID:{{$product->id}})
                @endif
              </button>
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
      <script>
        document.getElementById("price").addEventListener('change', () => {
            const input = document.getElementById("price");
            if (isNaN(input.value)) {
                input.value = 0;
            }
            else if (input.value < 0) {
                input.value = 0;
            }
            window.location.replace("{{redirect('/all-products/price')->headers->get('Location')}}/" + input.value);
        });
      </script>
  </body>
</html>
