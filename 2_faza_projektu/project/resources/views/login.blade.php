<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/login.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- LOGIN -->
    <section class="canvas">
      <h1>Prihlásenie do účtu</h1>
      <!-- email field, password field, picture -->
      <section>
          <form>
            <input type="email" placeholder="Email" id="email_field"><br>
            <br>
            <input type="password" placeholder="Password" id="password_field"><br>
            <br>
          </form>
        <img src="{{ asset('storage/src/login_1.png') }}" alt=" ">
      </section>
      <!-- login confirmation button -->
      <button id="confirm_login">Prihlásiť sa</button>
    </section>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>