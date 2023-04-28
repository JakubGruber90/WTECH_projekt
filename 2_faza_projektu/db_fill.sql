INSERT INTO payment_methods(id, title) VALUES (1, 'Card');
INSERT INTO payment_methods(id, title) VALUES (2, 'Cash');
SELECT * FROM payment_methods;

INSERT INTO roles(id, created_at, updated_at, role) VALUES (1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'ADMIN');
INSERT INTO roles(id, created_at, updated_at, role) VALUES (2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'USER');
SELECT * FROM roles;

INSERT INTO shipping_types(id, title, price) VALUES (1, 'Courier', 3.60);
INSERT INTO shipping_types(id, title, price) VALUES (2, 'Post', 2.20);
INSERT INTO shipping_types(id, title, price) VALUES (3, 'Mail', 2.50);
SELECT * FROM shipping_types;

INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (1, 'SHOE 1', 'basketball', 'shoes', 120, 'NIKE', '2023-04-17', '2023-04-17', FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (2, 'SHOE 2', 'basketball', 'shoes', 130, 'NIKE', '2023-04-17', '2023-04-17', FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (3, 'SHOE 3', 'basketball', 'shoes', 140, 'NIKE', '2023-04-17', '2023-04-17', FALSE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (4, 'SHOE 4', 'basketball', 'shoes', 150, 'NIKE', '2023-04-17', '2023-04-17', TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (5, 'SHOE 5', 'basketball', 'shoes', 160, 'NIKE', '2023-04-17', '2023-04-17', TRUE);
INSERT INTO products(id, title, category, description, price, brand, created_at, updated_at, onsale) 
VALUES (6, 'SHOE 6', 'basketball', 'shoes', 180, 'NIKE', '2023-04-17', '2023-04-17', TRUE);
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
SELECT * FROM sizes;

INSERT INTO size_products VALUES (1, 1, 5, 2);
INSERT INTO size_products VALUES (2, 1, 6, 3);
INSERT INTO size_products VALUES (3, 1, 7, 4);
INSERT INTO size_products VALUES (4, 1, 8, 5);
INSERT INTO size_products VALUES (5, 2, 1, 6);
INSERT INTO size_products VALUES (6, 2, 2, 7);
INSERT INTO size_products VALUES (7, 2, 3, 8);
INSERT INTO size_products VALUES (8, 3, 9, 9);
INSERT INTO size_products VALUES (9, 3, 10, 10);
INSERT INTO size_products VALUES (10, 3, 11, 11);
INSERT INTO size_products VALUES (11, 4, 5, 12);
INSERT INTO size_products VALUES (12, 4, 6, 11);
INSERT INTO size_products VALUES (13, 4, 7, 10);
INSERT INTO size_products VALUES (14, 5, 3, 9);
INSERT INTO size_products VALUES (15, 5, 4, 8);
INSERT INTO size_products VALUES (16, 5, 5, 7);
INSERT INTO size_products VALUES (17, 5, 6, 6);
INSERT INTO size_products VALUES (18, 5, 7, 5);
INSERT INTO size_products VALUES (19, 5, 8, 4);
INSERT INTO size_products VALUES (20, 6, 1, 3);
INSERT INTO size_products VALUES (21, 6, 2, 2);
INSERT INTO size_products VALUES (22, 6, 3, 1);
INSERT INTO size_products VALUES (23, 6, 4, 2);
INSERT INTO size_products VALUES (24, 6, 5, 3);
INSERT INTO size_products VALUES (25, 6, 6, 4);
INSERT INTO size_products VALUES (26, 6, 7, 5);
INSERT INTO size_products VALUES (27, 6, 8, 6);
INSERT INTO size_products VALUES (28, 6, 9, 6);
INSERT INTO size_products VALUES (29, 6, 10, 5);
INSERT INTO size_products VALUES (30, 6, 11, 3);
SELECT * FROM size_products;
