CREATE TABLE agents(
    username VARCHAR(100) PRIMARY KEY,
    PASSWORD VARCHAR(100) NOT NULL
);
INSERT INTO agents(username, PASSWORD)
VALUES('admin', 'admin');