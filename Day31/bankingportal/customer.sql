create table customers(
    user_id int not null auto_increment,
    name varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    account_number int not null,
    balance float not null,
    primary key(user_id),
    unique key(email),
    unique key(account_number)
) AUTO_INCREMENT = 100;
insert into customers
values(
        100,
        "Gopal",
        "gopal@gmail.com",
        "gopal",
        123456789,
        0.0
    ),
    (
        200,
        "ram",
        "ram@gmail.com",
        "ram",
        987654321,
        0.0
    ),
    (
        300,
        "shyam",
        "shyam@fmail.com",
        "shyam",
        123456889,
        0.0
    );