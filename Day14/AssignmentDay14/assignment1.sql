create table client_master(
    clientno VARCHAR(20) NOT NULL PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    city VARCHAR(20) NOT NULL,
    pincode BIGINT NOT NULL,
    state VARCHAR(20) NOT NULL,
    baldue INT NOT NULL
);
insert into client_master
values (
        'C0001',
        'Ivan Bayross',
        'Mumbai',
        400054,
        'Maharashtra',
        15000
    ),
    (
        'C0002',
        'Mamta Muzumdar',
        'Madras',
        780001,
        'Tamil Nadu',
        0
    ),
    (
        'C0003',
        'Chhaya Bankar',
        'Mumbai',
        400057,
        'Maharashtra',
        5000
    ),
    (
        'C0004',
        'Ashwini Joshi',
        'Bengalore',
        560001,
        'Karanataka',
        0
    ),
    (
        'C0005',
        'Hansel Colaco',
        'Mumbai',
        400060,
        'Maharashtra',
        2000
    ),
    (
        'C0006',
        'Deepak Sharma',
        'Manglore',
        560050,
        'Karnataka',
        0
    );
-- select *
-- from client_master;
create table salesman_master(
    salesmanno VARCHAR(20) NOT NULL PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    address1 VARCHAR(20) NOT NULL,
    address2 VARCHAR(20) NOT NULL,
    city VARCHAR(20) NOT NULL,
    pincode BIGINT NOT NULL,
    state VARCHAR(20) NOT NULL
);
insert into salesman_master
values (
        'S0001',
        'Aman',
        'A/14',
        'Worli',
        'Mumbai',
        400002,
        'Maharashtra'
    ),
    (
        'S0002',
        'Omkar',
        '65',
        'Nariman',
        'Mumbai',
        400001,
        'Maharashtra'
    ),
    (
        'S0003',
        'Raj',
        'P-7',
        'Bandra',
        'Mumbai',
        400032,
        'Maharashtra'
    ),
    (
        'S004',
        'Ashish',
        'A/5',
        'Juhu',
        'Mumbai',
        400044,
        'Maharashtra'
    );
-- select *
-- from salesman_master;
create table sales_manager(
    salesmanno VARCHAR(20) not null PRIMARY KEY,
    saleamt BIGINT not null,
    tgttoget INT not null,
    ytdsales INT not null,
    remarks VARCHAR(20) not null
);
insert into sales_manager
values (
        'S0001',
        3000,
        100,
        50,
        'Good'
    ),
    (
        'S0002',
        3000,
        200,
        100,
        'Good'
    ),
    (
        'S0003',
        3000,
        200,
        100,
        'Good'
    ),
    (
        'S0004',
        3500,
        200,
        150,
        'Good'
    );
-- select *
-- from sales_manager;
CREATE TABLE product_master (
    productNo VARCHAR(6),
    description VARCHAR(12),
    profitpercent NUMERIC(2, 1),
    unitmeasure VARCHAR(5),
    qtyonhand INT,
    reorderlvl INT,
    sellprice INT,
    costprice INT
);
INSERT INTO product_master
VALUES (
        'P00001',
        'T-Shirt',
        5,
        'Piece',
        200,
        50,
        350,
        250
    ),
    ('P0345', 'Shirts', 6, 'Piece', 150, 50, 500, 350),
    (
        'P06734',
        'Cotton Jeans',
        5,
        'Piece',
        100,
        20,
        600,
        450
    ),
    ('P07865', 'Jeans', 5, 'Piece', 100, 20, 750, 500),
    (
        'P07868',
        'Trousers',
        2,
        'Piece',
        150,
        50,
        850,
        550
    ),
    (
        'P07885',
        'Pull Overs',
        2.5,
        'Piece',
        80,
        30,
        700,
        450
    ),
    (
        'P07965',
        'Denim Shirts',
        4,
        'Piece',
        100,
        40,
        350,
        250
    ),
    (
        'P07975',
        'Lycra Tops',
        5,
        'Piece',
        70,
        30,
        300,
        175
    ),
    ('P08865', 'Skirts', 5, 'Piece', 75, 30, 450, 300);
-- select *
-- from product_master;
-- Search Queries
-- 1. Find out name of all the clients
select name
from client_master;
-- 2. retrive entire content of client_master table
select *
from client_master;
-- 3. Retrive the list of names, city and state of all the clients
select name,
    city,
    state
from client_master;
-- 4. list the various products available form the product_master table
select description
from product_master;
-- 5. list all clinet which are located in mumbai
select name
from client_master
where city = 'Mumbai';
-- 6. Find the names of salesman who have a salary equal to RS.3000
select name
from salesman_master s
    join sales_manager sm on s.salesmanno = sm.salesmanno
where sm.saleamt = 3000;
-- Update Queries
-- 1. Change the city of client no. C00005 to 'Bengalore'
update client_master
set city = 'Bengalore'
where clientno = 'C00005';
-- 2. Change the baldue of client no. C00001 to RS1000
update client_master
set baldue = 1000
where clientno = 'C00001';
-- 3. Change the cost price of Trouser to RS 950
update product_master
set costprice = 950
where description = 'Trousers';
-- 4. Change the city of salesman to pune
update salesman_master
set city = 'Pune';