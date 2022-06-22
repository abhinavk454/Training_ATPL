CREATE TABLE student(
    ADMN INT PRIMARY KEY,
    NAME VARCHAR(8),
    STREAM VARCHAR(10),
    OPTIONAL VARCHAR(5),
    AVERAGE INT
);
INSERT INTO student
VALUES (1001, 'Shrishti', 'Science', 'CS', 90),
    (1002, 'Ashi', 'Humanities', 'Maths', 80),
    (1003, 'Aditya', 'Commerce', 'IP', 60),
    (1004, 'Ritu Raj', 'Science', 'IP', 65),
    (1005, 'Sonali', 'Commerce', 'Maths', 60),
    (1006, 'Saumya', 'Science', 'IP', 65),
    (1007, 'Ashutosh', 'Science', 'IP', 95),
    (1008, 'Prashant', 'Commerce', 'P.ED', 80),
    (1009, 'Aman', 'Commerce', 'IP', 70),
    (10010, 'Rishab', 'Humanities', 'P.ED', 85);
-- 1. To display the details of all those students who have IP as their optional subject.
SELECT *
FROM student
WHERE OPTIONAL = 'IP';
-- 2. To display name, stream and optional of all those students whose name starts with “A‟.
SELECT NAME,
    STREAM,
    OPTIONAL
FROM student
WHERE NAME LIKE 'A%';
-- 3. To give an increase of 3 marks in the average of all those students of humanities section
-- who have Maths as their optional subject.
UPDATE student
SET AVERAGE = AVERAGE + 3
WHERE STREAM = 'Humanities'
    AND OPTIONAL = 'Maths';
-- 4. To display a name list of all those students who have average more than 75.
SELECT NAME
FROM student
WHERE AVERAGE > 75;
-- 5. To display names of Students whose names are four characters long.
SELECT NAME
FROM student
WHERE LENGTH(NAME) = 4;
-- 6. To display the names of students who have both science and commerce and average is
-- more than 70
SELECT NAME
FROM student
WHERE STREAM = 'Science'
    AND OPTIONAL = 'Commerce'
    AND AVERAGE > 70;
-- 7. To begin the names with A from the table, display them only
SELECT NAME
FROM student
ORDER BY NAME Asc;