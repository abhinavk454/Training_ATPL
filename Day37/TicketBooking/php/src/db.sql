-- create table

--     users(

--         id int not null auto_increment primary key,

--         name varchar(255) not null,

--         age int not null,

--         address varchar(255) not null,

--         role varchar(255) not null,

--         phone varchar(255) not null,

--         email varchar(255) not null,

--         password varchar(255) not null,

--         created_at datetime not null default(current_timestamp),

--         unique(email),

--         check(age >= 18),

--         check(role in ('admin', 'user'))

--     );

-- create table

--     passengers(

--         id int not null auto_increment primary key,

--         user_id int not null,

--         name varchar(255) not null,

--         age int not null,

--         gender varchar(255) not null,

--         email varchar(255) not null,

--         unique(email)

--     );

-- create table

--     trains(

--         id int not null auto_increment primary key,

--         name varchar(255) not null,

--         type varchar(255) not null,

--         number int not null,

--         seat_count int not null,

--         route_id int not null,

--         date datetime not null,

--         departure_time datetime not null,

--         arrival_time datetime not null,

--         created_at datetime default(current_timestamp),

--         unique(name),

--         unique(number),

--         check(src_id != dest_id)

--     );

-- create table

--     tickets(

--         id int not null auto_increment primary key,

--         user_id int not null,

--         passenger_id int not null,

--         train_id int not null,

--         seat_number int not null,

--         price int not null,

--         journey_date datetime not null,

--         created_at datetime not null default(current_timestamp),

--         unique(

--             passenger_id,

--             train_id,

--             seat_number

--         )

--     );

-- create table

--     stations(

--         id int not null auto_increment primary key,

--         name varchar(255) not null,

--         coordinate_x float not null,

--         coordinate_y float not null,

--         created_at datetime not null default(current_timestamp),

--         unique(name)

--     );

-- create table

--     routes(

--         id int not null auto_increment primary key,

--         src_id int not null,

--         dest_id int not null,

--         train_id int not null,

--         created_at datetime not null default(current_timestamp),

--         --TODO []fixme: unique(src_id, dest_id, train_id)

--         unique(src_id, dest_id, train_id),

--         check(src_id != dest_id)

--     );

-- alter table passengers

-- add

--     constraint fk_passengers_users foreign key(user_id) references users(id);

-- alter table trains

-- add

--     constraint fk_trains_routes foreign key(route_id) references routes(id);

-- alter table routes

-- add

--     constraint fk_routes_stations_s foreign key(src_id) references stations(id);

-- alter table routes

-- add

--     constraint fk_routes_stations_d foreign key(dest_id) references stations(id);

-- alter table routes

-- add

--     constraint fk_routes_trains foreign key(train_id) references trains(id);

-- alter table tickets

-- add

--     constraint fk_tickets_users foreign key(user_id) references users(id);

-- alter table tickets

-- add

--     constraint fk_tickets_trains foreign key(train_id) references trains(id);

-- alter table tickets

-- add

--     constraint fk_tickets_passengers foreign key(passenger_id) references passengers(id);

create table
    trainres.stations (
        id int auto_increment primary key,
        name varchar(255) not null,
        coordinate_x float not null,
        coordinate_y float not null,
        created_at datetime default (now()) not null,
        constraint name unique (name)
    );

create table
    trainres.routes (
        id int auto_increment primary key,
        src_id int not null,
        dest_id int not null,
        created_at datetime default (now()) not null,
        constraint src_id unique (src_id, dest_id),
        constraint fk_routes_stations_d foreign key (dest_id) references trainres.stations (id),
        constraint fk_routes_stations_s foreign key (src_id) references trainres.stations (id),
        check (`src_id` <> `dest_id`)
    );

create table
    trainres.trains (
        id int auto_increment primary key,
        name varchar(255) not null,
        type varchar(255) not null,
        number int not null,
        seat_count int not null,
        route_id int not null,
        date date not null,
        departure_time datetime not null,
        arrival_time datetime not null,
        created_at datetime default (now()) null,
        constraint name unique (name),
        constraint number unique (number),
        constraint fk_trains_routes foreign key (route_id) references trainres.routes (id)
    );

create table trainres.users
(
    id         int auto_increment
        primary key,
    name       varchar(255)             not null,
    age        int                      not null,
    address    varchar(255)             not null,
    role       varchar(255)             not null,
    phone      varchar(255)             not null,
    email      varchar(255)             not null,
    password   varchar(255)             not null,
    created_at datetime default (now()) not null,
    constraint email
        unique (email),
    check (`age` >= 18),
    check (`role` in (_utf8mb4\'admin\',_utf8mb4\'user\'))
);

create table
    trainres.passengers (
        id int auto_increment primary key,
        user_id int not null,
        name varchar(255) not null,
        age int not null,
        gender varchar(255) not null,
        email varchar(255) not null,
        constraint email unique (email),
        constraint fk_passengers_users foreign key (user_id) references trainres.users (id)
    );

create table
    trainres.tickets (
        id int auto_increment primary key,
        user_id int not null,
        train_id int not null,
        seat_number int not null,
        price int not null,
        journey_date datetime not null,
        created_at datetime default (now()) not null,
        passenger_id int null,
        constraint user_id unique (user_id, train_id, seat_number),
        constraint fk_tickets_passengers foreign key (passenger_id) references trainres.passengers (id),
        constraint fk_tickets_trains foreign key (train_id) references trainres.trains (id),
        constraint fk_tickets_users foreign key (user_id) references trainres.users (id)
    );