create table admin(
    username varchar(20) not null,
    password varchar(20) not null,
    name varchar(20) not null,
    primary key(username)
)
insert into admin
values('admin', 'admin', 'admin');