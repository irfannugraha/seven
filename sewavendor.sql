-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 11:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewavendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `no_hp` varchar(10) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `no_hp`, `password`, `email`) VALUES
('ADM001', 'Irfan', 'Sukapura', '0821310293', 'irfan123', 'Irfannugraha844@gmail.com'),
('ADM002', 'Ghazi', 'Sukapura', '0821313127', 'ghazi123', 'ghazinugraha844@gmail.com'),
('ADM003', 'Pangki', 'Sukapura', '0822342342', 'pangki123', 'pangkinugraha844@gmail.com'),
('ADM004', 'Arif', 'Sukapura', '0812312433', 'arif123', 'arifnugraha844@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(10) NOT NULL,
  `id_vendor` varchar(10) DEFAULT NULL,
  `jenis` varchar(15) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `stok` int(100) DEFAULT NULL,
  `harga_awal` int(11) NOT NULL,
  `harga_akhir` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  `rating` int(3) DEFAULT '0',
  `date_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_vendor`, `jenis`, `nama`, `stok`, `harga_awal`, `harga_akhir`, `deskripsi`, `foto`, `rating`, `date_upload`, `deleted`) VALUES
('BAR001', 'VEN001', '', 'Meja Bundar sekali lagi', 5, 50000, 0, '', '', 0, '2019-12-01 06:48:28', 1),
('BAR003', NULL, '', 'LCD', 5, 25000, 0, '', '', 0, '2019-12-01 06:48:28', 1),
('BAR004', 'VEN002', '', 'Kemeja', 100, 5000, 0, '', '', 0, '2019-12-01 06:48:28', 1),
('BAR006', 'VEN002', '', 'Baju Pengantin Wanita', 10, 50000, 0, '', '', 0, '2019-12-01 06:48:28', 1),
('BAR007', 'VEN001', 'rentalproduk', 'Canon EOS M100 Kit 15-45mm Kamera Mirrorless - White', 10, 100000, 3000000, 'Canon EOS M100 Kit 15-45mm Kamera Mirrorless - White, kamera digital yang ringan dan compact dengan built-in Wi-Fi, NFC, dan Bluetooth, kamera 24.2MP APS-C sehingga memudahkan Anda berbagi gambar dan video segera setelah Anda memakainya. Memiliki fitur Creative Assist, mode Self Portrait tersedia untuk memanfaatkan kemampuan kemiringan 180 derajat dari LCD touchscreen 3.0 Inch 1.04m-dot. Memiliki sensor CPS 24.2MP APS-C dan prosesor DIGIC 7, serta sensitivitas hingga ISO 25600. Sistem Dual Pixel CMOS AF memberikan fokus cepat dan akurat saat memotret kedua stills dan video, pengambilan gambar terus menerus hingga 4 fps dengan AF atau sampai 6,1 fps dengan kunci AF. Di luar stills, M100 memiliki kemampuan untuk merekam video berkualitas tinggi hingga 60 fps. Termasuk bodi kamera ini adalah lensa standar zoom EF-M 15-45mm f / 3.5-6.3 IS STM, yang memberikan jarak fokus fokal 24-72mm. Motor step STM memberikan performa autofocus yang cepat dan tenang, optical image stabilizer yang mengkompensasi 3,5 stop kamera untuk pengambilan gambar lebih tajam. Desain optik lensa juga menggabungkan trio elemen aspherical untuk mendapatkan kualitas gambar yang lebih tajam.\r\nSpesification:\r\n24,2 Megapixel APS-C CMOS sensor\r\nDIGIC 7 Image Processor\r\nDual Pixel CMOS AF\r\nISO 100 \'\'\" 25600\r\nMax. 6.1 fps continuous shooting\r\n49 AF points (maximum)\r\nFull HD video recording (1920x1080) 60p\r\nbuilt-in stereo mic.\r\nIn-camera 5 axis image stabilisation\r\nBuilt-in flash (Manual pop up flash)\r\n3.0 inch, 180o Tilt-up LCD touchscreen (approx. 1.04 million dots)\r\nEF-M lens mount\r\nBuilt in Wifi, NFC & Bluetooth\r\nSD/SDHC/SDXC card slot\r\n\'Creative Filter\' Image processing styles\r\nSelfie Mode', 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/produk_image%2F81S0A85qpcL._SX425_.jpg?alt=media&token=0e0ca575-cf35-419e-aa4d-839e15f11e4e', 8, '2019-12-01 06:59:53', 0),
('BAR008', 'VEN001', 'rentalproduk', 'KAMERA DSLR CANON EOS 250D KIT 18-55MM III ORIGINAL', 10, 75000, 2250000, 'KAMERA DSLR CANON EOS 250D KIT 18-55MM\r\nDIJAMIN 100% BARU DAN ORIGINAL\r\nGARANSI DISTRIBUTOR 1 TAHUN\r\n\r\nSpesifikasi:\r\n- 24.1 Megapixel CMOS APS-C sensor - Superb images, packed with detail\r\n- Dual Pixel CMOS AF - Fast confident focusing with Live View\r\n- DIGIC 8 processor - Great performance, even in low light\r\n- Wi-Fi and Bluetooth®² - Wireless connectivity\r\n- 4K Movies - Shoot exceptional quality movies\r\n- Optical viewfinder - For a natural view\r\n\r\nIsi Dalam Box :\r\n- Kamera Canon EOS 250\r\n- Lensa 18-55mm III\r\n- Baterai\r\n- Charger\r\n- Tali / Strap\r\n- Manual Book\r\n- Kartu Garansi', 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/produk_image%2Fu_10192409.jpg?alt=media&token=62a83439-fbfe-4f88-a7b7-9a26f464225e', 2, '2019-12-01 07:03:04', 0),
('BAR009', 'VEN001', 'rentalproduk', 'Elektrik Guitar Yamaha PAC112J / PAC 112J / PAC-112J', 5, 25000, 750000, 'Electric Guitar Yamaha PAC 112J\r\n\r\nThe class-leading Pacifica 112J combines player-focused, stage-ready spec with no-compromise construction and set-up to create the best value player\'s guitar on the market.\r\n\r\nPendaftaran Produk', 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/produk_image%2F5a78daa43689d5647fa0447e7432e606.jpeg?alt=media&token=efee7631-d279-4685-bf19-99517fb241d0', 4, '2019-12-01 07:04:49', 0),
('BAR010', 'VEN001', 'rentalproduk', 'proyektor Benq MS 506', 15, 15000, 450000, 'Spesifikasi Detail Produk Projector BENQ MS506\r\n\r\nSistem Proyeksi DLP\r\nResolusi Asli SVGA (800 x 600)\r\nKecerahan 3200 Lumens\r\nRasio Kontras 13000:1\r\nWarna1.07 Billion Colors\r\nLensaF=2.56-2.8, f=21-23.1mm\r\nRasio AspekNative 4:3 (5 aspect ratio selectable)\r\nThrow Ratio1.86~2.04 (53\" @ 2m)\r\nUkuran Image (Diagonal)60\"~120\"/ 300\' (Clear Focus/ Maximum)\r\nRasio Zoom1.1:1 (Powered)\r\nLamp Mode (Normal/Economic/SmartEco/LampSave)*4000/ 6000/ 6500/ 10000 hours\r\nKeystone Adjustment 1D, Vertical +/- 40 degrees\r\nResolution Support VGA (640 x 480) to UXGA (1600 x 1200)\r\nFrekuensi Horizontal 15K~102KHz\r\nTingkat Vertikal Scan 23~120Hz\r\nLamp Wattage 190W\r\nInterface\r\n-Computer In (D-sub 15pin) x 2 (Share with component)\r\n-Monitor Out (D-sub 15pin) x 1\r\n-Composite Video In (RCA) x 1\r\n-S-Video In (Mini DIN 4pin) x 1\r\n-Audio In (Mini Jack) x 1\r\n-Audio Out (Mini Jack) x 1\r\n-Speaker 2W x 1\r\n-USB (Type mini B) x 1 (Download & Page/down)\r\n-RS232 (DB-9pin) x 1\r\n-IR Receiver x 1 (Front)\r\nPasokan Daya AC100 to 240V, 50 to 60Hz\r\nPemakaian Daya Normal 270W, Eco 220W, Standby < 0.5W\r\n\r\nDimension (WxHxD) ;\r\n283 x 95 x 222mm\r\n\r\nWeight 1.8Kg (Without Lens)\r\nKomplit: unit proyektor, remot, tas', 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/produk_image%2F02-ms506-front.jpg?alt=media&token=109d0e32-940a-4d46-95b6-dbc5986b9f26', 10, '2019-12-01 07:06:35', 0),
('BAR011', 'VEN001', 'rentalproduk', 'Helm Best 1 Hitam doff Model INK Centro - Hitam', 20, 10000, 300000, 'RADE ORI 99% Mirip Orinya Gak akan bisa dibedakan kalau tidak dipegang/ Dilihat mendetail\r\nSangat Hemat, Dari pada beli ori 350rban (Silahkan Cek Harga Ori) dapet brng yang sama keren harga cm separuhnya,\r\n\r\nSudah SNI, Logo SNI Emboss Bukan Stiker Abal2\r\n\r\n\r\nPerhatian !! Ini bukan produk ink original, kami tidak menerima komplain di kemudian hari.\r\n\r\nSemua Warna Ready Jadi jika anda berminat silahkan Langsung ATC Gan, jikalau stok kosong akan kami kirim Warna Cadangan\r\n\r\nDiharapkan mempersiapkan minimal 3 warna cadangan atau kita kirim random sesuai stock yang ada\r\n\r\nYang sudah order dianggap sudah membaca semua deskripsi dengan Lengkap.\r\n\r\n\r\n\r\nSpesifikasi :\r\n* Original SNI berlogo emboss asli\r\n* Busa Tebal dan empuk dipakai\r\n* Terdapat sticker DOT & Hologram seperti ori\r\n* Sticker kualitas bagus\r\n* Model & warna Best Seller\r\n* Warna Cantik Mirip sama Original\r\n\r\nReady Berbagai Pilihan Warna\r\n* Merah Ferrari\r\n* Merah Maroon\r\n* Biru Muda/Blue Ice\r\n* Biru Tua\r\n* Biru Doff\r\n* Black Metalik\r\n* grey metalic\r\n* White/Putih\r\n* Yellow Egg\r\n* Pink Rose\r\n* Pink Magenta\r\n* Pink Doff\r\n* Hijau Apel\r\n* Ungu\r\n* Hitam Metalik\r\n* Orange\r\n\r\nSilahkan tambahkan 2 Item ini untuk kenyamanan Berbelanja anda :\r\n\r\n1. Full Proteksi Safety Packing untuk Kiriman Helm\r\n2. Garansi Warna Sesuai Pesanan', 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/produk_image%2F7852803_d5365573-2757-4953-a2cf-df02a78f50fd_2048_2048.jpg?alt=media&token=ae82c726-6cdd-4b1c-85e1-bfabdd8fe422', 15, '2019-12-01 07:08:02', 0),
('BAR012', 'VEN003', 'kamera', 'nana', 10, 80, 800, 'ini nana', NULL, 0, '2020-05-03 00:00:00', 1),
('BAR013', 'VEN003', 'kamera', 'kamu', 2, 80, 160, '', NULL, 0, '2020-05-03 00:00:00', 1),
('BAR014', 'VEN003', 'kamera', 'kamu', 3, 80, 240, '', NULL, 0, '2020-05-03 00:00:00', 1),
('BAR015', 'VEN003', 'kamera', 'nana', 10, 10000, 100000, '', NULL, 0, '2020-05-03 00:00:00', 1),
('BAR016', 'VEN003', '', '', 0, 0, 0, '', NULL, 0, '2020-05-03 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carousel_image`
--

CREATE TABLE `carousel_image` (
  `id_carousel_img` int(10) NOT NULL,
  `url_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel_image`
--

INSERT INTO `carousel_image` (`id_carousel_img`, `url_image`) VALUES
(1, 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/carousel_image%2FCOMING-SOON-1-766x394.jpg?alt=media&token=5c7d552a-95c8-4150-a139-bc8bcb440482'),
(2, 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/carousel_image%2Fdiskon-besar-11-11-2017.jpg?alt=media&token=94a17f74-a7da-48b2-a17c-eccd680c54f5'),
(3, 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/carousel_image%2Fgratis-ongkos-kirim.jpg?alt=media&token=28cfd138-6427-410b-bd74-bed282456e08'),
(4, 'https://firebasestorage.googleapis.com/v0/b/seven-a59af.appspot.com/o/carousel_image%2FDaily-Deals-Featured.png?alt=media&token=393d83a2-370f-478d-be0b-323adc64226a');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(9) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_update` date NOT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `no_hp` varchar(10) DEFAULT NULL,
  `profile_image` varchar(500) DEFAULT NULL,
  `id_vendor` varchar(10) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `email`, `password`, `last_update`, `alamat`, `no_hp`, `profile_image`, `id_vendor`, `deleted`) VALUES
('PEL001', 'Sugiri gira', '2019-09-17', '', 'sugiri@gmail.com', 'sugiri123', '2019-11-01', NULL, '0821839210', '', 'VEN001', 0),
('PEL002', 'Fernando', '2019-11-11', 'perempuan', 'fernando@gmail.com', 'fernando123', '0000-00-00', 'Jl Sayang, no.20, Jatinangor', '0821839203', '', 'VEN002', 0),
('PEL003', 'kamu', '0000-00-00', 'laki laki', 'kamu@gmail.com', 'kamu123', '2019-12-01', NULL, NULL, '', 'VEN002', 0),
('PEL004', 'pelanggan4', NULL, NULL, 'pelanggan4@gmail.com', 'pelanggan123', '2020-05-03', NULL, NULL, NULL, 'VEN003', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_barang`, `tanggal_pemesanan`, `tanggal_pembayaran`, `deleted`) VALUES
('TRN001', 'PEL001', 'BAR001', '2019-08-15', NULL, 0),
('TRN002', 'PEL001', 'BAR003', '2019-08-20', NULL, 0),
('TRN003', 'PEL002', 'BAR004', '2019-07-10', NULL, 0),
('TRN004', 'PEL002', 'BAR006', '2019-08-20', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` varchar(10) NOT NULL,
  `nama_vendor` varchar(200) NOT NULL,
  `alamat_vendor` varchar(500) NOT NULL,
  `daerah_vendor` varchar(100) DEFAULT NULL,
  `hp_vendor` varchar(10) NOT NULL,
  `profile_img` varchar(1000) DEFAULT NULL,
  `header_vendor` varchar(200) DEFAULT NULL,
  `deskripsi_vendor` varchar(500) DEFAULT NULL,
  `email_vendor` varchar(50) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `alamat_vendor`, `daerah_vendor`, `hp_vendor`, `profile_img`, `header_vendor`, `deskripsi_vendor`, `email_vendor`, `deleted`) VALUES
('VEN001', 'Greens Production', 'Jl Perak, No.14', 'Purwokerto', '0811920384', '', '', 'Akun resmi Acer estore Indonesia di Bukalapak.', 'green@gmail.com', 0),
('VEN002', 'Greens Productions', 'Jl Asia Afrika, No.20', 'Bandung', '0811920384', '', '', 'Akun resmi Acer estore Indonesia di Bukalapak.', '', 0),
('VEN003', 'Vendor', 'Jalan jalan', NULL, '089', NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `carousel_image`
--
ALTER TABLE `carousel_image`
  ADD PRIMARY KEY (`id_carousel_img`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel_image`
--
ALTER TABLE `carousel_image`
  MODIFY `id_carousel_img` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`);

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
