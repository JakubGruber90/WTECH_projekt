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
                    <th><label class="profile-label">E-Mail</label></th>
                    <th><label class="profile-info-label">email@email.sk</label></th>
                    <th><input type="submit" value="Zmeniť" class="profile-change-button"></input></th>
                </tr>
                <tr>
                    <th><label class="profile-label">Krstné meno</label></th>
                    <th><label class="profile-info-label">Jozef</label></th>
                    <td><input type="submit" value="Zmeniť" class="profile-change-button"></input></td>
                </tr>
                <tr>
                    <th><label class="profile-label">Priezvisko</label></th>
                    <th><label class="profile-info-label">Mrkva</label></th>
                    <td><input type="submit" value="Zmeniť" class="profile-change-button"></input></td>
                </tr>
                <tr>
                    <th><label class="profile-label">Heslo</label></th>
                    <th><label class="profile-info-label">********</label></th>
                    <td><input type="submit" value="Zmeniť" class="profile-change-button"></input></td>
                </tr>
            </table>
        </section>
        <br>
        <br>
        <section class="profile-section">
            <h2>FAKTURAČNÉ ÚDAJE</h2>
            <table class="profile-table">
                <tr>
                    <th><label class="profile-label">Telefónne číslo</label></th>
                    <th><label class="profile-info-label">+42190000000</label></th>
                    <th><input type="submit" value="Zmeniť" class="profile-change-button"></input></th>
                </tr>
                <tr>
                    <th><label class="profile-label">Adresa</label></th>
                    <th><label class="profile-info-label">Kvetová 85</label></th>
                    <td><input type="submit" value="Zmeniť" class="profile-change-button"></input></td>
                </tr>
                <tr>
                    <th><label class="profile-label">PSČ</label></th>
                    <th><label class="profile-info-label">99091</label></th>
                    <td><input type="submit" value="Zmeniť" class="profile-change-button"></input></td>
                </tr>
                <tr>
                    <th><label class="profile-label">Mesto</label></th>
                    <th><label class="profile-info-label">Bratislava</label></th>
                    <td><input type="submit" value="Zmeniť" class="profile-change-button"></input></td>
                </tr>
                <tr>
                    <th><label class="profile-label">Štát</label></th>
                    <th><label class="profile-info-label">Slovensko</label></th>
                    <td><input type="submit" value="Zmeniť" class="profile-change-button"></input></td>
                </tr>
            </table>
        </section>
    </div>

    <!--footer-->
    @include('footer')
  </body>
</html>
