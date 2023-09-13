CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    price DECIMAL(10, 2),
    image VARCHAR(255)
);

-- Product 1
INSERT INTO products (name, price, image)
VALUES ('Red T-shirt', 19.99, 'img/red_tshirt.jpg');

-- Product 2
INSERT INTO products (name, price, image)
VALUES ('Running Shoes', 49.99, 'img/running_shoes.jpg');

-- Product 3
INSERT INTO products (name, price, image)
VALUES ('Faded Jeans', 39.95, 'img/faded_jeans.jpg');

-- Product 4
INSERT INTO products (name, price, image)
VALUES ('Black Backpack', 29.99, 'img/black_backpack.jpg');

-- Product 5
INSERT INTO products (name, price, image)
VALUES ('Steel Wristwatch', 79.99, 'img/steel_wristwatch.jpg');

-- Product 6
INSERT INTO products (name, price, image)
VALUES ('Gray Hoodie', 34.50, 'img/gray_hoodie.jpg');

-- Product 7
INSERT INTO products (name, price, image)
VALUES ('Floral Summer Dress', 54.95, 'img/floral_dress.jpg');

-- Product 8
INSERT INTO products (name, price, image)
VALUES ('Wireless Headphones', 89.99, 'img/wireless_headphones.jpg');

-- Product 9
INSERT INTO products (name, price, image)
VALUES ('Cookbook', 15.99, 'img/cookbook.jpg');

-- Product 10
INSERT INTO products (name, price, image)
VALUES ('LED Desk Lamp', 24.95, 'img/led_desk_lamp.jpg');
