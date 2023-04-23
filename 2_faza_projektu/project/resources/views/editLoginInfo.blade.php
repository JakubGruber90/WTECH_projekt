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

    <h1>ZMENA PRIHLASOVACÍCH ÚDAJOV</h1>
    <div class="profile-info">
        <section class="profile-section">
            <form action="{{ route('editLogin') }}" method="post">
                {!! csrf_field() !!}
                <br>
                <input type="text" class="profile-input" name="email" placeholder="E-Mail"></input>
                <input type="text" class="profile-input" name="first_name" placeholder="Krstné meno"></input>
                <input type="text" class="profile-input" name="last_name" placeholder="Priezvisko"></input>
                <input type="password" class="profile-input" name="password" placeholder="Heslo"></input>
                <input type="submit" class="profile-change-button" value="Zmeniť"></input>
                <br><br>
            </form>
        </section>
    </div>

    <!--footer-->
    @include('footer')
  </body>
</html>
