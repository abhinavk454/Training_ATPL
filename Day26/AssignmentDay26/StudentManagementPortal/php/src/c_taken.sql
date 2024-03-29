CREATE TABLE c_taken(
    ct_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    reg_no VARCHAR(20) NOT NULL,
    c_name VARCHAR(20) NOT NULL,
    paid INT NOT,
    FOREIGN KEY (reg_no) REFERENCES student(reg_no),
    FOREIGN KEY (c_name) REFERENCES courses(c_name)
);
Insert into c_taken(reg_no, c_name, paid)
values('123', 'Java', 10000),
    ('123', 'NodeJS', 20000),
    ('123', 'Python', 1500),
    ('124', 'Java', 12000),
    ('124', 'NodeJS', 23000),
    ('124', 'Python', 1500),
    ('125', 'Java', 10000),
    ('125', 'NodeJS', 20000),
    ('125', 'Python', 1500),
    ('126', 'Java', 10000),
    ('126', 'NodeJS', 20000),
    ('126', 'Python', 1500),
    ('127', 'Java', 10000),
    ('127', 'NodeJS', 20000),
    ('127', 'Python', 1500),
    ('128', 'Java', 10000),
    ('128', 'NodeJS', 20000),
    ('128', 'Python', 1500),
    ('129', 'Java', 10000),
    ('129', 'NodeJS', 20000),
    ('129', 'Python', 1500),
    ('130', 'Java', 10000),
    ('130', 'NodeJS', 20000),
    ('130', 'Python', 1500),
    ('131', 'Java', 10000),
    ('131', 'NodeJS', 20000),
    ('131', 'Python', 1500),
    ('132', 'Java', 10000),
    ('132', 'NodeJS', 20000),
    ('132', 'Python', 1500);