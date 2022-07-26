-- A database for railway ticket booking system

create table
    users(
        id BIGINT not null,
        role_id BIGINT not null,
        name VARCHAR(255) not null,
        email VARCHAR(255) not null,
        dob DATE not null,
        primary key(id)
    );

create table
    customers(
        id BIGINT not null,
        address VARCHAR(255) not null,
        name VARCHAR(255) not null,
        mobile VARCHAR(20) not null,
        email VARCHAR(255) not null,
        username VARCHAR(255) not null unique,
        password VARCHAR(255) not null,
        primary key(id)
    );

create table
    trains(
        id BIGINT not null,
        name VARCHAR(255) not null,
        type VARCHAR(255) not null,
        description VARCHAR(255) not null,
        number VARCHAR(255) not null,
        ticket VARCHAR(255) not null,
        primary key (id)
    );

create table
    payments(
        id BIGINT not null,
        customer_id BIGINT not null,
        description VARCHAR(255) not null,
        amount float not null,
        dop DATE DEFAULT CURRENT_DATE,
        primary key(id)
    );

create table
    bookings(
        id BIGINT not null,
        title VARCHAR(255) not null,
        type VARCHAR(255) not null,
        description VARCHAR(255) not null,
        ticket VARCHAR(255) not null,
        date DATE not null,
        primary key (id)
    );

create table
    roles(
        id BIGINT not null,
        title VARCHAR(255) not null,
        description VARCHAR(255) not null,
        primary key (id)
    );

create table
    permission(
        id BIGINT not null,
        role_id BIGINT not null,
        title VARCHAR(255) not null,
        module VARCHAR(255) not null,
        description VARCHAR(255) not null,
        primary key (id)
    );

create table
    tickets(
        id BIGINT not null,
        date DATE not null,
        type VARCHAR(255) not null,
        description VARCHAR(255) not null,
        customer_id BIGINT not null,
        primary key (id)
    );

alter table users
ADD
    CONSTRAINT FK_users_roles FOREIGN KEY (role_id) REFERENCES roles(id);

alter table payments
ADD
    CONSTRAINT FK_payments_customers FOREIGN KEY (customer_id) REFERENCES customers(id);

alter table tickets
ADD
    CONSTRAINT FK_tickets_customers FOREIGN KEY (customer_id) REFERENCES customers(id);

alter table payments
ADD
    CONSTRAINT FK_payments_customers FOREIGN KEY (customer_id) REFERENCES customers(id);

alter table permission
ADD
    CONSTRAINT FK_permissions_roles FOREIGN KEY (role_id) REFERENCES roles(id);