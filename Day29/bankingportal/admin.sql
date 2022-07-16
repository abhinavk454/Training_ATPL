create table admin(
    user_id int not null auto_increment,
    name varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    primary key(user_id),
    unique key(email)
) AUTO_INCREMENT = 100;
insert into admin(name, email, password)
values('admin', 'admin@123.com', 'admin');