-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2019 at 08:56 AM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sman1tam_webedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `img` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `img`, `tgl`) VALUES
(1, 'SMA Negeri 1 TAMAN SIDOARJO', 'img/9812011799692795banner1.jpg', '2019-04-29 02:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(356) NOT NULL,
  `kategori` varchar(56) NOT NULL,
  `text` longblob NOT NULL,
  `img` varchar(256) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita_satu`
--

CREATE TABLE `berita_satu` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `sts` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_satu`
--

INSERT INTO `berita_satu` (`id`, `title`, `img`, `text`, `sts`, `tgl`) VALUES
(2, 'BERITA UTAMA SEKOLAH', 'img/5554635412882177index.png', '<p>SELAMAT DATANG</p>\r\n\r\n<p>Siswa baru tahun pelajaran 2019/2020</p>\r\n\r\n<p>semoga menjadi siswa yang berprestasi di bidang akademi maupun non akademi</p>\r\n', 0, '2019-07-18 02:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(356) NOT NULL,
  `img` varchar(512) NOT NULL,
  `jenis` varchar(32) NOT NULL,
  `kat` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `img`, `jenis`, `kat`, `tgl`) VALUES
(15, 'SMAN 1 Taman Sidoarjo - 2016', 'https://www.youtube.com/embed/s84uOibAztM', 'video', 0, '2019-05-25 01:45:09'),
(16, 'BANJIR  JUARA SMANITA', 'img/5598911860423145fotoatasutama.jpg', 'foto', 3, '2019-05-27 05:08:10'),
(17, 'JUARA Cerdas Cermat Pajak', 'img/70191456423953616-ach-SMA-Negeri-1-Taman-Sidoarjo-Juara-Cerdas-Cermat-Pajak.jpg', 'foto', 3, '2019-05-27 05:16:10'),
(18, 'DBL SMANITA', 'img/2110607734322707dbl-east-java-series-2018_20180428_201617.jpg', 'foto', 3, '2019-05-27 06:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(356) NOT NULL,
  `img` varchar(256) NOT NULL,
  `jenis` varchar(56) NOT NULL,
  `kat` varchar(12) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `img`, `jenis`, `kat`, `tgl`) VALUES
(7, 'SMAN 1 Taman Sidoarjo ', 'img/844647713253285512.jpg', 'foto', '', '2019-05-27 01:59:12'),
(10, 'Kunjungan SMAN 1 Taman Sidoarjo', 'img/1162700840687084Kunjungan-SMAN-1-Taman-Sidoarjo-003.jpg', 'foto', '6', '2019-05-27 04:54:10'),
(11, '', '', 'foto', '', '2019-07-18 02:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `informasi2`
--

CREATE TABLE `informasi2` (
  `id` int(11) NOT NULL,
  `judul` varchar(356) NOT NULL,
  `text` longblob NOT NULL,
  `img` varchar(256) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi2`
--

INSERT INTO `informasi2` (`id`, `judul`, `text`, `img`, `penulis`, `tgl`) VALUES
(1, 'Kunjungan LPMB dari Aceh', '', 'images/thumb1.jpg', 'Jurnalisme Sekolah', '2019-04-04 23:53:16'),
(2, 'Kunjungan LPMB dari Aceh', '', 'images/thumb1.jpg', 'Jurnalisme Sekolah ', '2019-04-04 23:53:28'),
(3, 'Kunjungan LPMB dari Aceh', '', 'images/thumb1.jpg', 'Jurnalisme Sekolah', '2019-04-04 23:53:28'),
(4, 'Kunjungan LPMB dari Aceh', '', 'images/thumb1.jpg', 'Jurnalisme Sekolah', '2019-04-04 23:53:28'),
(5, 'Kunjungan LPMB dari Aceh', '', 'images/thumb1.jpg', 'Jurnalisme Sekolah', '2019-04-04 23:53:28'),
(6, 'Miljan Radovic Disinyalir Bakal Coret 3 Pemain Persib', '', 'images/thumb1.jpg', 'Jurnalisme Sekolah', '2019-04-04 23:53:28'),
(7, 'Kunjungan LPMB dari Aceh', '', 'images/thumb1.jpg', 'Jurnalisme Sekolah', '2019-04-04 11:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `jajaran`
--

CREATE TABLE `jajaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jabatan` varchar(356) NOT NULL,
  `img` varchar(512) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jajaran`
--

INSERT INTO `jajaran` (`id`, `nama`, `jabatan`, `img`, `tgl`) VALUES
(1, 'Drs. Nurus Shobah, MM', 'KEPALA SEKOLAH', 'img/8665538309101213index.jpg', '2019-05-09 02:21:37'),
(2, 'Yupiter Sulifan, M.PsI', 'WAKA HUMAS', 'images/pak-juve-cilik.jpg', '2019-04-29 06:04:37'),
(3, 'Nanik Mudjiastutik, M.Pd', 'WAKA KESISWAAN', 'img/7924531306328236IMG_0422.JPG', '2019-04-29 06:16:16'),
(4, 'Miftahul Huda, M.Pd', 'WAKA KURIKULUM', 'img/6154393761734373DSC_0051 copy.jpg', '2019-04-29 06:24:19'),
(5, 'Drs. Kristiyanto', 'WAKA SARANA DAN PRASARANA', 'img/3468115445721896p kristantyo.jpg', '2019-04-29 06:06:59'),
(6, 'Parmo, S.Pd', 'TATA USAHA', 'img/1867855411052985DSC00040.JPG', '2019-04-29 06:08:21'),
(7, 'devid', 'GURU', 'img/440407668119540527453786803_0b8da11308_o.jpg', '2019-05-27 07:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id` int(11) NOT NULL,
  `kategori` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id`, `kategori`) VALUES
(2, 'UMUM'),
(3, 'Sekolah'),
(4, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id`, `kategori`) VALUES
(3, 'Prestasi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_informasi`
--

CREATE TABLE `kategori_informasi` (
  `id` int(11) NOT NULL,
  `kategori` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_informasi`
--

INSERT INTO `kategori_informasi` (`id`, `kategori`) VALUES
(6, 'UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  `sambutan` blob NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id`, `nama`, `img`, `sambutan`, `tgl`) VALUES
(1, 'DIAN KARTIKOWATI', './images/kepsek.jpg', '', '2019-04-04 12:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `profile_singkat` text NOT NULL,
  `profile_panjang` text NOT NULL,
  `bg` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile_singkat`, `profile_panjang`, `bg`, `tgl`) VALUES
(1, '<p style=\"text-align:justify\">VISI &rdquo;Bertaqwa, Berakhlak Mulia, Berprestasi, Berwawasan Lingkungan dan Global yang berpijak pada Budaya Bangsa&rdquo;</p>\r\n', '<p style=\"text-align:justify\">SMA Negeri 1 Taman didirikan pada tanggal 15 September 1987 dengan sertifikat nomor 593.33/220/SK/320/1987. SMA Negeri 1 Taman eksis ditengah-tengah masyarakat sejak tahun 1984. Tepatnya hari Selasa tanggal 20 November 1984 yang merupakan hari jadi, berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia nomor 0558/01/1984 dengan nama Sekolah Menengah Atas (SMA) Negeri 1 Taman. Kegiatan belajar mengajar dibuka mulai tahun pelajaran 1984-1985 dengan menempati gedung SMP Negeri 1 Taman Jalan Satria 1 Ketegan Taman, rekrutmen siswa dilakukan dengan cara tes akademis dengan panitia penerimaan siswa baru yang dibentuk oleh kantor pendidikan dan kebudayaan kecamatan Taman. Daya tampungnya 3 kelas, sebagai filial SMA Negeri 1 Krian, maka Kepala Sekolah dijabat oleh Bapak Drs. Achmad Soemardjo Kepala SMA Negeri 1 Krian. Sejak Bapak Sunardi Gondo S, BA guru SMA Negeri 1 Krian ditunjuk sebagai pelaksana harian Kepala Sekolah dari Tahun 1984 sampai Tahun 1985. Beberapa bulan sebelum Kepala Sekolah datang, Petugas Lapangan Harian (PLH) dipegang oleh Bapak Soepardjo, BA guru SMA Negeri 1 Taman sampai akhir tahun 1985</p>\r\n', 'img/67802134119140161600_177.jpg', '2019-05-27 06:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `bg` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`id`, `text`, `bg`, `tgl`) VALUES
(1, 'Bismillahirohmannirrohim\r\n\r\nAssalamualaikum Warahmatullah Wabarakatuh\r\n\r\nAlhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan alamat http://www.sman1tamansda.sch.id dapat kami perbaharui. Kami mengucapkan selamat datang di Website kami SMA Negeri 1 Taman yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.', 'img/30812251487644428665538309101213index.jpg', '2019-05-11 04:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `bg` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `text`, `bg`, `tgl`) VALUES
(1, '<p style=\"text-align:justify\">SMA Negeri 1 Taman berdiri pada bulan Juli 1984 sesuai dengan S.K. Mendikbud RI No.: 0558/0/1984 dengan nama SMA Negeri 1 Taman (Smanita) pada waktu itu menempati gedung SMP Negeri 1 Taman di Jalan Satria 1 Ketegan, Taman sampai dengan tanggal 19 Nopember 1986 dan baru pada tanggal 20 Nopember 1986 menempati gedung baru di Jalan Sawunggaling 2 Jemundo Taman sampai sekarang,dan kemudian dengan S.K. Mendikbud RI No.: 035/0/1997 SMA Negeri 1 Taman berubah menjadi SMU Negeri 1 Taman. Sejalan dengan perkembangan kurikulum perubahan nama itu tidaklah bertahan cukup lama, karena pada tahun 2001 menyongsong lahirnya kurikulum 2004 nama SMU Negeri 1 Taman kembali menjadi SMA Negeri 1 Taman sampai sekarang.97 Gedung SMA Negeri 1 Taman berlokasi di Jalan Sawunggaling 2 desa Jemundo, Taman, dengan luas areal 8000 m2 memiliki ruang kelas berjumlah 27 kelas/rombongan belajar, sebuah ruang kepala sekolah, sebuah ruang wakil kepala sekolah, sebuah ruang Bimbingan Konseling, dan 5 buah ruang laboratorium yaitu: Laboratorium Fisika, Laboratorium Kimia, Laboratorium Biologi, laboratorium Teknologi Informasi, laboratorium Bahasa, sebuah ruang Perpustakaan, sebuah ruang Tata Usaha, sebuah tempat ibadah yaitu masjid Baitul Ilmi SMA Negeri 1 Taman, 50 kran air untuk wudlu dan cuci, 1 kamar mandi kepala sekolah, 2 kamar mandi guru/TU, 12 (dua belas) kamar mandi siswa dan beberapa fasilitas penunjang lainnya. SMA Negeri 1Taman pada saat penulis mengadakan penelitian mempunyai 57 tenaga pengajar dengan status PNS, 3 pengajar GTT, 5 pegawai tetap, 1 pegawai tidak tetap dan 3 pesuruh.</p>\r\n', 'img/85629043387881044.jpg', '2019-05-13 02:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `npsn` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `kecamatan` varchar(256) NOT NULL,
  `kabupaten` varchar(256) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kodepos` varchar(12) NOT NULL,
  `telp` varchar(36) NOT NULL,
  `email` varchar(128) NOT NULL,
  `fb_name` varchar(256) NOT NULL,
  `fb_path` varchar(256) NOT NULL,
  `instagram_name` varchar(256) NOT NULL,
  `instagram_path` varchar(256) NOT NULL,
  `logo` varchar(512) NOT NULL,
  `footer` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`npsn`, `nama`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `kodepos`, `telp`, `email`, `fb_name`, `fb_path`, `instagram_name`, `instagram_path`, `logo`, `footer`, `tgl`) VALUES
(20501705, 'SMA Negeri 1 TAMAN SIDOARJO', 'Jl. Sawunggaling  2 Jemundo ', 'Taman', 'Sidoarjo', 'Jawa Timur', '61257', '031-7882446 - 7879861', 'sman1taman.sda@gmail.com', 'SMA Negeri 1 TAMAN SIDOARJO', 'https://www.facebook.com/SMA-Negeri-1-Taman-211107652281790/', 'SMAN 1 TAMAN SIDOARJO', '-', 'img/7597452982103035SMANITA WARNA.jpg', 'sman 1 taman sidoarjo', '2019-04-29 05:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  `komentar` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `img`, `komentar`, `tgl`) VALUES
(1, 'Yupiter SUlifan, M.PsI', 'img/5783148pak-juve-cilik.jpg', 'baik', '2019-04-29 06:13:36'),
(2, 'Darmilah', 'img/3990860b darmilah.jpg', 'mantap', '2019-04-29 06:13:36'),
(3, 'Dinda', 'img/8098144sma-girl.jpg', 'bagus', '2019-04-29 06:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `bg` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id`, `text`, `bg`, `tgl`) VALUES
(1, 'Salah satu tujuan dari SMA Negeri I Taman adalah untuk mencetak \r\nkader-kader bangsa yang memiliki pengetahuan umum, ketrampilan dan \r\nkecakapan hidup yang cukup sebagai bekal mengabdi kepada Allah SWT ', 'img/11372376533893781.foto utama atas.jpg', '2019-05-11 04:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `bg` varchar(256) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `text`, `bg`, `tgl`) VALUES
(1, '<p style=\"text-align:justify\">Salah satu tujuan dari SMA Negeri I Taman adalah untuk mencetak kader-kader bangsa yang memiliki pengetahuan umum, ketrampilan dan kecakapan hidup yang cukup sebagai bekal mengabdi kepada Allah SWT sehingga dalam upaya pengembangan SMA Negeri 1 Taman senantiasa membawa Visi dan Misi sekolah yaitu: c. Visi Sekolah : SMA Negeri I Taman unggul dalam prestasi beretos kerja tinggi dan beraklaq mulia berpijak pada budaya bangsa. d. Misi Sekolah : 1) Meningkatkan iaman dan taqwa kepada Tuhan Yang Maha Esa. 2) Menumbuhakan sikap disiplin dan tertib beretos kerja tinggi pada seluruh warga sekolah. 3) Meningkatkan kualitas pelayanan pembelajaran yang terprogram guna meningkatkan prsetasi kerja dan prestasi belajar siswa. 4) Mengupayakan secara optimal agar SMA Negeri 1 Taman menjadi sekolah yang unggul dalam perolehan hasil belajar.</p>\r\n', 'img/905129513306816112.jpg', '2019-05-13 02:14:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita_satu`
--
ALTER TABLE `berita_satu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi2`
--
ALTER TABLE `informasi2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jajaran`
--
ALTER TABLE `jajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_informasi`
--
ALTER TABLE `kategori_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita_satu`
--
ALTER TABLE `berita_satu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `informasi2`
--
ALTER TABLE `informasi2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jajaran`
--
ALTER TABLE `jajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_informasi`
--
ALTER TABLE `kategori_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
