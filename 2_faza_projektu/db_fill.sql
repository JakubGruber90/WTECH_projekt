INSERT INTO products(id, title, category, description, price, brand, quantity) 
VALUES (1, 'SHOE 1', 'basketball', 'shoes', 120, 'NIKE', 5);
INSERT INTO products(id, title, category, description, price, brand, quantity) 
VALUES (2, 'SHOE 2', 'basketball', 'shoes', 130, 'NIKE', 10);
INSERT INTO products(id, title, category, description, price, brand, quantity) 
VALUES (3, 'SHOE 3', 'basketball', 'shoes', 140, 'NIKE', 5);
INSERT INTO products(id, title, category, description, price, brand, quantity) 
VALUES (4, 'SHOE 4', 'basketball', 'shoes', 150, 'NIKE', 15);
INSERT INTO products(id, title, category, description, price, brand, quantity) 
VALUES (5, 'SHOE 5', 'basketball', 'shoes', 160, 'NIKE', 25);
INSERT INTO products(id, title, category, description, price, brand, quantity) 
VALUES (6, 'SHOE 6', 'basketball', 'shoes', 180, 'NIKE', 4);
SELECT * FROM products;

INSERT INTO product_pictures(id, picture_url) 
VALUES (1, 'src/new_1.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (2, 'src/new_2.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (3, 'src/new_3.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (4, 'src/new_1.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (5, 'src/new_2.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (6, 'src/kb_1.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (6, 'src/kb_2.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (6, 'src/kb_3.jpg');
INSERT INTO product_pictures(id, picture_url) 
VALUES (6, 'src/kb_4.jpg');
SELECT * FROM product_pictures;


INSERT INTO sizes VALUES (1, 36);
INSERT INTO sizes VALUES (2, 37);
INSERT INTO sizes VALUES (3, 38);
INSERT INTO sizes VALUES (4, 39);
INSERT INTO sizes VALUES (5, 40);
INSERT INTO sizes VALUES (6, 41);
INSERT INTO sizes VALUES (7, 42);
INSERT INTO sizes VALUES (8, 43);
INSERT INTO sizes VALUES (9, 44);
INSERT INTO sizes VALUES (10, 45);
INSERT INTO sizes VALUES (11, 46);
SELECT * FROM sizes;

INSERT INTO size_products VALUES (1, 5);
INSERT INTO size_products VALUES (1, 6);
INSERT INTO size_products VALUES (1, 7);
INSERT INTO size_products VALUES (1, 8);
INSERT INTO size_products VALUES (2, 1);
INSERT INTO size_products VALUES (2, 2);
INSERT INTO size_products VALUES (2, 3);
INSERT INTO size_products VALUES (3, 9);
INSERT INTO size_products VALUES (3, 10);
INSERT INTO size_products VALUES (3, 11);
INSERT INTO size_products VALUES (4, 5);
INSERT INTO size_products VALUES (4, 6);
INSERT INTO size_products VALUES (4, 7);
INSERT INTO size_products VALUES (5, 3);
INSERT INTO size_products VALUES (5, 4);
INSERT INTO size_products VALUES (5, 5);
INSERT INTO size_products VALUES (5, 6);
INSERT INTO size_products VALUES (5, 7);
INSERT INTO size_products VALUES (5, 8);
INSERT INTO size_products VALUES (6, 1);
INSERT INTO size_products VALUES (6, 2);
INSERT INTO size_products VALUES (6, 3);
INSERT INTO size_products VALUES (6, 4);
INSERT INTO size_products VALUES (6, 5);
INSERT INTO size_products VALUES (6, 6);
INSERT INTO size_products VALUES (6, 7);
INSERT INTO size_products VALUES (6, 8);
INSERT INTO size_products VALUES (6, 9);
INSERT INTO size_products VALUES (6, 10);
INSERT INTO size_products VALUES (6, 11);
SELECT * FROM size_products;
