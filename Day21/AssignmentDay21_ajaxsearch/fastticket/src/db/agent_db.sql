create table agents(
    username varchar(100) primary key,
    password varchar(100) not null,
);
insert into agents(username, password)
values('admin', 'admin');