CREATE TABLE admin(
    username VARCHAR(20) NOT NULL,
    PASSWORD VARCHAR(20) NOT NULL,
    NAME VARCHAR(20) NOT NULL,
    PRIMARY KEY(username)
);
INSERT INTO admin
VALUES('admin', 'admin', 'admin');