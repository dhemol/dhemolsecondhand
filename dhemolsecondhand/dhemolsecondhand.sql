-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 01:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhemolsecondhand`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` varchar(10) NOT NULL,
  `nama_brg` varchar(40) NOT NULL,
  `harga_brg` int(40) NOT NULL,
  `desc_brg` text NOT NULL,
  `jml_brg` int(40) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `gambar_brg` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `harga_brg`, `desc_brg`, `jml_brg`, `kategori`, `gambar_brg`) VALUES
('DS01', 'Light Pink/Justin Bieber', 139900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/1.jpg'),
('DS02', 'Black/Justin Bieber', 199900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/2.jpg'),
('DS03', 'White/Justin Bieber', 129900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/3.jpg'),
('DS04', 'Black/Scareace', 169900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, '1', '../gambar/4.jpg'),
('DS05', 'Changes/Justin Bieber', 119900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Roughneck', '../gambar/5.jpg'),
('DS06', 'Black/Wild Child', 119900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Roughneck', '../gambar/6.jpg'),
('DS07', 'Cream Jacket', 179900, 'Shirt jacket in soft, felted fabric with a collar, buttons down the front and flap chest pockets with a button. Dropped shoulders, long sleeves with adjustable buttoning at the cuffs, and a rounded hem. Unlined. Relaxed Fit – a straight fit with good room for movement creating a comfortable, relaxed silhouette.', 10, 'Jacket', '../gambar/7.jpg'),
('DS08', 'Black Jacket', 189900, 'Shirt jacket in soft, felted fabric with a collar, buttons down the front and flap chest pockets with a button. Dropped shoulders, long sleeves with adjustable buttoning at the cuffs, and a rounded hem. Unlined. Relaxed Fit – a straight fit with good room for movement creating a comfortable, relaxed silhouette.', 10, 'Jacket', '../gambar/8.jpg'),
('DS09', 'Grey Jacket', 189900, 'Shirt jacket in soft, felted fabric with a collar, buttons down the front and flap chest pockets with a button. Dropped shoulders, long sleeves with adjustable buttoning at the cuffs, and a rounded hem. Unlined. Relaxed Fit – a straight fit with good room for movement creating a comfortable, relaxed silhouette.', 10, 'Jacket', '../gambar/9.jpg'),
('DS10', 'Super Green Sweater', 119900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Roughneck', '../gambar/10.jpg'),
('DS11', 'Black/Matrix', 129900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/11.jpg'),
('DS12', 'Black/Friends', 169900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/12.jpg'),
('DS13', 'White/Itchy', 189900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/13.jpg'),
('DS14', 'Red Jacket/NFL', 209900, 'Shirt jacket in soft, felted fabric with a collar, buttons down the front and flap chest pockets with a button. Dropped shoulders, long sleeves with adjustable buttoning at the cuffs, and a rounded hem. Unlined. Relaxed Fit – a straight fit with good room for movement creating a comfortable, relaxed silhouette.', 10, 'Jacket', '../gambar/14.jpg'),
('DS15', 'Green/Parka', 299900, 'Parka in woven fabric with a zip and wind flap with buttons down the front. Double-layered hood with an elastic drawstring and metal cord locks, diagonal flap front pockets with a button, and an inner pocket. Inner ribbing and an adjustable tab and buttons at the cuffs. Lining made from recycled polyester.', 10, 'Jacket', '../gambar/15.jpg'),
('DS16', 'Soft Pile Jacket', 229900, 'Shirt jacket in soft, felted fabric with a collar, buttons down the front and flap chest pockets with a button. Dropped shoulders, long sleeves with adjustable buttoning at the cuffs, and a rounded hem. Unlined. Relaxed Fit – a straight fit with good room for movement creating a comfortable, relaxed silhouette.', 10, 'Jacket', '../gambar/16.jpg'),
('DS17', 'Black/Justin Bieber', 199900, 'Top in sweatshirt fabric with a lined drawstring hood and long raglan sleeves with grosgrain trims down the sides. Kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/17.jpg'),
('DS18', 'Peach Pink/Dhemol', 159900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/18.jpg'),
('DS19', 'Black/Scareace', 199900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Hoodie', '../gambar/19.jpg'),
('DS20', 'Black/Screacee', 109900, 'Hoodie in soft sweatshirt fabric with a lined, drawstring hood, long sleeves, kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 10, 'Jacket', '../gambar/20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pageabout`
--

CREATE TABLE `pageabout` (
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pageabout`
--

INSERT INTO `pageabout` (`deskripsi`) VALUES
('<p style=\"text-align:center\"><img alt=\"cool\" src=\"http://localhost/shop/admin/ckeditor/plugins/smiley/images/shades_smile.gif\" style=\"height:20px; width:20px\" title=\"cool\" /> Kami adalah toko online yang sedang berjualan kaos <img alt=\"yes\" src=\"http://localhost/shop/admin/ckeditor/plugins/smiley/images/thumbs_up.gif\" style=\"height:20px; width:20px\" title=\"yes\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://localhost/shop/gambar/preview-1.jpg\" style=\"height:328px; width:328px\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pagekontak`
--

CREATE TABLE `pagekontak` (
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagekontak`
--

INSERT INTO `pagekontak` (`deskripsi`) VALUES
('<p><span style=\"font-family:lucida sans unicode,lucida grande,sans-serif\"><strong><span style=\"font-size:22px\">Hubungi Kami</span></strong></span></p>\r\n\r\n<p>lalayeyeye : +62 857 461 7445</p>\r\n\r\n<p>Email : lalayeyey@yahoo.com</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `username`, `password`, `nama`, `alamat`, `email`, `telp`) VALUES
(171, 'dhemol', 'Dm220715', 'Dede Maulana', 'Jl. H. Nawi Malik No. 14 RT02/02 Kelurahan Serua Kecamatan Bojongsari Kota Depok', 'dhemol@hotmail.com', '2134555');

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id`, `username`, `password`) VALUES
(8, 'admin', 'admin'),
(13, 'dhemol', 'dede');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_pembeli` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `id_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(40) NOT NULL,
  `jml` int(10) NOT NULL,
  `total` int(30) NOT NULL,
  `tanggal_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_pembeli`, `nama`, `alamat`, `id_brg`, `nama_brg`, `jml`, `total`, `tanggal_pesan`) VALUES
(10, 171, 'Dede Maulana', 'Jl. H. Nawi Malik No.14', 'DS15', 'Green/Parka', 1, 299900, '2021-01-08 10:04:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_brg` (`id_brg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_brg`) REFERENCES `barang` (`id_brg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
