/*
  Warnings:

  - Added the required column `password` to the `Admin` table without a default value. This is not possible if the table is not empty.
  - Made the column `address` on table `Admin` required. This step will fail if there are existing NULL values in that column.

*/
-- AlterTable
ALTER TABLE `Admin` ADD COLUMN `password` VARCHAR(191) NOT NULL,
    MODIFY `address` VARCHAR(191) NOT NULL;
