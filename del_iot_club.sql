-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 01:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `del_iot_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `alamat`) VALUES
(111048, 'Ahmad Zatnika Purwalaksana', 'AhmadPurwalaksana', 'purwalaksana123', 'Sitoluama');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Ahmad Zatnika Purwalaksana', 'AhmadPurwalaksana', 'purwalaksana123', 'admin'),
(2, 'Alex Sander Hutapea', 'Alex_Sander', 'alex123', 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `username`, `password`, `prodi`) VALUES
(11319014, 'Alex Sander', 'Alex_Sander', 'Alex_Sander', 'D3-TI'),
(11319022, 'Loise Lumban Raja', 'Loise123', 'Loise123', 'D3-TI'),
(11319051, 'Putri Sitompul', 'Putrisitompul', 'Putrisitompul', 'D3-TI');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `tanggal_artikel` date NOT NULL,
  `topik` varchar(100) NOT NULL,
  `deskripsiArtikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `tanggal_artikel`, `topik`, `deskripsiArtikel`) VALUES
(111, '2020-05-04', 'Apa itu IoT?', 'Lorem ipsum dolor sit amet, consectetur adipisicin...'),
(112, '2020-05-07', 'Aktivitas dari Del IoT Club', 'Lorem ipsum dolor sit amet, consectetur adipisicin...'),
(113, '2020-05-10', 'Seberapa Penting IoT dalam Kehidupan Sehari-hari?', 'Lorem ipsum dolor sit amet, consectetur adipisicin...'),
(114, '2020-05-12', 'Penemuan Internet of Things', 'Lorem ipsum dolor sit amet, consectetur adipisicin... Lorem ipsum dolor sit amet, consectetur adipisicin...');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftar` int(11) NOT NULL,
  `nimPendaftar` varchar(30) NOT NULL,
  `namaPendaftar` varchar(100) NOT NULL,
  `prodiPendaftar` varchar(30) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `motivasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftar`, `nimPendaftar`, `namaPendaftar`, `prodiPendaftar`, `angkatan`, `motivasi`) VALUES
(1, '11318034', 'Maria Panggabean', 'D3 Teknik Komputer', '2018', 'Ingin mengetahui lebih banyak tentang Internet Of Things'),
(2, '11319022', 'Suci Sipahutar', 'D4- TRPL', '2019', 'Ingin mengembangkan diri di bidang IoT'),
(3, '11319029', 'Jeremi Simatupang', 'S1-SI', '2019', 'Banyak hal menarik dari Iot'),
(4, '11319022', 'Loise Michael Lumban Raja', 'D3 - Teknologi Informasi', '2019', 'Ingin membantu masyarakat dengan teknologi'),
(5, '11319001', 'Daud Manurung', 'D3 - Teknologi Informasi', '2019', 'Ingin menjadi berguna'),
(6, '11319002', 'Asido Panjaitan', 'D3 - Teknologi Informasi', '2019', 'Ingin ganteng'),
(7, '11319023', 'Rahul Sinaga', 'S1-Teknik Elektro', '2020', 'Menggunakan kemampuan dengan bijak dan tepat');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `tanggal_pengumuman` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `judulPengumuman` varchar(255) NOT NULL,
  `deskripsiPengumuman` text CHARACTER SET utf8,
  `gambarPengumuman` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `tanggal_pengumuman`, `judulPengumuman`, `deskripsiPengumuman`, `gambarPengumuman`) VALUES
(11, '2020-04-10 22:06:22', 'Perekrutan Anggota Baru Del IoT Club', 'Telah dibuka pendaftaran UKM (Unit Kegiatan Mahasiswa) Del Iot Club dengan syarat:- FAKULTAS FTIE- Tidak tingkat akhir- Memiliki ide-ide yang bermanfaat bagi manusia', '926-img1.png'),
(12, '2020-04-18 10:17:13', 'Pemilihan Kepengurusan Del IoT Club', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '154-img2.jpg'),
(13, '2020-04-25 01:09:10', 'Pertemuan Pengurus Del IoT Club', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '715-img2.jpg'),
(14, '2020-05-01 19:18:26', 'Proyek Baru Del IoT Club', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '837-bg_nav.jpg'),
(15, '2020-05-09 01:29:34', 'Pemberian Progress kerja', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '229-download.jpg'),
(30, '2020-05-15 16:17:43', 'Logo Terbaru Del Iot Club', '3 Buah gear yang mengartikan dibutuhkan nya kerjasama agar tercapainya sebuah tujuan', '424-Deliotclub.png'),
(31, '2020-05-15 17:47:09', 'Anak Del', 'Wakswakswaks', '670-signup-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(11) NOT NULL,
  `tanggal_proyek` date NOT NULL,
  `namaProyek` varchar(255) NOT NULL,
  `deskripsiProyek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `tanggal_proyek`, `namaProyek`, `deskripsiProyek`) VALUES
(1, '2020-05-15', 'Kacamata Serba Bisa Dong', 'Kacamata hitam memang paling pas buat tampil keren kapanpun kamu membutuhkannya. Tapi karena banyaknya merek dan model yang dijual di pasaran, tak mudah cari kacamata hitam yang berkualitas. Karena itu BP-Guide punya sederet rekomendasi kacamata berkualitas untukmu. Sekarang, kegunaan kacamata hitam bukan hanya untuk menjaga pandangan ketika hari sedang terik dan silau. Namun, fungsi dari kacamata hitam ini sekarang sudah berubah. Kacamata hitam telah menjadi aksesoris fashion yang nggak akan tergantikan dengan aksesoris lainnya untuk menambah tingkat kekerenanmu di mata umum.Kacamata hitam memang banyak modelnya, tapi kamu nggak boleh asal ketika memilihnya. Pilihlah yang fungsinya sesuai dengan kebutuhanmu dan memiliki kelebihan lainnya. Berikut adalah beberapa hal penting yang harus diperhatikan saat memilih kacamata hitam.'),
(621, '2020-05-11', 'Colokan Listrik Pintar', 'Ide project untuk Internet of Thing yang pertama kali di Del IoT Club adalah pembuatan colokan listrik pintar. Colokan listrik yang dimiliki dikoneksikan dengan Wi-Fi dan disambungkan dengan barang-barang elektronik seperti lampu atau oven. Jadi, Anda nantinya bisa menghidupkan maupun mematikan sambungan listrik dengan jangkauan internet pada ponsel yang terkoneksi ke colokan listrik tersebut. Dengan cara seperti ini, ketika berada di luar rumah dan lupa mematikan lampu atau barang elektronik, Anda hanya perlu membuka ponsel dan mematikan koneksi listriknya via jarak jauh.'),
(622, '2020-05-12', 'Alat IoT untuk memonitor dan memanajemen kesehatan', 'Teknologi internet of things juga banyak diimplementasikan dalam bidang kesehatan. Beberapa orang membuat inovasi di bidang kesehatan dengan membuat alat yang dapat memantau kesehatan pasien jarak jauh. Data dari sensor yang terpasang pada pasien nantinya akan ditransfer pada operatornya melalui internet. Dengan begitu, dokter bisa menganalisis kesehatan pasien dan menyarankan praktik klinis ketika terjadi hal-hal yang tidak diinginkan.'),
(625, '2020-05-15', 'Gelas Elektrik. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(626, '2020-05-15', 'Laptop Infrared', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(628, '2020-05-17', 'Handphone Serba Bisa Bisa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=629;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
