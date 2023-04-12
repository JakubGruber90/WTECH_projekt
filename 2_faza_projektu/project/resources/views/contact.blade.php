<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/contact.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <div class="contact">
        <p><img src="{{ asset('storage/src/telephone.svg') }}" class="img"><b> Telefónne číslo</b><br> 09 953-786-493</p>
        <p><img src="{{ asset('storage/src/envelope.svg') }}" class="img"><b> E-Mail</b><br> zakaznik@footwearshop.sk</p>
        
    </div>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>