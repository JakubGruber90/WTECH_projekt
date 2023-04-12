<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/forgotten_password.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- FORGOTTEN PASSWORD -->
    <section class="canvas">
      <h1>Zabudli ste heslo?</h1>
      <!-- email field, text, picture -->
      <section>
          <form>
            <h2>Zaslanie nového hesla na email</h2>
            <br>
            <input type="email" placeholder="Email" id="email_field"><br>
            <br>
          </form>
        <img src="{{ asset('storage/src/reg_img_2.png') }}" alt=" ">
      </section>
      <!-- forgotten password email confirmation button -->
      <button id="confirm_forgotten_password">Zaslať na email</button>
    </section>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>