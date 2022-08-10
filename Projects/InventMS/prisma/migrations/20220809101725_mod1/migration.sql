/*
  Warnings:

  - The primary key for the `Shipments` table will be changed. If it partially fails, the table could be left without primary key constraint.
  - You are about to drop the column `address` on the `Shipments` table. All the data in the column will be lost.
  - You are about to drop the column `sno` on the `Shipments` table. All the data in the column will be lost.
  - You are about to drop the `Orders` table. If the table is not empty, all the data it contains will be lost.
  - A unique constraint covering the columns `[itemId]` on the table `Inventory` will be added. If there are existing duplicate values, this will fail.
  - A unique constraint covering the columns `[orderNo]` on the table `Shipments` will be added. If there are existing duplicate values, this will fail.
  - Added the required column `quantity` to the `Inventory` table without a default value. This is not possible if the table is not empty.
  - Added the required column `id` to the `Shipments` table without a default value. This is not possible if the table is not empty.
  - Added the required column `orderNo` to the `Shipments` table without a default value. This is not possible if the table is not empty.
  - Made the column `shipmentDate` on table `Shipments` required. This step will fail if there are existing NULL values in that column.

*/
-- AlterTable
ALTER TABLE `Inventory` ADD COLUMN `quantity` INTEGER NOT NULL;

-- AlterTable
ALTER TABLE `Shipments` DROP PRIMARY KEY,
    DROP COLUMN `address`,
    DROP COLUMN `sno`,
    ADD COLUMN `id` INTEGER NOT NULL AUTO_INCREMENT,
    ADD COLUMN `orderNo` INTEGER NOT NULL,
    MODIFY `shipmentDate` DATETIME(3) NOT NULL,
    ADD PRIMARY KEY (`id`);

-- DropTable
DROP TABLE `Orders`;

-- CreateTable
CREATE TABLE `Order` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `orderNo` INTEGER NOT NULL,
    `itemId` INTEGER NOT NULL,
    `quantity` INTEGER NOT NULL DEFAULT 0,
    `barcode` INTEGER NOT NULL,
    `dateRequired` DATETIME(3) NULL,
    `dateCompleted` DATETIME(3) NULL,

    UNIQUE INDEX `Order_orderNo_key`(`orderNo`),
    UNIQUE INDEX `Order_itemId_key`(`itemId`),
    UNIQUE INDEX `Order_barcode_key`(`barcode`),
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateIndex
CREATE UNIQUE INDEX `Inventory_itemId_key` ON `Inventory`(`itemId`);

-- CreateIndex
CREATE UNIQUE INDEX `Shipments_orderNo_key` ON `Shipments`(`orderNo`);

-- AddForeignKey
ALTER TABLE `Order` ADD CONSTRAINT `Order_itemId_fkey` FOREIGN KEY (`itemId`) REFERENCES `Items`(`ino`) ON DELETE RESTRICT ON UPDATE CASCADE;

-- AddForeignKey
ALTER TABLE `Shipments` ADD CONSTRAINT `Shipments_orderNo_fkey` FOREIGN KEY (`orderNo`) REFERENCES `Order`(`orderNo`) ON DELETE RESTRICT ON UPDATE CASCADE;
