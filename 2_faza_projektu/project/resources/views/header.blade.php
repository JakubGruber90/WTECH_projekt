<link rel="stylesheet" href="{{ asset('storage/css/header.css') }}">
<header class="header">
    <nav class="nav-bar">
        <div class="nav-bar-left">
            <a class="link" href="{{ redirect('/')->headers->get('Location') }}">Hlavná stránka</a>
            <a class="link" href="{{ redirect('all-products/page/0')->headers->get('Location') }}">Všetky produkty</a>
            @auth
                <a class="link" href="{{ redirect('cartAuth')->headers->get('Location') }}">Košík @if (Session::has('cart') && !empty(Session::get('cart')->items)) ({{ count(Session::get('cart')->items)}}) @endif</a>
            @else
                <a class="link" href="{{ redirect('cart')->headers->get('Location') }}">Košík @if (Session::has('cart') && !empty(Session::get('cart')->items)) ({{ count(Session::get('cart')->items)}}) @endif</a>
            @endauth
            </div>
        <div class="nav-bar-right">
            <a class="link" href="{{ redirect('contact')->headers->get('Location') }}">Kontakt</a>
            <a class="link" href="{{ redirect('business-conditions')->headers->get('Location') }}">Obchodné podmienky</a>
            <a class="link" href="{{ redirect('complaints')->headers->get('Location') }}">Reklamácia</a>
        </div>
</nav>
    @auth
        <button type="button" class="header-button" onclick="window.location.replace('{{ redirect('homepage')->headers->get('Location') }}')">Odhlásiť sa</button>
    @else
        <button type="button" class="header-button" onclick="window.location.replace('{{ redirect('login')->headers->get('Location') }}')">Prihlásenie</button>
        <button type="button" class="header-button" onclick="window.location.replace('{{ redirect('register')->headers->get('Location') }}')">Registrácia</button>
    @endauth
        <button type="button" class="header-button" onclick="window.location.replace('{{ redirect('search')->headers->get('Location') }}/' + document.getElementById('search').value)">Hľadať</button>
    
    <input type="text" class="header-search" id="search" placeholder="Vyhľadávanie">
    @auth
        <form action="{{ route('showProfile') }}" method="post">
        {!! csrf_field() !!}
            <input type=image class="profile-button" src="{{ asset('storage/src/user-icon.png') }}" alt="Profile">
        </form>
    @endauth
</header>
<a method="GET" href="{{ route('homepage') }}"><img src="{{ asset('storage/src/logo.jpg') }}" alt="Logo" class="header-logo"></a>