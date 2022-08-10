create table
    inventory.Admin (
        id int auto_increment primary key,
        email varchar(191) not null,
        name varchar(191) null,
        address varchar(191) null,
        constraint Admin_email_key unique (email)
    );

create table
    inventory.Items (
        ino int auto_increment primary key,
        barcode int not null,
        description varchar(191) null,
        constraint Items_barcode_key unique (barcode)
    );

create table
    inventory.Inventory (
        id int auto_increment primary key,
        itemId int not null,
        quantity int not null,
        constraint Inventory_itemId_key unique (itemId),
        constraint Inventory_itemId_fkey foreign key (itemId) references inventory.Items (ino) on update cascade
    );

create table
    inventory.Manager (
        id int auto_increment primary key,
        email varchar(191) not null,
        name varchar(191) null,
        address varchar(191) null,
        constraint Manager_email_key unique (email)
    );

create table
    inventory.`Order` (
        id int auto_increment primary key,
        orderNo int not null,
        itemId int not null,
        quantity int default 0 not null,
        barcode int not null,
        dateRequired datetime(3) null,
        dateCompleted datetime(3) null,
        constraint Order_barcode_key unique (barcode),
        constraint Order_itemId_key unique (itemId),
        constraint Order_orderNo_key unique (orderNo),
        constraint Order_itemId_fkey foreign key (itemId) references inventory.Items (ino) on update cascade
    );

create table
    inventory.Shipments (
        shipmentDate datetime(3) not null,
        id int auto_increment primary key,
        orderNo int not null,
        constraint Shipments_orderNo_key unique (orderNo),
        constraint Shipments_orderNo_fkey foreign key (orderNo) references inventory.`Order` (orderNo) on update cascade
    );

create table
    inventory.Storage (
        sno int auto_increment primary key,
        barcode int not null,
        name varchar(191) null,
        constraint Storage_barcode_key unique (barcode)
    );

create table
    inventory._prisma_migrations (
        id varchar(36) not null primary key,
        checksum varchar(64) not null,
        finished_at datetime(3) null,
        migration_name varchar(255) not null,
        logs text null,
        rolled_back_at datetime(3) null,
        started_at datetime(3) default CURRENT_TIMESTAMP(3) not null,
        applied_steps_count int unsigned default '0' not null
    );