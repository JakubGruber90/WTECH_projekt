-- Payment Methods
INSERT INTO payment_methods(id, title) VALUES (1, 'Card');
INSERT INTO payment_methods(id, title) VALUES (2, 'Cash');

-- Roles
INSERT INTO roles(id, created_at, updated_at, role) VALUES (1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'ADMIN');
INSERT INTO roles(id, created_at, updated_at, role) VALUES (2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'USER');

-- Shipping Types
INSERT INTO shipping_types(id, title, price) VALUES (1, 'Courier', 3.60);
INSERT INTO shipping_types(id, title, price) VALUES (2, 'Post', 2.20);
INSERT INTO shipping_types(id, title, price) VALUES (3, 'Mail', 2.50);

-- Products

-- Basketball
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (1, 'New Balance Fresh Foam BB', 'basketball', 'New Balance Fresh Foam BB má jednu z doteraz najpohodlnejších podrážok vďaka medzipodrážke Fresh Foam X po celej dĺžke', 130, 'NEW BALANCE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (2, 'Adidas Harden vol.7', 'basketball', 'Harden Vol.7 je založená na medzipodrážke Boost a pôsobí mimoriadne citlivo a ľahko, s pomocou pásikov na prednej časti chodidla a päty, ktoré držia nohu na mieste, takže medzi reakciou a pohybom nedochádza k oneskoreniu', 160, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (3, 'Nike Kyrie Infinity', 'basketball', 'Nike Kyrie Infinity ponúka jeden z najlepších strihov z radu Kyrie vďaka vnútorným pásikom, ktoré prechádzajú cez zvršok a držia šnúrky', 70, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (4, 'Nike Jordan XXXVII SP', 'basketball', 'Tento dizajn skutočne vynikal vďaka svojej elegantnej siluete a tento aspekt zostal pre ďalšiu generáciu štýlu: Jordan XXXVII', 175, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (5, 'Adidas Trae Young 2.0', 'basketball', 'Model Trae Young 2.0, ktorý vymenil nízku stavbu za zvýšenú podporu členku, má pletený zvršok, ktorý vás drží na mieste bez použitia šnúrok', 112, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (6, 'Nike Luka 1', 'basketball', 'Podrážková jednotka je definovaná penou Formula 23 po celej dĺžke, ktorá neponúka rovnaký odraz ako technickejšie podošvy v zhrnutí, ale pôsobí vysoko podporne a maximálne tlmí', 110, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (7, 'Adidas Dame 8', 'basketball', 'Topánka je vyrobená z výrobného odpadu, aby sa znížilo používanie nových materiálov', 65, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (8, 'Nike Cosmic Unity 2', 'basketball', 'Vďaka výrazne tenkej podrážke Cosmic Unity sľubuje nižšiu hmotnosť, lepšiu priľnavosť a lepšiu celkovú odozvu', 124, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (9, 'Nike Jordan 6 Rings', 'basketball', 'Nike Jordan 6 Rings preberá prvky z každej topánky, ktorú nosí Mike v sérii Championship', 188, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (10, 'Li-Ning Way Of Wade 10', 'basketball', 'Milujeme bielu basketbalovú obuv, takže Li-Ning Way of Wade 10 tam dostáva najlepšie známky, ale má aj veľa technickej zdatnosti', 293, 'LI-NING', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);

-- Volleyball
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (11, 'Asics Sky Elite FF 2', 'volleyball', 'Toto je jednoducho najlepšia volejbalová obuv, akú sme v posledných rokoch videli na trhu', 129, 'ASICS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (12, 'Mizuno Wave Momentum 2', 'volleyball', 'Prvá vec, ktorú si všimnete na Momentum 2, je, že sú ľahšie ako pierko', 127, 'MIZUNO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (13, 'Nike React Hyperset', 'volleyball', 'Pokiaľ ide o volejbalové topánky Nike, je to tesné medzi HyperAces a Hypersets', 89, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (14, 'Nike HyperAce 2', 'volleyball', 'Majú rozsiahle polstrovanie okolo členku, vďaka čomu sú mimoriadne pohodlné, ale zároveň uzamykajú pätu pre vynikajúcu podporu pri bočných pohyboch', 109, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (15, 'Puma MB.01', 'volleyball', 'Puma dala o sebe vedieť tým, že Clyde All Pro je všeobecne považovaná za najlepšie výkonnú obuv roku svojho uvedenia na trh', 109, 'PUMA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (16, 'Mizuno Thunder Blade 3 Mid', 'volleyball', 'Cíťte sa rýchlo ako blesk v tejto ľahkej a pohodlnej volejbalovej topánke Thunder Blade 3 Mid', 99, 'MIZUNO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (17, 'Nike Air Max Volley Clay', 'volleyball', 'Táto obuv poskytuje nohám pohodlie a dobre ich drží, takže sa můžete sústrediť len na loptu', 79, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (18, 'Mizuno Wave Lightning Z6', 'volleyball', 'Táto ľahká, vysoko výkonná obuv Wave Lightning Z6 je technicky bezkonkurenčná - poskytuje najlepším hráčom na svete skvelý výkon na ihrisku', 119, 'MIZUNO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (19, 'Asics Netburber Ballistic', 'volleyball', 'Tieto ľahké halové topánky ponúka pohodlie, podporu a zlepšenie výkonu na ihrisku', 91, 'ASICS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (20, 'Adidas Crazyflight X2 MID', 'volleyball', 'Tenisky značky Adidas sú určené pre volejbal avšak sú vhodné aj na bežné nosenie, nakoľko sú pohodlné, veľmi ľahké perfektne sedia na nohe', 69, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);

-- Football
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (21, 'Adidas COPA Sense', 'football', 'Tieto bezšnurové kopačky Copa Sense od adidas boli navrhnuté so zvrškom K-Leather, ktorý je navrhnutý tak, aby dokonale zodpovedal tvaru vašej nohy', 158, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (22, 'New Balance Tekela v3+', 'football', 'Najnovšia Tekela V3+ Pro FG MST1FD35 bola navrhnutá pre hráčov tvoriacich hru, je to ideálna definícia kontroly hry', 149, 'NEW BALANCE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (23, 'Adidas Predator Edge', 'football', 'V kopačkách adidas Predator nazrieš na nádhernú hru menom futbal z úplne nového uhla', 150, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (24, 'Nike Phantom GT II', 'football', 'Nike Phantom GT 2 je inovácia, ktorá odomkne váš čas a poskytne optimálne podmienky na rozhodovanie zápasov', 74, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (25, 'New Balance Furon v6+', 'football', 'Technológia umiestnená v zvršku obuvi New Balance ovplyvňuje dokonalé prispôsobenie zvršku tvaru chodidla, vďaka čomu je topánka flexibilná a podporuje prirodzený pohyb', 128, 'NEW BALANCE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (26, 'PUMA Ultra Ultimate', 'football', 'Hrajte rýchlo. Futbalisti, stretnite sa s najhoršou nočnou morou obrancu: ULTRA Ultimate', 152, 'PUMA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (27, 'Nike Tiempo Legend IX', 'football', 'Pánske kopačky Nike Tiempo Legend IX sú jedny z tých najľahších', 132, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (28, 'PUMA Future Z 1.4', 'football', 'Lisovky Puma FUTURE Z 1.4 FG/AG s flexibilným pleteným zvrškom FUZIONFIT+, ktorý pevne obopne nohu a zaistí padnutie poskytujúce podporu', 149, 'PUMA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (29, 'Adidas X Speedportal', 'football', 'O novej generácii treba kričať a X Speedportal bol uvedený na trh v hlasnom farebnom prevedení Solar Green/Core Black/Solar Yellow', 183, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (30, 'Nike Air Zoom Mercurial', 'football', 'Nové Mercurials vždy upútajú pozornosť a keď sa skombinujú so špeciálnou jednotkou Zoom Air? No dosť bolo rečí.', 94, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);

-- Tennis
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (31, 'Asics Gel Resolution 9', 'tennis', '', 119, 'ASICS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (32, 'Asics Court FF 3', 'tennis', '', 99, 'ASICS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (33, 'Babolat Propulse Fury 3', 'tennis', '', 100, 'BABOLAT', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (34, 'Mizuno Wave Exceed Tour 5', 'tennis', '', 85, 'MIZUNO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (35, 'Yonex Power Cushion Eclipsion 4', 'tennis', '', 120, 'YONEX', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (36, 'Adidas adizero Ubersonic 4', 'tennis', '', 95, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (37, 'Babolat Jet Mach III', 'tennis', '', 115, 'BABOLAT', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (38, 'Asics Solution Speed FF 2', 'tennis', '', 89, 'ASICS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (39, 'Diadora Speed B.Icon', 'tennis', '', 105, 'DIADORA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (40, 'New Balance Lav Fresh Foam 2', 'tennis', '', 125, 'NEW BALANCE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);

-- Running
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (41, 'Asics Gel-Nimbus 25', 'running', '', 95, 'ASICS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (42, 'Brooks Ghost 15', 'running', '', 85, 'BROOKS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (43, 'Hoka One One Clifton 9', 'running', '', 60, 'HOKA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (44, 'Karhu Ikoni', 'running', '', 139, 'KARHU', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (45, 'New Balance Fresh Foam 1080 v12', 'running', '', 129, 'NEW BALANCE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (46, 'Mizuno Wave Rider 26', 'running', '', 119, 'MIZUNO', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (47, 'Saucony Ride 16', 'running', '', 109, 'SAUCONY', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (48, 'Nike Air Zoom Pegasus 40', 'running', '', 99, 'NIKE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (49, 'Altra Lone Peak 7', 'running', '', 89, 'ALTRA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (50, 'On Cloudmonster', 'running', '', 79, 'ON', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);

-- Hiking
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (51, 'Salomon X Ultra 4 GTX', 'hiking', '', 160, 'SALOMON', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (52, 'Merrell Moab 3', 'hiking', '', 110, 'MERRELL', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (53, 'Hoka Speedgoat 5', 'hiking', '', 155, 'HOKA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (54, 'La Sportiva Spire GTX', 'hiking', '', 209, 'LA SPORTIVA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (55, 'La Sportiva TX4', 'hiking', '', 159, 'LA SPORTIVA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (56, 'Danner Trail 2650', 'hiking', '', 170, 'DANNER', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (57, 'Hoka Anacapa Low GTX', 'hiking', '', 170, 'HOKA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (58, 'The North Face Vectiv Exploris 2 Futurelight', 'hiking', '', 169, 'THE NORTH FACE', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (59, 'Altra Lone Peak 7', 'hiking', '', 150, 'ALTRA', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (60, 'Adidas Terrex Swift R3 GTX', 'hiking', '', 160, 'ADIDAS', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, FALSE);

-- Pictures of Products

-- Basketball
INSERT INTO product_pictures(id, picture_url) 
VALUES (1, 'src/products_pictures/basketball/Basket1.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (1, 'src/products_pictures/basketball/Basket1-2.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (1, 'src/products_pictures/basketball/Basket1-3.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (1, 'src/products_pictures/basketball/Basket1-4.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (1, 'src/products_pictures/basketball/Basket1-5.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (2, 'src/products_pictures/basketball/Basket2.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (3, 'src/products_pictures/basketball/Basket3.png');
INSERT INTO product_pictures(id, picture_url) 
VALUES (4, 'src/products_pictures/basketball/Basket4.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (5, 'src/products_pictures/basketball/Basket5.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (6, 'src/products_pictures/basketball/Basket6.png');
INSERT INTO product_pictures(id, picture_url) 
VALUES (7, 'src/products_pictures/basketball/Basket7.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (8, 'src/products_pictures/basketball/Basket8.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (9, 'src/products_pictures/basketball/Basket9.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (10, 'src/products_pictures/basketball/Basket10.webp');

-- Volleyball
INSERT INTO product_pictures(id, picture_url) 
VALUES (11, 'src/products_pictures/volleyball/Volley1.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (11, 'src/products_pictures/volleyball/Volley1-2.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (11, 'src/products_pictures/volleyball/Volley1-3.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (11, 'src/products_pictures/volleyball/Volley1-4.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (11, 'src/products_pictures/volleyball/Volley1-5.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (12, 'src/products_pictures/volleyball/Volley2.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (13, 'src/products_pictures/volleyball/Volley3.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (14, 'src/products_pictures/volleyball/Volley4.png');
INSERT INTO product_pictures(id, picture_url) 
VALUES (15, 'src/products_pictures/volleyball/Volley5.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (16, 'src/products_pictures/volleyball/Volley6.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (17, 'src/products_pictures/volleyball/Volley7.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (18, 'src/products_pictures/volleyball/Volley8.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (19, 'src/products_pictures/volleyball/Volley9.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (20, 'src/products_pictures/volleyball/Volley10.jpg');

-- Football
INSERT INTO product_pictures(id, picture_url) 
VALUES (21, 'src/products_pictures/football/Foot1.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (21, 'src/products_pictures/football/Foot1-2.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (21, 'src/products_pictures/football/Foot1-3.avif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (21, 'src/products_pictures/football/Foot1-4.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (21, 'src/products_pictures/football/Foot1-5.png');
INSERT INTO product_pictures(id, picture_url) 
VALUES (22, 'src/products_pictures/football/Foot2.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (23, 'src/products_pictures/football/Foot3.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (24, 'src/products_pictures/football/Foot4.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (25, 'src/products_pictures/football/Foot5.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (26, 'src/products_pictures/football/Foot6.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (27, 'src/products_pictures/football/Foot7.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (28, 'src/products_pictures/football/Foot8.jpeg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (29, 'src/products_pictures/football/Foot9.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (30, 'src/products_pictures/football/Foot10.webp');

-- Tennis
INSERT INTO product_pictures(id, picture_url) 
VALUES (31, 'src/products_pictures/tennis/Tennis1.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (31, 'src/products_pictures/tennis/Tennis1-2.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (31, 'src/products_pictures/tennis/Tennis1-3.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (31, 'src/products_pictures/tennis/Tennis1-4.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (31, 'src/products_pictures/tennis/Tennis1-5.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (32, 'src/products_pictures/tennis/Tennis2.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (33, 'src/products_pictures/tennis/Tennis3.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (34, 'src/products_pictures/tennis/Tennis4.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (35, 'src/products_pictures/tennis/Tennis5.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (36, 'src/products_pictures/tennis/Tennis6.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (37, 'src/products_pictures/tennis/Tennis7.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (38, 'src/products_pictures/tennis/Tennis8.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (39, 'src/products_pictures/tennis/Tennis9.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (40, 'src/products_pictures/tennis/Tennis10.webp');

-- Running
INSERT INTO product_pictures(id, picture_url) 
VALUES (41, 'src/products_pictures/running/Run1.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (41, 'src/products_pictures/running/Run1-2.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (41, 'src/products_pictures/running/Run1-3.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (41, 'src/products_pictures/running/Run1-4.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (41, 'src/products_pictures/running/Run1-5.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (42, 'src/products_pictures/running/Run2.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (43, 'src/products_pictures/running/Run3.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (44, 'src/products_pictures/running/Run4.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (45, 'src/products_pictures/running/Run5.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (46, 'src/products_pictures/running/Run6.jpeg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (47, 'src/products_pictures/running/Run7.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (48, 'src/products_pictures/running/Run8.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (49, 'src/products_pictures/running/Run9.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (50, 'src/products_pictures/running/Run10.jpg');

-- Hiking
INSERT INTO product_pictures(id, picture_url) 
VALUES (51, 'src/products_pictures/hiking/Hike1.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (51, 'src/products_pictures/hiking/Hike1-2.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (51, 'src/products_pictures/hiking/Hike1-3.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (51, 'src/products_pictures/hiking/Hike1-4.png');
INSERT INTO product_pictures(id, picture_url) 
VALUES (51, 'src/products_pictures/hiking/Hike1-5.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (52, 'src/products_pictures/hiking/Hike2.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (53, 'src/products_pictures/hiking/Hike3.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (54, 'src/products_pictures/hiking/Hike4.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (55, 'src/products_pictures/hiking/Hike5.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (56, 'src/products_pictures/hiking/Hike6.webp');
INSERT INTO product_pictures(id, picture_url) 
VALUES (57, 'src/products_pictures/hiking/Hike7.jfif');
INSERT INTO product_pictures(id, picture_url) 
VALUES (58, 'src/products_pictures/hiking/Hike8.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (59, 'src/products_pictures/hiking/Hike9.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (60, 'src/products_pictures/hiking/Hike10.jpg');

-- Sizes
INSERT INTO sizes(id, size) VALUES (1, 36);
INSERT INTO sizes(id, size) VALUES (2, 37);
INSERT INTO sizes(id, size) VALUES (3, 38);
INSERT INTO sizes(id, size) VALUES (4, 39);
INSERT INTO sizes(id, size) VALUES (5, 40);
INSERT INTO sizes(id, size) VALUES (6, 41);
INSERT INTO sizes(id, size) VALUES (7, 42);
INSERT INTO sizes(id, size) VALUES (8, 43);
INSERT INTO sizes(id, size) VALUES (9, 44);
INSERT INTO sizes(id, size) VALUES (10, 45);
INSERT INTO sizes(id, size) VALUES (11, 46);
INSERT INTO sizes(id, size) VALUES (12, 47);
INSERT INTO sizes(id, size) VALUES (13, 48);

-- Sizes of Products
INSERT INTO size_products VALUES (1, 1, 1, 1);
INSERT INTO size_products VALUES (2, 2, 2, 2);
INSERT INTO size_products VALUES (3, 3, 3, 3);
INSERT INTO size_products VALUES (4, 4, 4, 4);
INSERT INTO size_products VALUES (5, 5, 5, 5);
INSERT INTO size_products VALUES (6, 6, 6, 6);
INSERT INTO size_products VALUES (7, 7, 7, 7);
INSERT INTO size_products VALUES (8, 8, 8, 8);
INSERT INTO size_products VALUES (9, 9, 9, 9);
INSERT INTO size_products VALUES (10, 10, 10, 10);
INSERT INTO size_products VALUES (11, 11, 11, 11);
INSERT INTO size_products VALUES (12, 12, 12, 12);
INSERT INTO size_products VALUES (13, 13, 13, 13);
INSERT INTO size_products VALUES (14, 14, 12, 12);
INSERT INTO size_products VALUES (15, 15, 11, 11);
INSERT INTO size_products VALUES (16, 16, 10, 10);
INSERT INTO size_products VALUES (17, 17, 9, 9);
INSERT INTO size_products VALUES (18, 18, 8, 8);
INSERT INTO size_products VALUES (19, 19, 7, 7);
INSERT INTO size_products VALUES (20, 20, 6, 6);
INSERT INTO size_products VALUES (21, 21, 5, 5);
INSERT INTO size_products VALUES (22, 22, 4, 4);
INSERT INTO size_products VALUES (23, 23, 3, 3);
INSERT INTO size_products VALUES (24, 24, 2, 2);
INSERT INTO size_products VALUES (25, 25, 1, 1);
INSERT INTO size_products VALUES (26, 26, 2, 2);
INSERT INTO size_products VALUES (27, 27, 3, 3);
INSERT INTO size_products VALUES (28, 28, 4, 4);
INSERT INTO size_products VALUES (29, 29, 5, 5);
INSERT INTO size_products VALUES (30, 30, 6, 6);
INSERT INTO size_products VALUES (31, 31, 7, 7);
INSERT INTO size_products VALUES (32, 32, 8, 8);
INSERT INTO size_products VALUES (33, 33, 9, 9);
INSERT INTO size_products VALUES (34, 34, 10, 10);
INSERT INTO size_products VALUES (35, 35, 11, 11);
INSERT INTO size_products VALUES (36, 36, 12, 12);
INSERT INTO size_products VALUES (37, 37, 13, 13);
INSERT INTO size_products VALUES (38, 38, 12, 12);
INSERT INTO size_products VALUES (39, 39, 11, 11);
INSERT INTO size_products VALUES (40, 40, 10, 10);
INSERT INTO size_products VALUES (41, 41, 9, 9);
INSERT INTO size_products VALUES (42, 42, 8, 8);
INSERT INTO size_products VALUES (43, 43, 7, 7);
INSERT INTO size_products VALUES (44, 44, 6, 6);
INSERT INTO size_products VALUES (45, 45, 5, 5);
INSERT INTO size_products VALUES (46, 46, 4, 4);
INSERT INTO size_products VALUES (47, 47, 3, 3);
INSERT INTO size_products VALUES (48, 48, 2, 2);
INSERT INTO size_products VALUES (49, 49, 1, 1);
INSERT INTO size_products VALUES (50, 50, 2, 2);
INSERT INTO size_products VALUES (51, 51, 3, 3);
INSERT INTO size_products VALUES (52, 52, 4, 4);
INSERT INTO size_products VALUES (53, 53, 5, 5);
INSERT INTO size_products VALUES (54, 54, 6, 6);
INSERT INTO size_products VALUES (55, 55, 7, 7);
INSERT INTO size_products VALUES (56, 56, 8, 8);
INSERT INTO size_products VALUES (57, 57, 9, 9);
INSERT INTO size_products VALUES (58, 58, 10, 10);
INSERT INTO size_products VALUES (59, 59, 11, 11);
INSERT INTO size_products VALUES (60, 60, 12, 12);
