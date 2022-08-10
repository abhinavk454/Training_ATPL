-- CreateTable
CREATE TABLE `Admin` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(191) NOT NULL,
    `name` VARCHAR(191) NULL,
    `address` VARCHAR(191) NULL,

    UNIQUE INDEX `Admin_email_key`(`email`),
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Manager` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(191) NOT NULL,
    `name` VARCHAR(191) NULL,
    `address` VARCHAR(191) NULL,

    UNIQUE INDEX `Manager_email_key`(`email`),
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Storage` (
    `sno` INTEGER NOT NULL AUTO_INCREMENT,
    `barcode` INTEGER NOT NULL,
    `name` VARCHAR(191) NULL,

    UNIQUE INDEX `Storage_barcode_key`(`barcode`),
    PRIMARY KEY (`sno`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Items` (
    `ino` INTEGER NOT NULL AUTO_INCREMENT,
    `barcode` INTEGER NOT NULL,
    `description` VARCHAR(191) NULL,

    UNIQUE INDEX `Items_barcode_key`(`barcode`),
    PRIMARY KEY (`ino`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Inventory` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `itemId` INTEGER NOT NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Orders` (
    `ono` INTEGER NOT NULL AUTO_INCREMENT,
    `barcode` INTEGER NOT NULL,
    `dateRequired` DATETIME(3) NULL,
    `dateCompleted` DATETIME(3) NULL,

    UNIQUE INDEX `Orders_barcode_key`(`barcode`),
    PRIMARY KEY (`ono`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Shipments` (
    `sno` INTEGER NOT NULL AUTO_INCREMENT,
    `address` VARCHAR(191) NULL,
    `shipmentDate` DATETIME(3) NULL,

    PRIMARY KEY (`sno`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- AddForeignKey
ALTER TABLE `Inventory` ADD CONSTRAINT `Inventory_itemId_fkey` FOREIGN KEY (`itemId`) REFERENCES `Items`(`ino`) ON DELETE RESTRICT ON UPDATE CASCADE;
