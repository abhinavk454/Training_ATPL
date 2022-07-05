create table feedback(
    name varchar(20) not null,
    email varchar(20) not null,
    tel varchar(20) not null,
    date date not null,
    remarks varchar(500) not null,
    primary key(name, date)
);