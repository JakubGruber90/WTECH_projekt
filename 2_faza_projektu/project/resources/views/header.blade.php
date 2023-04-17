<link rel="stylesheet" href="{{ asset('storage/css/header.css') }}">
<header class="header">
    <nav class="nav-bar">
        <div class="nav-bar-left">
            <a class="link" href="{{ redirect('/')->headers->get('Location') }}">Hlavná stránka</a>
            <a class="link" href="{{ redirect('all-products/page/1')->headers->get('Location') }}">Všetky produkty</a>
            <a class="link" href="{{ redirect('cart')->headers->get('Location') }}">Košík</a>
        </div>
        <div class="nav-bar-right">
            <a class="link" href="{{ redirect('contact')->headers->get('Location') }}">Kontakt</a>
            <a class="link" href="{{ redirect('business-conditions')->headers->get('Location') }}">Obchodné podmienky</a>
            <a class="link" href="{{ redirect('complaints')->headers->get('Location') }}">Reklamácia</a>
        </div>
</nav>
    <button type="button" class="header-button" onclick="window.location.replace('{{ redirect('login')->headers->get('Location') }}')">Prihlásenie</button>
    <button type="button" class="header-button" onclick="window.location.replace('{{ redirect('register')->headers->get('Location') }}')">Registrácia</button>
    <button type="button" class="header-button" onclick="window.location.replace('{{ redirect('search')->headers->get('Location') }}/' + document.getElementById('search').value)">Hľadať</button>
    <input type="text" class="header-search" id="search" placeholder="Vyhľadávanie">
</header>
<img src="{{ asset('storage/src/logo.jpg') }}" alt="Logo" class="header-logo">