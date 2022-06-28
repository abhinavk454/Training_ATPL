CREATE TABLE infant (
    ItemCode INT NOT NULL PRIMARY KEY,
    Item VARCHAR(20),
    DatePurchase DATE,
    UnitPrice INT,
    Discount INT
);
INSERT INTO infant
VALUES (101, 'Frock', '2016-01-23', 700, 10),
    (102, 'Cot', '2015-09-23', 5000, 25),
    (103, 'Soft Toy', '2016-06-17', 800, 10),
    (104, 'Baby Socks', '2014-10-16', 100, 7),
    (105, 'Baby Suit', '2015-09-20', 500, 5);
-- 1. Write a query to display the details about the Cot and baby suit
SELECT *
FROM infant
WHERE Item = 'Cot'
    OR Item = 'Baby Suit';
-- 2. Write a query to display the names of items and their unit price that have unit price
-- less than 800 and discount more than 5%.
SELECT Item,
    UnitPrice,
    Discount
FROM infant
WHERE UnitPrice < 800
    AND Discount > 5;
-- 3. Write a query to display the names of items and their date of purchase that were
-- purchased after 31stDecember, 2015.
SELECT Item,
    DatePurchase
FROM infant
WHERE DatePurchase > '2015-12-31';
-- 4. Write a query to display the number of items that have more than 10% as discount.
SELECT COUNT(*)
FROM infant
WHERE Discount > 10;
-- 5.Write a query to display the item code and unit price in descending order of unit
-- price.
SELECT ItemCode,
    UnitPrice
FROM infant
ORDER BY UnitPrice DESC;
-- 6. Write a query to increase the unit price of each item by 10% of their unit price.
UPDATE infant
SET UnitPrice = UnitPrice * 1.1;
-- 7. Write a query to display the names of items that have “Baby‟ anywhere in their item
-- names.
SELECT Item
FROM infant
WHERE Item LIKE '%Baby%';
-- 8. Write a query to display the highest unit price of item
SELECT MAX(UnitPrice)
FROM infant;
-- 9. Write a query to show all items in ascending order of the items
SELECT *
FROM infant
ORDER BY Item;