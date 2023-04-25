<!DOCTYPE html>
<html lang="sk">
  <!-- head -->
  <head>
    <title>Footwear Shop</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('storage/css/profile.css') }}">
  </head>
  <body>
    <!--header-->
    @include('header')

    <div class="spacer">
      &nbsp;
    </div>

    <h1>ZMENA FAKTURAČNÝCH ÚDAJOV</h1>
    <div class="profile-info">
        <section class="profile-section">
            <form action="{{ route('editShipping') }}" method="post">
                {!! csrf_field() !!}
                <br>
                <input type="text" class="profile-input" name="phone_number" placeholder="Telefónne číslo"></input>
                <input type="text" class="profile-input" name="address" placeholder="Ulica"></input>
                <input type="text" class="profile-input" name="city" placeholder="Mesto"></input>
                <input type="text" class="profile-input" name="country" placeholder="Štát"></input>
                <input type="submit" class="profile-change-button" value="Zmeniť"></input>
                <br><br>
            </form>
        </section>
    </div>

    <!--footer-->
    @include('footer')
  </body>
</html>
