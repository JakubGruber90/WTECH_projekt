<!DOCTYPE html>
<html lang="en">
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
      <section class="register">
        <!-- prihlasovacie údaje -->
        <section class="login_data">
          <h2>Prihlasovacie údaje</h2>
          <form>
            <br>
            <input type="email" placeholder="Email" id="email_field"><br>
            <br>
            <input type="text" placeholder="Login" id="login"><br>
            <br>
            <input type="password" placeholder="Password" id="password"><br>
            <br>
            <input type="password" placeholder="Password" id="password_confirmation"><br>
            <br>
          </form>
        </section>

        <!-- fakturacne udaje -->
        <section class="billing_data">
          <h2>Fakturačné údaje</h2>
            <form>
              <br>
              <input type="text" placeholder="Ulica" id="street"><br>
              <br>
              <input type="text" placeholder="PSČ" id="city_code"><br>
              <br>
              <input type="text" placeholder="Mesto" id="city"><br>
              <br>
              <label>
                <input type="checkbox" id="confirm_terms_of_use">
                <span>Potvrdzujem, že súhlasím s obchodnými podmienkami tejto spoločnosti</span>
              </label>
              <br>
          </form>
        </section>

        <!-- potvrdenie registracie -->
        <section class="confirm">
          <!--<br><br>-->
          <img src="{{ asset('storage/src/reg_img_1.png') }}">
          <!--<br><br>-->
          <button id="confirm_registration">Registrovať</button>
        </section>
      </section>
    </div>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>