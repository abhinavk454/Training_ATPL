CREATE TABLE pessangers(
    pnr INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    date_journey DATE NOT NULL,
    total_pessengers INT NOT NULL,
    no_kids INT NOT NULL,
    no_adults INT NOT NULL,
    source_id INT NOT NULL,
    destination_id INT NOT NULL,
    cost INT DEFAULT 0,
    FOREIGN KEY(source_id) REFERENCES stations(id),
    FOREIGN KEY(destination_id) REFERENCES stations(id)
);
INSERT INTO pessangers(
        name,
        date_journey,
        total_pessengers,
        no_kids,
        no_adults,
        source_id,
        destination_id
    )
VALUES(
        'John',
        '2020-01-01',
        2,
        1,
        1,
        1,
        2
    );