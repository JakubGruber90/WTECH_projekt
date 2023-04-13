<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/complaints.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <div class="complaint">
        <h1>Reklamácie tovaru</h1>
        <p>V prípade, že nie ste s tovarom spokojní alebo má tovar nejaké vady, môžete požiadať o reklamáciu tovaru. Potrebujete k tomu doklad o zaplatení tovaru a povôdné balenie od tovaru.<br><br>Kroky reklamácie:</p>
        <ol> 
            <li> <a href="contact">Kontaktuje nás</a> buď telefonicky alebo prostredníctvom emailu a vysvetlite, prečo chcete tovar vrátiť a nasledujte pokyny nášho pracovníka</li><br>
            <li> Počkajte na spracovanie vašej požiadavky</li><br>
            <li> V prípade akceptácie vašej reklamácie zašlite tovar na adresu <u><b>Kvetová 12 Bratislava, 847 69</b></u></li>
        </ol>
        <p>Za vzniknuté nepríjemnosti sa Vám ospravedlňujeme a dúfame, že u nás budete nakupovať aj naďalej.</p>
    </div>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>