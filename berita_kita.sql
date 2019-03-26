-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2019 at 03:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_kita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `user_admin` varchar(15) NOT NULL,
  `pass_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `user_admin`, `pass_admin`) VALUES
(1, 'Satrio', 'admin', '$2y$10$wYLFzgPdobUQ.a8Zf6KoLe.p1');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat_sekarang` varchar(50) NOT NULL,
  `nomer_telepon` int(50) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama_lengkap`, `email`, `alamat_sekarang`, `nomer_telepon`, `alamat_perusahaan`, `jenjang`) VALUES
(3, 'Satrio Jati Wicaksono', 'satriotol69@gmail.com', 'Jl. Pandean Lamper 69 B', 2147483647, '-', '2017/S1'),
(4, 'Satrio Baru', 'sakdaodkaok', 'aoskdoakodak', 0, '', ''),
(5, 'Herman', 'asdas', 'asdasda', 0, '', ''),
(6, 'asdasd', 'asd', 'asd', 0, 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `kategori`, `gambar`, `tanggal_berita`) VALUES
(37, 'PRESS RELEASE MTMTK 2018', '<p>Himpunan Mahasiswa Profesi Teknik Kimia (HMPTK) Universitas Negeri Semarang pada Senin (17/12) telah melaksanakan kegiatan Kunjungan Kerja dengan Himpunan Mahasiswa Program Studi Teknik Kimia (HMPSTK) Universitas Katolik Parahyangan di Ruang Graha Cendekia Gedung E2 Fakultas Teknik Universitas Negeri Semarang. Kegiatan Kunjungan kerja bertujuan untuk sharing program kerja, sharing antar himpunan agar kedepannya menjadi lebih baik, serta menjalin silaturahim antar himpunan.<br />Kegiatan kunjungan ini dimulai dengan sambutan dari ketua HMPTK lalu dilanjutkan dengan ketua HMPSTK. Kemudian acara selanjutnya adalah pemaparan program kerja masing-masing himpunan selama 1 periode beserta kepengurusannya. Masuk kedalam acara inti dari kunjungan ini adalah Focus Group Discussion (FGD) atau diskusi melingkar masing-masing bidang antara HMPTK dengan HMPSTK untuk sharing program kerja yang berkaitan dengan kendala-kendalanya serta saran agar kedepannya lebih lancar dan tidak ada kendala. Acara dimeriahkan dengan hiburan dari kolaborasi grup musik HMPTK dan HMPSTK kemudian ditutup dengan pemberian kenang-kenangan dan foto bersama di sekitar Tugu Sutera Universitas Negeri Semarang.<br />Kegiatan Kunjungan Kerja berjalan dengan lancer. Diharapkan kunjungan ini dapat mengikat tali silaturahmi dan saling bertukar ilmu untuk menambah wawasan bagi kedua pihak.</p>', '13', '5c7bcd1e1e0ee.jpeg', '2019-03-03'),
(38, 'PRESS RELEASE Kunjungan Kerja HMPSTK Unpar - HMPTK UNNES', 'Himpunan Mahasiswa Profesi Teknik Kimia (HMPTK) Universitas Negeri Semarang pada Senin (17/12) telah melaksanakan kegiatan Kunjungan Kerja dengan Himpunan Mahasiswa Program Studi Teknik Kimia (HMPSTK) Universitas Katolik Parahyangan di Ruang Graha Cendekia Gedung E2 Fakultas Teknik Universitas Negeri Semarang. Kegiatan Kunjungan kerja bertujuan untuk sharing program kerja, sharing antar himpunan agar kedepannya menjadi lebih baik, serta menjalin silaturahim antar himpunan.<br>\r\nKegiatan kunjungan ini dimulai dengan sambutan dari ketua HMPTK lalu dilanjutkan dengan ketua HMPSTK. Kemudian acara selanjutnya adalah pemaparan program kerja masing-masing himpunan selama 1 periode beserta kepengurusannya. Masuk kedalam acara inti dari kunjungan ini adalah Focus Group Discussion (FGD) atau diskusi melingkar masing-masing bidang antara HMPTK dengan HMPSTK untuk sharing program kerja yang berkaitan dengan kendala-kendalanya serta saran agar kedepannya lebih lancar dan tidak ada kendala. Acara dimeriahkan dengan hiburan dari kolaborasi grup musik HMPTK dan HMPSTK kemudian ditutup dengan pemberian kenang-kenangan dan foto bersama di sekitar Tugu Sutera Universitas Negeri Semarang.<br>\r\nKegiatan Kunjungan Kerja berjalan dengan lancer. Diharapkan kunjungan ini dapat mengikat tali silaturahmi dan saling bertukar ilmu untuk menambah wawasan bagi kedua pihak.', '12', '5c7bcd45e569e.jpg', '2019-03-03'),
(41, 'PRESS RELEASE Chemical Engineering Paper Competiion (CEPTION) 2018', 'Himpunan Mahasiswa Profesi Teknik Kimia (HMPTK) Universitas Negeri Semarang pada tanggal 9-11 November 2018 telah melaksanakan kegiatan lomba karya tulis ilmiah Ception (Chemical Engineering Paper Competition) di gedung Dekanat Fakultas Teknik Universitas Negeri Semarang. Lomba LKTI tingkat Nasional ini diselenggarakan oleh HMPTK FT UNNES yang dilaksanakan untuk ketiga kalinya. Acara ini bertujuan untuk mengembangkan dan menyalurkan kreasi teknologi yang inovatif mahasiswa sebagai akselerator dalam mewujudkan Indonesia berbasis SDGs 2030 yang meliputi bidang energi, pangan, lingkungan, kesehatan, kemaritiman, pertanian dan industri. Selain itu juga untuk memperkenalkan Jurusan Teknik Kimia FT UNNES kepada mahasiswa diseluruh Indonesia. Acara ini dibuka oleh wakil Dekan III Bidang Kemahasiswaan FT UNNES Dr. Wirawan Sumbodo, M.T. dalam sambutannya beliau berharap agar para peserta dapat memberikan solusi dan bagi penguasaan IPTEK untuk pengelolaan Sumber Daya Alam Indonesia yang berlimpah untuk kesejahteraan bangsa Indonesia. Acara ini juga dihadiri oleh Pembina HMPTK Redenrara Dewi Artanti Putri Ception 2018 diikuti oleh 29 tim peserta dari PTN/PTS se Indonesia, 9 diantaranya masuk sebagai finalis. Pelaksanaan Ception 2018 ini dilaksanakan selama 3 hari, hari pertama yaitu Technical Meeting untuk seluruh finalis, hari kedua presentasi karya ilmiah dari 10 finalis dan dilanjutkan hari ketiga yaitu acara field trip Kota Semarang dan Lensa Sosial di Tabiyatul Yatim, Semarang yang telah menjadi ciri khas dari Ception itu sendiri. Paparan 9 finalis terbaik dilaksanakan pada tanggal 10 November bertempat di Dekanat lantai 3 Fakultas Teknik Unnes. Dalam babak final terdapat sesi tanya jawab yang diberikan juri untuk para finalis. Tim dari Universitas Ahmad Dahlan berhasil menyabet gelar juara 1 pada Ception tahun ini dan mendapatkan piala, piagam penghargaan serta dana pembinaan sebesar 3,5 juta rupiah. Sedangkan juara 2 dan 3 diraih oleh Institut Teknologi Sebelas November dan Institut Pertanian Bogor, dengan mendapatkan piala, piagam serta dana pembinaan masing-masing 2 juta dan 1juta rupiah. Selain juara 1,2,3 terdapat Penghargaan Best Presentation yang diraih oleh Universitas Tadulako dan Best Poster diraih oleh Universitas Dian Nuswantoro. Suka cita sekaligus bangga terlihat dari raut wajah Finalis Ception yang telah berhasil melewati tahap demi tahap perlombaan. Sekali lagi selamat bagi para pemenang Ception 2018, kami tunggu kehadirannya kembali di ajang perlombaan Ception tahun berikutnya.', '9', '5c7ccced6d3c9.jpg', '2019-03-04'),
(44, 'Ronaldo', '<p>Cristiano Ronaldo dos Santos Aveiro, OIH (Portugis: [kÉ¾iÊƒËˆtjÉnu ÊoËˆnaÉ«du] lahir di Funchal, Madeira, Portugal, 5 Februari 1985; umur 34 tahun) atau lebih dikenal Cristiano Ronaldo merupakan seorang pemain sepak bola Portugal. Ia dapat berposisi sebagai sayap kiri atau kanan serta penyerang tengah. Saat ini ia bermain untuk tim Italia, Juventus dan untuk tim nasional Portugal. Sebelum bermain untuk Real Madrid, ia pernah bermain di Sporting Lisboa dan Manchester United. Pemain yang kerap bernomor punggung 7 di lapangan hijau ini juga akrab dengan sebutan CR7, gabungan dari inisial nama dan nomor punggungnya.<br /><br />Dia memakai nomor punggung 7 di United, yang sebelumnya dikenakan oleh Johnny Berry, George Best, Steve Coppell, Bryan Robson, Eric Cantona dan David Beckham. Setelah menghabiskan tahun pertamanya di Madrid mengenakan nomor punggung 9, ia mulai mengenakan nomor 7 lagi menyusul kepergian pemain legendaris Raul Gonzalez.<br /><br />Segudang prestasi telah berhasil dia raih. Cristiano Ronaldo berhasil meraih gelar FIFA Ballon D&rsquo;Or di bulan Januari 2015 lalu yang diadakan di markas FIFA Zurich, Swiss. Gelar FIFA Ballon D&rsquo;Or ini merupakan penghargaan ketiga bagi Ronaldo, setelah sebelumnya pada tahun 2013 lalu dan 2008 ketika masih berseragam Manchester United.[2]&nbsp;</p>', '14', '5c8f00b6e59a0.jpeg', '2019-03-18'),
(45, 'Unnes', 'Konvensi Nasional Pendidikan Indonesia (Konaspi) merupakan wahana akademik kaum pendidik Indonesia untuk memberikan sumbangan pemikiran bagi pembangunan manusia seutuhnya melalui pendidikan. Konaspi IX yang dilaksanakan di Universitas Negeri Padang pada 13-16 Maret  2019 berhasil merumuskan rekomendasi yang disebut sebagai  Deklarasi Padang. Deklarasi Padang dibacakan di Auditorium Universitas Negeri Padang, Jumat malam, 15/3. Rektor UNNES Prof [â€¦]<br>\r\n', '8', '5c8f4337c1ff7.jpeg', '2019-03-18'),
(46, 'CESA FUTSAL CUP 2015', 'SEMARANG - Himpunan Mahasiswa Profesi Teknik Kimia (HMPTK) UNNES mempersembahkan Turnamen CESA FUTSAL CUP, sebagai salah satu event tahunan program kerja HMPTK UNNES. Chemical Engineering Student Assosiation (CESA) FUTSAL CUP 2015 Season II, mulai membuka pendaftaran pada tanggal 1 September dan dipastikan kick off pada 28 November mendatang.<br>\r\nTurnamen CESA FUTSAL CUP 2015 akan diadakan pada 28-29 November di Tunjang Futsal Studium, Jalan Soekarno Hatta No. 188A Semarang (Depan Kampus Biru AMNI). Total hadiah sejumlah 7 juta rupiah yakni berupa uang pembinaan dan trophy, top scorer dan best player. Turnamen ini akan memperebutkan trophy Kementerian Pemuda dan Olahraga Republik Indonesia. Turnamen ini dibuka untuk umum (dibuktikan dengan KTP). Technical Meeting akan diadakan pada tanggal 21 November 2015 di Tunjang Futsal Studium.<br>\r\nSistem pertandingan sendiri menggunakan sistem gugur dengan waktu pertandingan 2 x 10 menit hingga perempat final, sementara pada semifinal dan final menggunakan waktu pertndingan 2 x 15 menit. Ketentuan lainnya akan dijelaskan melalui peraturan pertandingan.<br>\r\nSyarat untuk mengikuti turnamen ini yaitu :<br>\r\na. Pemain adalah Masyarakat umum yang dibuktikan dengan KTP yang masih berlaku.<br>\r\nb. 1 tim terdiri dari 12 orang (10 pemain, 1 official, 1 manager).<br>\r\nc. 1 orang pemain hanya boleh mewakili 1 tim.<br>\r\nUntuk informasi lebih lanjut dan bagi tim yang ingin mendaftar dapat menghubungi Febry pada nomor 085695505317 (588BFF3B) atau Dwi Waluyo pada nomor 085641650331 (74594A7C). Pendaftaran dikenakan biaya sebesar Rp. 300.000/tim.', '12', '5c973d624dff6.jpg', '2019-03-24'),
(49, 'PRESS RELEASE Mahasiswa Teknik Kimia UNNES Laksanakan International Research Collaboration', '<p>Semarang (02/01/2019). Selamat dan sukses kepada Mahasiswa Teknik Kimia, Universitas Negeri Semarang yang telah melaksanakan International Research Collaboration. Wakil Dekan Bidang Kemahasiswaan Fakultas Teknik Universitas Negeri Semarang melepas dua Mahasiswa Teknik Kimia yang akan melaksanakan penelitian dan pengambilan data sebagai bentuk implementasi dari International Research Collaboration di Universiti Teknologi Malaysia, Johor Bahru. Yang merupakan bimbingan dari Dr. Ratna Dewi Kusumaningtyas, S. T., M. T.. Mahasiswa Teknik Kimia yang mengikuti kegiatan tersebut adalah:</p><p>&nbsp;</p><p>Dwi Nuryana (Teknik Kimia, 2015)&nbsp;</p><p>&nbsp;</p><p>Muhammad Fahrul Rahman Alim (Teknik Kimia, 2015)</p><p>&nbsp;</p><p>Kegiatan tersebut dilaksanakan pada tanggal 5 januari - 1 Februari 2019. Awalnya penelitian tersebut dilaksanakan dilaboratorium Teknik Kimia UNNES yang selanjutnya akan dilakukan penyempurnaan di Universiti Teknologi Malaysia. kelanjutan dari penelitian tersebut yaitu pengajuan proposal dengan judul &ldquo;Microwave Assisted Pyrolysis (MAP) Limbah Biomassa untuk Pembuatan Green Fuel Bio-Hidrogen dan Adsorben Peyimpan Bahan Bakar Gas&rdquo;.&nbsp;</p><p>&nbsp;</p><p>Keberhasilan kegiatan ini diraih berkat bantuan keluarga, kerabat, teman, dan seluruh dosen yang selalu mendukung dan mendoakan yang terbaik untuk kelancaran dan kesuksesan anak didiknya.&nbsp; Semoga keberhasilan&nbsp; Dwi Nuryana dan Muhammad Fahrul Rahman Alim dapat menjadi inspirasi dan motivasi bagi mahasiswa lain untuk terus berkarya dan berprestasi.&nbsp;</p><p>Salam Yes We Can !!!</p>', '8', '5c97abdfb5eb4.jpg', '2019-03-24'),
(51, 'PRESS RELEASE MTMTK 2018', '<p>Himpunan Mahasiswa Profesi Teknik Kimia telah melaksanakan Musyawarah Tinggi Mahasiswa Teknik Kimia (MTMTK) 2018 pada tanggal 22 Desember 2018 yang bertempat di Graha Cendekia E2 Fakultas Teknik Universitas Negeri Semarang. Musyawarah Tinggi Mahasiswa Teknik Kimia merupakan forum musyawarah tertinggi mahasiswa teknik kimia. Secara garis besar, MTMTK bertujuan untuk membahas dan mengubah konstitusi yang dirasa perlu untuk dirubah dan mengevaluasi kinerja mepengurusan HMPTK 2018 sekaligus pendemisioneran kepengurusan HMPTK 2018.<br />Acara MTMTK 2018 ini dihadiri oleh Koordinator DPH HMPTK 2018, pembina HMPTK 2018. Dalam sambutannya, Ibu Dewi Artanti Putri S.T., M.T menyampaikan pesan pesannya untuk pengurus baru agar lebih ditingkatkan lagi kinerjanya guna menuju tahun akreditasi Teknik Kimia di tahun 2019.<br /><br />MTMTK 2018 pada kali ini dipimpin oleh Dewan presidium tetap, yang terdiri dari 3 presidium. Presidium I diisi oleh Muhammad Iqbal, Presidium II oleh Miftahuddin Azhari, Presidium III Oleh Nauroh Nadzifah . Forum MTMTK kali ini berjalan sangat dinamis, banyak dari peserta forum yang mengusulkan gagasan-gagasan yang mereka tawarkan.<br />Rangkaian acara MTMTK diawali dengan Pembahasan AD ART dan GBHK Organisasi HMPTK. Dimana sidang pembahasan terbagi menjadi 3 komisi, komisi 1 membahas Anggaran dasar HMPTK, komisi 2 membahas Anggaran Rumah Tangga HMPTK, komisi 3 membahas Garis Besar Haluan Kegiatan HMPTK.<br /><br />Rangkaian acara selanjutnya yaitu penyampaian laporan Pertanggungjawaban HMPTK 2018 yang disampaikan oleh masing masing ketua Departemen HMPTK 2018.<br />Rangkaian acara terakhir MTMTK diisi dengan pendemisioneran HMPTK 2018, pemilihan DPH HMPTK 2019 dan penyerahan Jabatan Ketua HMPTK 2019 secara simbolis oleh Ketua HMPTK 2018 Naufal Mudrik Mezakki ke Ketua HMPTK 2019 terpilih Abdurrahman kholish Faizi.</p>', '', '5c99c77eb629c.jpeg', '2019-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `chemengfair`
--

CREATE TABLE `chemengfair` (
  `id_chemeng` int(11) NOT NULL,
  `nama_chemeng` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemengfair`
--

INSERT INTO `chemengfair` (`id_chemeng`, `nama_chemeng`) VALUES
(1, 'SEMINAR NASIONAL'),
(2, 'ISO TRAINING'),
(3, 'CESA'),
(4, 'SCC'),
(5, 'CEPTION'),
(6, 'CHEMENG AWARDS');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_dept` int(11) NOT NULL,
  `nama_dept` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_dept`, `nama_dept`) VALUES
(1, 'GA'),
(2, 'HRD'),
(3, 'PRC'),
(4, 'SED'),
(5, 'RNT'),
(6, 'STD'),
(7, 'SOCDEV'),
(8, 'TECHNO');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(8, 'Beasiswa'),
(9, 'Seminar Nasional'),
(10, 'PRESS RELEASE'),
(11, 'Event'),
(12, 'CESA'),
(13, 'ISO'),
(14, 'SCC');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_pengirim`
--

CREATE TABLE `pesan_pengirim` (
  `id_pesan` int(11) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `email_pengirim` varchar(50) NOT NULL,
  `isi_pesan` longtext NOT NULL,
  `tanggal_pengirim` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_pengirim`
--

INSERT INTO `pesan_pengirim` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `isi_pesan`, `tanggal_pengirim`) VALUES
(29, 'asd', 'a', 'aa', ''),
(30, '21', '21', '21', '2019/03/21.11:33:12pm'),
(31, '23', '23', '23', '2019/03/21.11:33:47pm'),
(32, '11', '11', 'aaaa', '2019/03/24.08:47:03am'),
(33, 'Aziz', 'aziz@gmail.com', 'Webnya sangat bagus', '2019/03/25.12:10:54pm'),
(34, 'SAtrio', 'satriotol69@gmail.com', 'webnya bagus bangsat\r\n', '2019/03/26.01:07:37pm');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(255) NOT NULL,
  `main_judul` varchar(255) NOT NULL,
  `sub_judul` varchar(255) NOT NULL,
  `slide_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `main_judul`, `sub_judul`, `slide_gambar`) VALUES
(1, 'Selamat Datang', 'Himpunan Mahasiswa Profesi Teknik Kimia', '5c983b0a41eaf.jpg'),
(3, '', 'PRESS RELEASE MTMTK 2018', '5c76acf338dd2.jpg'),
(6, '1', '', '5c85fc638aac9.jpg'),
(7, '', '', '5c85fc7754e68.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subberita`
--

CREATE TABLE `subberita` (
  `id_subberita` int(11) NOT NULL,
  `judul_sub` varchar(100) NOT NULL,
  `subjudul_sub` varchar(100) NOT NULL,
  `link_sub` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subberita`
--

INSERT INTO `subberita` (`id_subberita`, `judul_sub`, `subjudul_sub`, `link_sub`) VALUES
(15, 'BUKU PANDUAN MAHASISWA TEKNIK KIMIA 2017', 'BUKU PANDUAN MAHASISWA TEKNIK KIMIA 2017', 'https://drive.google.com/file/d/0B-pW1rU-kU36MHBpMlI3UWszVEE/view'),
(20, 'KABINET PRESTASI HMPTK UNNES 2018', 'Logo Kabinet Inovasi HMPTK UNNES 2018 Filosofi Logo Kabinet Prestasi HMPTK UNNES 2018 1      1.     ', 'http://www.himprotekkimunnes.com/2018/03/kabinet-prestasi-hmptk-unnes-2018.html'),
(21, 'BUKU PANDUAN MAHASISWA TEKNIK KIMIA 2017', 'BUKU PANDUAN MAHASISWA TEKNIK KIMIA 2017', 'https://drive.google.com/file/d/0B-pW1rU-kU36MHBpMlI3UWszVEE/view');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `nama_video` varchar(50) NOT NULL,
  `link_video` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `link_video`) VALUES
(13, '1643', 'https://www.youtube.com/embed/IAAgbPqZ-ME'),
(15, 'unnes', 'https://www.youtube.com/embed/9FzIEJNcQaA'),
(21, 'https://www.youtube.com/embed/tgbNymZ7vqY', 'https://www.youtube.com/embed/tgbNymZ7vqY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`kategori`);

--
-- Indexes for table `chemengfair`
--
ALTER TABLE `chemengfair`
  ADD PRIMARY KEY (`id_chemeng`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesan_pengirim`
--
ALTER TABLE `pesan_pengirim`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `subberita`
--
ALTER TABLE `subberita`
  ADD PRIMARY KEY (`id_subberita`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `chemengfair`
--
ALTER TABLE `chemengfair`
  MODIFY `id_chemeng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pesan_pengirim`
--
ALTER TABLE `pesan_pengirim`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subberita`
--
ALTER TABLE `subberita`
  MODIFY `id_subberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
