<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/registration.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- REGISTRÁCIA -->
    <div class="canvas">
      <h1>Registrácia</h1>
      @if (session('error'))     
      <h3 style="text-align: center;">         
        {{ session('error') }}      
      </h3> 
      @endif
      <form action="{{ route('registerCheck') }}" method="post" class="register">
        {!! csrf_field() !!}
        <!-- prihlasovacie údaje -->
        <section class="login_data">
          <h2>Prihlasovacie údaje</h2>
            <br>
            <input type="email" name="email" placeholder="E-Mail" id="email_field"><br>
            <br>
            <input type="text" name="first_name" placeholder="Krstné meno" id="first_name_field"><br>
            <br>
            <input type="text" name="last_name" placeholder="Priezvisko" id="last_name_field"><br>
            <br>
            <input type="password" name="password" placeholder="Heslo" id="password_field"><br>
            <br>
            <input type="password" name="password2" placeholder="Zopakuj heslo" id="password_confirmation_field"><br>
            <br>
        </section>

        <!-- fakturacne udaje -->
        <section class="billing_data">
          <h2>Fakturačné údaje</h2>
              <br>
              <input type="text" name="phone_number" placeholder="Telefónne číslo" id="phone_number_field"><br>
              <br>
              <input type="text" name="address" placeholder="Ulica" id="street_field"><br>
              <br>
              <input type="text" name="city_code" placeholder="PSČ" id="city_code_field"><br>
              <br>
              <input type="text" name="city" placeholder="Mesto" id="city_field"><br>
              <br>
              <input type="text" name="country" placeholder="Štát" id="country_field"><br>
              <br>
              <label>
                <input type="checkbox" id="confirm_terms_of_use">
                <span>Potvrdzujem, že súhlasím s obchodnými podmienkami tejto spoločnosti</span>
              </label>
              <br>
        </section>

        <!-- potvrdenie registracie -->
        <section class="confirm">
          <!--<br><br>-->
          <img src="{{ asset('storage/src/reg_img_1.png') }}">
          <!--<br><br>-->
          <input type="submit" value="Registrovať sa" id="confirm_registration"></input>
        </section>
      </form>
      <br><br>
    </div>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>