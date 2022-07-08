CREATE TABLE student(
    reg_no VARCHAR(20) NOT NULL,
    NAME VARCHAR(20) NOT NULL,
    PASSWORD VARCHAR(20) NOT NULL,
    marks INT NOT NULL,
    PRIMARY KEY(reg_no)
);
INSERT INTO student
VALUES('123', 'student1', 'student1', 50),
('124', 'student2', 'student2', 45),
('125', 'student3', 'student3', 40),
('126', 'student4', 'student4', 45),
('127', 'student5', 'student5', 40),
('128', 'student6', 'student6', 65),
('129', 'student7', 'student7', 50),
('130', 'student8', 'student8', 65),
('131', 'student9', 'student9', 90),
('132', 'student10', 'student10', 85),
('133', 'student11', 'student11', 80)