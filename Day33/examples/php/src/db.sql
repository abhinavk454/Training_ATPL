CREATE TABLE
    `user`(
        user_id VARCHAR(255) NOT NULL,
        name VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        role VARCHAR(255) NOT NULL,
        PRIMARY KEY (user_id),
        UNIQUE (user_id),
        UNIQUE (name)
    );

INSERT INTO
    user (user_id, name, password, role)
VALUES (
        'admin',
        'admin',
        'admin',
        'admin'
    ), ('user', 'user', 'user', 'user'), (
        'user2',
        'user2',
        'user2',
        'user'
    );

CREATE TABLE
    session(
        session_id VARCHAR(255) NOT NULL,
        user_id VARCHAR(255) NOT NULL,
        timestamp DATETIME NOT NULL default CURRENT_TIMESTAMP,
        PRIMARY KEY (session_id, timestamp),
        FOREIGN KEY (user_id) REFERENCES user(user_id),
    );