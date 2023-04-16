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
        @foreach($news as $new)
          <!-- novy produkt -->
          <div class="product_card">
            <a href="selected-product/{{$new->id}}">
              <img src="{{ asset('storage/' . $picture_finder->findOnePicture($new->id)) }}" alt=" ">
              <h3>{{$new->title}}</h3>
            </a>
            <p>{{$new->price}} €</p>
            <button onclick="window.location.replace('selected-product/' + {{$new->id}})"">Show Details</button>
          </div>
        @endforeach
      </section>
    </div>

    <!-- AKCIE -->
    <div class="container">
      <h1>Sales</h1>
      <section class="product_section">
        @foreach($sales as $sale)
          <!-- akciovy produkt -->
          <div class="product_card">
            <a href="selected-product/{{$sale->id}}">
              <img src="{{ asset('storage/' . $picture_finder->findOnePicture($sale->id)) }}" alt=" ">
              <h3>{{$sale->title}}</h3>
            </a>
            <p>{{$sale->price}} €</p>
            <button onclick="window.location.replace('selected-product/' + {{$sale->id}})"">Show Details</button>
          </div>
        @endforeach
      </section>
    </div>

    <!-- ODPORÚČANÉ -->
    <div class="recommended">
      <h1>Recommended</h1>
      <section class="product_section">
        @foreach($recommends as $recommend)
          <!-- odporucany produkt -->
          <div class="product_card">
            <a href="selected-product/{{$recommend->id}}">
              <img src="{{ asset('storage/' . $picture_finder->findOnePicture($recommend->id)) }}" alt=" ">
              <h3>{{$recommend->title}}</h3>
            </a>
            <p>{{$recommend->price}} €</p>
            <button onclick="window.location.replace('selected-product/' + {{$recommend->id}})"">Show Details</button>
          </div>
        @endforeach
      </section>
    </div>

    <!--footer-->
    @include('footer')
  </body>
</html>
