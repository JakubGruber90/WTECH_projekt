<!DOCTYPE html>
<html lang="sk">
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
      @if (session('error'))     
      <h3 style="text-align: center;">         
        {{ session('error') }}      
      </h3> 
      @endif
      <section>
        <form action="{{ route('loginCheck') }}" method="post">
          {!! csrf_field() !!}
          <input type="email" name="email" placeholder="E-Mail" id="email_field"><br>
          <br>
          <input type="password" name="password" placeholder="Heslo" id="password_field"><br>
          <br>
          <!-- login confirmation button -->
          <input type="submit" value="Prihlásiť sa" id="confirm_login"></button>
          <br><br><br>
        </form>
      </section>
      <img src="{{ asset('storage/src/login_1.png') }}" alt=" " class="loginImage">
    </section>
    <!--Nožička stránky-->
    @include('footer')
</body>
</html>