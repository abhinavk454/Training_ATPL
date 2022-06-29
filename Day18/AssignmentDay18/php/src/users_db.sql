create table users(
    username VARCHAR(20) not null primary key,
    fullname VARCHAR(20) not null,
    password varchar(20) not null,
    sques varchar(50) not null,
    answer varchar(50) not null,
    -- check for sequrity questions
    check(
        sques in (
            'what is your favorite color?',
            'what is your favorite food?',
            'what is your favorite game?'
        )
    ) -- check for answer
);
insert into users
values (
        '1234567890',
        'John',
        '1234567890',
        'what is your favorite color?',
        'red'
    ),
    (
        '9876543210',
        'Jane',
        '9876543210',
        'what is your favorite food?',
        'pizza'
    ),
    (
        '9988776655',
        'Jenny',
        '9988776655',
        'what is your favorite game?',
        'cricket'
    )