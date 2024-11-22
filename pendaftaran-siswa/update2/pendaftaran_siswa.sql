-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 04:38 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--
CREATE TABLE `pegawai` (
    `id_pegawai` INT NOT NULL AUTO_INCREMENT,
    `nama_pegawai` VARCHAR(64) NOT NULL,
    `jabatan` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB;

--
-- Table structure for table `calon_siswa`
--
CREATE TABLE `calon_siswa` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nama` VARCHAR(64) NOT NULL,
    `alamat` VARCHAR(255) NOT NULL,
    `jenis_kelamin` VARCHAR(16) NOT NULL,
    `agama` VARCHAR(16) NOT NULL,
    `sekolah_asal` VARCHAR(64) NOT NULL,
    `id_pegawai` INT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai`(`id_pegawai`)
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nama_pegawai`, `jabatan`) VALUES
('Budi Santoso', 'Staff Admin'),
('Ani Wijaya', 'Staff Akademik'),
('Rudi Hartono', 'Staff IT');

--
-- Dumping data for table `pegawai`
--

INSERT INTO `calon_siswa` (`nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `id_pegawai`) VALUES
('Ali', 'Jl. Merdeka', 'Laki-Laki', 'Islam', 'SMA Negeri 1', 1),
('Siti', 'Jl. Mawar', 'Perempuan', 'Islam', 'SMA Negeri 2', 2),
('Budi', 'Jl. Melati', 'Laki-Laki', 'Kristen', 'SMA Negeri 3', 3);

-- Menambahkan kolom `foto` ke tabel `calon_siswa`
ALTER TABLE `calon_siswa`
ADD `foto` VARCHAR(255) AFTER `sekolah_asal`;
