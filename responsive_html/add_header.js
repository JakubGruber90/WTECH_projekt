const link_header = document.createElement("link");
link_header.href = "header.css";
link_header.rel = "stylesheet";
document.head.appendChild(link_header);
const header = document.createElement("header");
header.innerHTML = '<div class="header"><div class="nav-bar"><div class="nav-bar-left"><a class="link" href="#Homepage">Hlavná stránka</a><a class="link" href="#Contact">Kontakt</a><a class="link" href="#BusinessConditions">Obchodné podmienky</a></div><div class="nav-bar-right"><a class="link" href="#Shipping">Doprava</a><a class="link" href="#Payment">Platba</a><a class="link" href="#Complaint">Reklamácia</a></div></div><button type="button" class="header-button" onclick="loginPage()">Prihlásenie</button><button type="button" class="header-button" onclick="registerPage()">Registrácia</button><button type="button" class="header-button" onclick="search()">Hľadať</button><input type="text" class="header-search" placeholder="Vyhľadávanie"></div><img src="./src/logo.jpg" alt="Logo" class="header-logo">';
document.body.appendChild(header);