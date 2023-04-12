<link rel="stylesheet" href="{{ asset('storage/css/header.css') }}">
<header class="header">
    <nav class="nav-bar">
        <div class="nav-bar-left">
            <a class="link" href="homepage">Hlavná stránka</a>
            <a class="link" href="all-products">Všetky produkty</a>
            <a class="link" href="cart">Košík</a>
        </div>
        <div class="nav-bar-right">
            <a class="link" href="contact">Kontakt</a>
            <a class="link" href="business-conditions">Obchodné podmienky</a>
            <a class="link" href="complaint">Reklamácia</a>
        </div>
</nav>
    <button type="button" class="header-button" onclick="loginPage()">Prihlásenie</button>
    <button type="button" class="header-button" onclick="registerPage()">Registrácia</button>
    <button type="button" class="header-button" onclick="search()">Hľadať</button>
    <input type="text" class="header-search" placeholder="Vyhľadávanie">
</header>
<img src="{{ asset('storage/src/logo.jpg') }}" alt="Logo" class="header-logo">

<script>
    function loginPage() {
        window.location = "login";
    }

    function registerPage() {
        window.location = "register";
    }
</script>