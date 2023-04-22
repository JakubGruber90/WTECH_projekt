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

    <h1>OSOBNÝ PROFIL</h1>
    <div class="profile-info">
        <section class="profile-section">
            <h2>PRIHLASOVACIE ÚDAJE</h2>
            <table class="profile-table">
                <tr>
                    <td>
                        <label class="profile-label">E-Mail</label>
                    </td>
                    <td>
                        <label class="profile-info-label">{{$user->email}}</label>
                    </td>
                    <td>
                        <form action="{{ route('editEmail') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" value="Zmeniť" class="profile-change-button"></input>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="profile-label">Krstné meno</label>
                    </td>
                    <td>
                        <label class="profile-info-label">{{$user->first_name}}</label>
                    </td>
                    <td>
                        <form action="{{ route('editFirstName') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" value="Zmeniť" class="profile-change-button"></input>
                        </form>                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="profile-label">Priezvisko</label>
                    </td>
                    <td>
                        <label class="profile-info-label">{{$user->last_name}}</label>
                    </td>
                    <td>
                        <form action="{{ route('editLastName') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" value="Zmeniť" class="profile-change-button"></input>
                        </form>                     
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <form action="{{ route('editPassword') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" value="Zmeniť" class="profile-change-button"></input>
                        </form>                     
                    </td>
                    <td></td>
                </tr>
            </table>
        </section>
        <br>
        <br>
        <section class="profile-section">
            <h2>FAKTURAČNÉ ÚDAJE</h2>
            <table class="profile-table">
                <tr>
                    <td>
                        <label class="profile-label">Telefónne číslo</label>
                    </td>
                    <td>
                        <label class="profile-info-label">{{$user->phone_number}}</label>
                    </td>
                    <td>
                        <form action="{{ route('editPhoneNumber') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" value="Zmeniť" class="profile-change-button"></input>
                        </form>  
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="profile-label">Adresa</label>
                    </td>
                    <td>
                        <label class="profile-info-label">{{$user->address}}</label>
                    </td>
                    <td>
                        <form action="{{ route('editAddress') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" value="Zmeniť" class="profile-change-button"></input>
                        </form>  
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="profile-label">Mesto</label>
                    </td>
                    <td>
                        <label class="profile-info-label">{{$user->city}}</label>
                    </td>
                    <td>
                        <form action="{{ route('editCity') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" value="Zmeniť" class="profile-change-button"></input>
                        </form>  
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="profile-label">Štát</label>
                    </td>
                    <td>
                        <label class="profile-info-label">{{$user->country}}</label>
                    </td>
                    <td>
                        <form action="{{ route('editCountry') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" value="Zmeniť" class="profile-change-button"></input>
                        </form>  
                    </td>
                </tr>
            </table>
        </section>
    </div>

    <!--footer-->
    @include('footer')
  </body>
</html>
