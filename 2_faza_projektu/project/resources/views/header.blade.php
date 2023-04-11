<!--Header-->
<header class="header">
    <nav class="nav-bar">
        <div class="nav-bar-left">
            <a class="link" href="homepage">Hlavná stránka</a>
            <a class="link" href="#Contact">Kontakt</a>
            <a class="link" href="#BusinessConditions">Obchodné podmienky</a>
        </div>
        <div class="nav-bar-right">
            <a class="link" href="#Shipping">Doprava</a>
            <a class="link" href="#Payment">Platba</a>
            <a class="link" href="#Complaint">Reklamácia</a>
        </div>
</nav>
    <button type="button" class="header-button" onclick="loginPage()">Prihlásenie</button>
    <button type="button" class="header-button" onclick="registerPage()">Registrácia</button>
    <button type="button" class="header-button" onclick="search()">Hľadať</button>
    <input type="text" class="header-search" placeholder="Vyhľadávanie">
</header>
<img src="{{ asset('storage/src/logo.jpg') }}" alt="Logo" class="header-logo">
