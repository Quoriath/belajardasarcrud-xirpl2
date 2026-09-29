-- Skema Database untuk Belajar Dasar CRUD XI RPL 2
CREATE DATABASE IF NOT EXISTS `dbsiswa`;
USE `dbsiswa`;

CREATE TABLE IF NOT EXISTS `tbsiswa` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nama` VARCHAR(100) NOT NULL,
    `kelas` VARCHAR(50) NOT NULL,
    `alamat` TEXT NOT NULL
);
