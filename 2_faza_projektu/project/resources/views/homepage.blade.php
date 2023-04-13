<!DOCTYPE html>
<html>
  <!-- head -->
  <head>
    <title>Footwear Shop</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('storage/css/homepage.css') }}">
  </head>
  <body>
    <!--header-->
    @include('header')

    <div class="spacer">
      &nbsp;
    </div>

    <!-- nav-kategorie -->
    <nav>
      <ul>
        <li><a href="{{redirect('all-products/basketball')->headers->get('Location')}}">Basketball</a></li>
        <li><a href="{{redirect('all-products/football')->headers->get('Location')}}">Football</a></li>
        <li><a href="{{redirect('all-products/tennis')->headers->get('Location')}}">Tennis</a></li>
        <li><a href="{{redirect('all-products/running')->headers->get('Location')}}">Running</a></li>
        <li><a href="{{redirect('all-products/hiking')->headers->get('Location')}}">Hiking</a></li>
      </ul>
    </nav>

    <!-- NOVINKY -->
    <div class="container">
      <h1>New</h1>
      <section class="product_section">
        <!-- novy produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_1.jpg') }}" alt=" "> 
            <h3>Product Name</h3>
          </a>
            <p>Price of product</p>
          <button id="new_to_cart_1">Add to Cart</button>
        </div>
        <!-- novy produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_2.jpg') }}" alt=" ">
            <h3>Product Name</h3>
          </a>
          <p>Price of product</p>
          <button id="new_to_cart_2">Add to Cart</button>
        </div>
        <!-- novy produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_3.jpg') }}" alt=" ">
            <h3>Product Name</h3>
          </a>
          <p>Price of product</p>
          <button id="new_to_cart_3">Add to Cart</button>
        </div>
        <!-- novy produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_3.jpg') }}" alt=" ">
            <h3>Product Name</h3>
          </a>
          <p>Price of product</p>
          <button id="new_to_cart_3">Add to Cart</button>
        </div>
        <!-- novy produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_3.jpg') }}" alt=" ">
            <h3>Product Name</h3>
          </a>
          <p>Price of product</p>
          <button id="new_to_cart_3">Add to Cart</button>
        </div>
        <!-- novy produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_3.jpg') }}" alt=" ">
            <h3>Product Name</h3>
          </a>
          <p>Price of product</p>
          <button id="new_to_cart_3">Add to Cart</button>
        </div>
      </section>
    </div>

    <!-- AKCIE -->
    <div class="container">
      <h1>Sales</h1>
      <section class="product_section">
          <!-- akciovy produkt -->
          <div class="product_card">
            <a href="#">
              <img src="{{ asset('storage/src/new_1.jpg') }}" alt=" ">
              <h3>Product Name</h3>
            </a>
            <p>Price of product</p>
            <button id="sales_to_cart_1">Add to Cart</button>
          </div>
          <!-- akciovy produkt -->
          <div class="product_card">
            <a href="#">
              <img src="{{ asset('storage/src/new_1.jpg') }}" alt=" ">
              <h3>Product Name</h3>
            </a>
            <p>Price of product</p>
            <button id="sales_to_cart_2">Add to Cart</button>
          </div>
          <!-- akciovy produkt -->
          <div class="product_card">
            <a href="#">
              <img src="{{ asset('storage/src/new_1.jpg') }}" alt=" ">
              <h3>Product Name</h3>
            </a>
            <p>Price of product</p>
            <button id="sales_to_cart_3">Add to Cart</button>
        </div>
      </section>
    </div>

    <!-- ODPORÚČANÉ -->
    <div class="recommended">
      <h1>Recommended</h1>
      <section class="product_section">
        <!-- odporucany produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_1.jpg') }}" alt=" ">
            <h3>Product Name</h3>
          </a>
          <p>Price of product</p>
          <button id="recommended_to_cart_1">Add to Cart</button>
        </div>
        <!-- odporucany produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_3.jpg') }}" alt=" ">
            <h3>Product Name</h3>
          </a>
          <p>Price of product</p>
          <button id="recommended_to_cart_2">Add to Cart</button>
        </div>
        <!-- odporucany produkt -->
        <div class="product_card">
          <a href="#">
            <img src="{{ asset('storage/src/new_2.jpg') }}" alt=" ">
            <h3>Product Name</h3>
          </a>
            <p>Price of product</p>
          <button id="recommended_to_cart_3">Add to Cart</button>
        </div>
      </section>
    </div>

    <!--footer-->
    @include('footer')
  </body>
</html>
