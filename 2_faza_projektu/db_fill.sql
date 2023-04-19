INSERT INTO payment_methods(id, title) VALUES (1, 'Card');
INSERT INTO payment_methods(id, title) VALUES (2, 'Cash');
SELECT * FROM payment_methods;

INSERT INTO shipping_types(id, title, price) VALUES (1, 'Courier', 3.60);
INSERT INTO shipping_types(id, title, price) VALUES (2, 'Post', 2.20);
INSERT INTO shipping_types(id, title, price) VALUES (3, 'Mail', 2.50);
SELECT * FROM shipping_types;

INSERT INTO products(id, title, category, description, price, brand, created_at, onsale) 
VALUES (1, 'SHOE 1', 'basketball', 'shoes', 120, 'NIKE', '2023-04-17', FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, onsale) 
VALUES (2, 'SHOE 2', 'basketball', 'shoes', 130, 'NIKE', '2023-04-17', FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, onsale) 
VALUES (3, 'SHOE 3', 'basketball', 'shoes', 140, 'NIKE', '2023-04-17', FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, onsale) 
VALUES (4, 'SHOE 4', 'basketball', 'shoes', 150, 'NIKE', '2023-04-17', TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, onsale) 
VALUES (5, 'SHOE 5', 'basketball', 'shoes', 160, 'NIKE', '2023-04-17', TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, onsale) 
VALUES (6, 'SHOE 6', 'basketball', 'shoes', 180, 'NIKE', '2023-04-17', TRUE);
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


INSERT INTO sizes(id, size, quantity) VALUES (1, 36, 3);
INSERT INTO sizes(id, size, quantity) VALUES (2, 37, 4);
INSERT INTO sizes(id, size, quantity) VALUES (3, 38, 3);
INSERT INTO sizes(id, size, quantity) VALUES (4, 39, 5);
INSERT INTO sizes(id, size, quantity) VALUES (5, 40, 7);
INSERT INTO sizes(id, size, quantity) VALUES (6, 41, 2);
INSERT INTO sizes(id, size, quantity) VALUES (7, 42, 6);
INSERT INTO sizes(id, size, quantity) VALUES (8, 43, 3);
INSERT INTO sizes(id, size, quantity) VALUES (9, 44, 4);
INSERT INTO sizes(id, size, quantity) VALUES (10, 45, 2);
INSERT INTO sizes(id, size, quantity) VALUES (11, 46, 1);
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
