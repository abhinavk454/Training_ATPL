create table users (
    uid varchar(225) not null PRIMARY KEY,
    fullname varchar(255) not null,
    password varchar(255) not null,
);
insert into users
values ('admin', 'Admin', 'admin');