CREATE TABLE student (
    ID INT PRIMARY KEY,
    FirstName VARCHAR(20),
    LastName VARCHAR(20),
    DaysPresent INT,
    PhoneNo BIGINT,
    City VARCHAR(20),
    AssignmentsWritten INT,
    LastDatePresent DATE
);
INSERT INTO student
VALUES (
        1,
        'Vikram',
        'Swamy',
        80,
        7980738779,
        'Pune',
        9,
        '2021-02-21'
    ),
    (
        2,
        'Rajesh',
        'Kumar',
        100,
        8100815677,
        'Nagpur',
        2,
        '2021-02-21'
    ),
    (
        3,
        'Jay',
        'Shah',
        93,
        9830534563,
        'Aurangabad',
        3,
        '2021-02-21'
    ),
    (
        4,
        'Radhika',
        'Wadgaonkar',
        100,
        9432217930,
        'Pune',
        9,
        '2021-02-21'
    ),
    (
        5,
        'Aditi',
        'Sharma',
        72,
        8348509058,
        'Mumbai',
        8,
        '2021-02-21'
    ),
    (
        6,
        'Sakshi',
        'Banerjee',
        35,
        9051112483,
        'Bhopal',
        3,
        '2021-02-21'
    ),
    (
        7,
        'Manvi',
        'Khanna',
        1,
        8981441240,
        'Nagpur',
        0,
        '2021-02-21'
    ),
    (
        8,
        'Jay',
        'Shinde',
        2,
        7980547869,
        'Mumbai',
        0,
        '2021-02-21'
    );
CREATE TABLE marks (
    StudentID INT PRIMARY KEY,
    English INT,
    Math INT,
    Science INT
);
INSERT INTO marks
VALUES (1, 85, 94, 78),
    (2, 45, 25, 94),
    (3, 65, 99, 56),
    (4, 40, 39, 66),
    (5, 99, 100, 95),
    (6, 89, 89, 99),
    (9, 32, 45, 64);
-- SELECT *
-- FROM students s
--     JOIN marks m ON s.Id = m.StudentID;
-- SELECT *
-- FROM students s
--     LEFT JOIN marks m ON s.Id = m.StudentID;
CREATE TABLE myorder(
    oid VARCHAR(50) PRIMARY KEY,
    cust_id INT,
    price INT,
    FOREIGN KEY(cust_id) REFERENCES customer(cid)
) -- check constraints,primary key constraints,foreign key constraints,not null