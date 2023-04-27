<!DOCTYPE html>
<html lang="sk">
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
        <li><a href="{{redirect('all-products/basketball')->headers->get('Location')}}">Basketbal</a></li>
        <li><a href="{{redirect('all-products/volleyball')->headers->get('Location')}}">Volejbal</a></li>
        <li><a href="{{redirect('all-products/football')->headers->get('Location')}}">Futbal</a></li>
        <li><a href="{{redirect('all-products/tennis')->headers->get('Location')}}">Tenis</a></li>
        <li><a href="{{redirect('all-products/running')->headers->get('Location')}}">Beh</a></li>
        <li><a href="{{redirect('all-products/hiking')->headers->get('Location')}}">Turistika</a></li>
      </ul>
    </nav>

    <!-- NOVINKY -->
    <div class="container">
      <h1>NOVINKY</h1>
      <section class="product_section">
        @foreach($news as $new)
          <!-- novy produkt -->
          <div class="product_card">
            <a href="selected-product/{{$new->id}}">
              <img src="{{ asset('storage/' . $picture_finder->findOnePicture($new->id)) }}" alt=" ">
              <h3>{{$new->title}}</h3>
            </a>
            <p>{{$new->price}} €</p>
            <button onclick="window.location.replace('selected-product/' + {{$new->id}})">Detail
              @if (Auth::user() !== null && Auth::user()->hasRole('ADMIN', 'role_users'))
                (ID:{{$new->id}})
              @endif
            </button>
          </div>
        @endforeach
      </section>
    </div>

    <!-- AKCIE -->
    <div class="container">
      <h1 onclick="window.location.replace(`{{redirect('sales')->headers->get('Location')}}`)" class="sales_header">AKCIE</h1>
      <section class="product_section">
        @foreach($sales as $sale)
          <!-- akciovy produkt -->
          <div class="product_card">
            <a href="selected-product/{{$sale->id}}">
              <img src="{{ asset('storage/' . $picture_finder->findOnePicture($sale->id)) }}" alt=" ">
              <h3>{{$sale->title}}</h3>
            </a>
            <p>{{$sale->price}} €</p>
            <button onclick="window.location.replace('selected-product/' + {{$sale->id}})">Detail
              @if (Auth::user() !== null && Auth::user()->hasRole('ADMIN', 'role_users'))
                   (ID:{{$sale->id}})
              @endif
            </button>
          </div>
        @endforeach
      </section>
    </div>

    <!-- ODPORÚČANÉ -->
    <div class="recommended">
      <h1>ODPORÚČANÉ
      </h1>
      <section class="product_section">
        @foreach($recommends as $recommend)
          <!-- odporucany produkt -->
          <div class="product_card">
            <a href="selected-product/{{$recommend->id}}">
              <img src="{{ asset('storage/' . $picture_finder->findOnePicture($recommend->id)) }}" alt=" ">
              <h3>{{$recommend->title}}</h3>
            </a>
            <p>{{$recommend->price}} €</p>
            <button onclick="window.location.replace('selected-product/' + {{$recommend->id}})"">Detail
              @if (Auth::user() !== null && Auth::user()->hasRole('ADMIN', 'role_users'))
                (ID:{{$recommend->id}})
              @endif
            </button>
          </div>
        @endforeach
      </section>
    </div>

    <!--footer-->
    @include('footer')
  </body>
</html>
