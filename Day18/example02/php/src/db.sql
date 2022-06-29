create table telephone(
    tno VARCHAR(20) not null primary key,
    fullname VARCHAR(20) not null,
    address VARCHAR(20) not null,
    state varhar(20) not null,
    pin VARCHAR(20) not null,
    deposit float not null,
);
insert into telephone
values (
        '1234567890',
        'John',
        'Hyderabad',
        'Andhra Pradesh',
        '500001',
        1000.00
    ),
    (
        '9876543210',
        'Jhonny',
        'Mumbau',
        'Maharashtra',
        '400001',
        999.99
    ),
    (
        '9988776655',
        'Jenny',
        'Kolkata',
        'West Bengal',
        '700001',
        220.00
    )