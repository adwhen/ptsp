-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 01:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptsp_kejati`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` tinytext NOT NULL,
  `isi_berita` text DEFAULT NULL,
  `tgl_publish` date NOT NULL,
  `tgl_update` date NOT NULL,
  `kat_berita` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_publish`, `tgl_update`, `kat_berita`) VALUES
(1, 'pembalap', 'asdasdasdasdasdasdsdadasdasdasdasdsad', '2020-02-04', '2020-02-04', 'umum'),
(4, 'asd5', '<p>dasdas</p>\r\n', '2020-02-20', '2020-02-23', 'umum'),
(33, 'asd5', '<p>ktp aji</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/ptsp_kejati/asset/gambar/foto/foto_berita1582412174.png\" style=\"height:11px; width:10px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/ptsp_kejati/asset/gambar/foto/foto_berita1582218797.jpg\" style=\"height:31px; width:50px\" /></p>\r\n', '2020-02-20', '2020-02-22', 'umum'),
(34, 'asdsa', '<p><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Kepja-2011-150.pdf\">lampiran1</a></p>\r\n', '2020-02-22', '2020-02-22', 'umum'),
(35, 'ipsum', '<p><img alt=\"\" src=\"http://localhost/ptsp_kejati/asset/gambar/foto/foto_berita1582408002.png\" style=\"height:30px; width:28px\" /></p>\r\n\r\n<p>asdsadasdasdasdasdasdasdasdsadsad&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-02-22', '2020-02-22', 'zi'),
(79, 'asd1', '<p>dasdas</p>\r\n', '2020-02-22', '2020-02-22', 'zi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL,
  `nama_file` tinytext NOT NULL,
  `url_file` varchar(100) NOT NULL,
  `kat_file` varchar(25) NOT NULL,
  `ket_file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `nama_file`, `url_file`, `kat_file`, `ket_file`) VALUES
(14, 'ipsum_1582408002', 'http://localhost/ptsp_kejati/asset/gambar/foto/foto_berita1582408002.png', 'zi', '35'),
(17, 'asd5_1582412174', 'http://localhost/ptsp_kejati/asset/gambar/foto/foto_berita1582412174.png', 'umum', '33'),
(19, 'asd5_1582413925', 'http://localhost/ptsp_kejati/asset/gambar/foto/foto_berita1582413925.png', 'asd5', '4'),
(20, 'asd5_1582414150', 'http://localhost/ptsp_kejati/asset/gambar/foto/foto_berita1582414150.png', 'asd5', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kejari`
--

CREATE TABLE `tb_kejari` (
  `id_kejari` int(11) NOT NULL,
  `nama_kejari` tinytext NOT NULL,
  `alamat_kejari` text NOT NULL,
  `ketua_kejari` tinytext NOT NULL,
  `url_kejari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kejari`
--

INSERT INTO `tb_kejari` (`id_kejari`, `nama_kejari`, `alamat_kejari`, `ketua_kejari`, `url_kejari`) VALUES
(1, 'kejari bengkulu 2', 'bengkulu2', 'Dr. aji dwi herza novariadi S.Kom, M. P.', 'https://www.kejaksaan.go.id/'),
(208, '123', '12', '123', '12'),
(209, '145', '145', '145', '145');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peraturan`
--

CREATE TABLE `tb_peraturan` (
  `id_peraturan` int(11) NOT NULL,
  `nama_peraturan` tinytext NOT NULL,
  `judul_peraturan` tinytext NOT NULL,
  `kat_peraturan` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peraturan`
--

INSERT INTO `tb_peraturan` (`id_peraturan`, `nama_peraturan`, `judul_peraturan`, `kat_peraturan`) VALUES
(1, 'Nomor 31 Tahun 1999 jo UU Nomor 20 Tahun 2001', '                      ', 'Undang-undang'),
(2, 'Nomor 54 Tahun 2003', '                      ', 'Peraturan Pemerintah'),
(4, 'asdsadasd', '                      ', 'Peraturan Pemerintah'),
(5, 'asd', '                      ', 'Peraturan Pemerintah'),
(6, 'asd', '                      ', 'Peraturan Pemerintah'),
(7, 'Nomor 31 Tahun 1999 jo UU Nomor 20 Tahun 2001', 'asd\r\n                      ', 'Peraturan Pemerintah'),
(8, 'Nomor 31 Tahun 1999 jo UU Nomor 20 Tahun 2001', 'asd\r\n                      ', 'Undang-undang'),
(9, 'asd', 'asd\r\n                      ', 'Peraturan Pemerintah'),
(10, 'asd', '                      ', 'Undang-undang'),
(11, 'sad', '                      ', 'Keputusan Presiden'),
(12, 'sad', '<p>asd</p>\r\n', 'Keputusan Presiden'),
(13, 'sad', '<p>asd</p>\r\n', 'Keputusan Presiden'),
(14, 'sad', '<p>asd</p>\r\n', 'Keputusan Presiden'),
(15, 'asdas', '<p><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp; &nbsp;asdsadasd<a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a></p>\r\n', 'Undang-undang'),
(16, 'asdas', '<p><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp; &nbsp;asdsadasd<a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp;nomor1</p>\r\n', 'Undang-undang'),
(17, 'asdas', '<p><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp; &nbsp;asdsadasd<a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp;nomor123</p>\r\n', 'Undang-undang'),
(18, 'asdas', '<p><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp; &nbsp;asdsadasd<a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp;nomor123</p>\r\n', 'Undang-undang'),
(19, 'asdas', '<p><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp; &nbsp;asdsadasd<a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\">asd</a>&nbsp;nomor1234</p>\r\n', 'Undang-undang'),
(20, 'asd', '<p>asd</p>\r\n', 'Peraturan Pemerintah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perintah`
--

CREATE TABLE `tb_perintah` (
  `id_perintah` int(11) NOT NULL,
  `nama_perintah` tinytext NOT NULL,
  `nama_jaksa` tinytext NOT NULL,
  `isi_perintah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_perintah`
--

INSERT INTO `tb_perintah` (`id_perintah`, `nama_perintah`, `nama_jaksa`, `isi_perintah`) VALUES
(1, 'Perintah Harian Jaksa Agung', 'DR. H. ST. Burhanuddin', '<ol>\r\n	<li>Tingkatkan Sensitifitas Dan Intensitas Kepekaan Dalam Melaksanakan Tugas Dan Tanggung Jawab Penegakan Hukum Dengan Cerdas, Lugas Dan Berintegritas.</li>\r\n	<li>Posisikan Diri Secara Personal, Fungsional, Dan Instansional Yang Kukuh Mengenggam Serta Menjunjung Tinggi Harkat Dan Kehomatan Profesi Selaku Insan Adhyaksa Agar Pantas Dipuji Dan Dihargai.</li>\r\n	<li>Menyadari Dan Menjaga Diri Sebagai Pendamping, Akselerator, Pengawal Dan Pengaman Jalannya Pemerintahan Dan Pembangunan Yang Dapat Dipercaya Dan Diandalkan.</li>\r\n	<li>Bekerja Dan Berkarya Tanpa Pamrih Dengan Baik Sepenuh Hati, Meniadakan Perbedaan Perlakukan Dan Pelayanan Agar Memberi Manfaat, Memenuhi Harapan Kuat Dari Masyarakat.</li>\r\n	<li>Pupuk Dan Tumbuh Kembangkan Semangat Bekerja Bersama Semua Pihak Dalam Bingkai Hubungan Yang Solid Dan Sinergis, Demi Upaya Merawat Keberagaman Dan Kebhinekaan, Bagi Kebesaran Bangsa Dan Keutuhan Negara Kesatuan Republik Indonesia Yang Harmonis.</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktural`
--

CREATE TABLE `tb_struktural` (
  `id_struktural` int(11) NOT NULL,
  `nama_struktural` tinytext NOT NULL,
  `nip_pegawai` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_visimisi`
--

CREATE TABLE `tb_visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `isi_visimisi` text NOT NULL,
  `ket_visimisi` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_visimisi`
--

INSERT INTO `tb_visimisi` (`id_visimisi`, `isi_visimisi`, `ket_visimisi`) VALUES
(24, '<p>Kejaksaan sebagai lembaga penegak hukum yang bersih, efektif, efisien, transparan, akuntabel, untuk dapat memberikan pelayanan prima dalam mewujudkan supremasi hukum secara profesional, proporsional dan bermartabat yang berlandaskan keadilan, kebenaran, serta nilai &ndash; nilai kepatutan.!</p>\r\n', 'visi'),
(45, 'Mengoptimalkan pelaksanaan fungsi Kejaksaan dalam pelaksanaa tugas dan wewenang, baik dalam segi kualitas maupun kuantitas penanganan perkara seluruh tindak pidana, penanganan perkara Perdata dan Tata Usaha Negara, serta pengoptimalan kegiatan Intelijen Kejaksaan, secara profesional, proposional dan bermartabat melalui penerapan Standard Operating Procedure (SOP) yang tepat, cermat, terarah, efektif, dan efisien.', 'misi'),
(46, 'Mengoptimalkan peranan bidang Pembinaan dan Pengawasan dalam rangka mendukung pelaksanaan tugas bidang-bidang lainnya, terutama terkait dengan upaya penegakan hukum.', 'misi'),
(47, 'Mengoptimalkan tugas pelayanan publik di bidang hukum dengan penuh tanggung jawab, taat azas, efektif dan efisien, serta penghargaan terhadap hak-hak publik.', 'misi'),
(48, 'Melaksanakan pembenahan dan penataan kembali struktur organisasi Kejaksaan, pembenahan sistem informasi manajemen terutama pengimplementasian program quickwins agar dapat segera diakses oleh masyarakat, penyusunan cetak biru (blue print) pembangunan sumber daya manusia Kejaksaan jangka menengah dan jangka panjangtahun 2025, menerbitkan dan menata kembali manajemen administrasi keuangan, peningkatan sarana dan prasarana, serta peningkatan kesejahteraan pegawai melalui tunjangan kinerja atau remunerasi, agar kinerja Kejaksaan dapat berjalan lebih efektif, efisien, transparan, akuntabel dan optimal.', 'misi'),
(49, 'Membentuk aparat Kejaksaan yang handal, tangguh, profesional, bermoral dan beretika guna menunjang kelancaran pelaksanaan tugas pokok, fungsi dan wewenang, terutama dalam upaya penegakan hukum yang berkeadilan serta tugas-tugas lainnya yang terkait.', 'misi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tb_kejari`
--
ALTER TABLE `tb_kejari`
  ADD PRIMARY KEY (`id_kejari`);

--
-- Indexes for table `tb_peraturan`
--
ALTER TABLE `tb_peraturan`
  ADD PRIMARY KEY (`id_peraturan`);

--
-- Indexes for table `tb_perintah`
--
ALTER TABLE `tb_perintah`
  ADD PRIMARY KEY (`id_perintah`);

--
-- Indexes for table `tb_struktural`
--
ALTER TABLE `tb_struktural`
  ADD PRIMARY KEY (`id_struktural`);

--
-- Indexes for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_kejari`
--
ALTER TABLE `tb_kejari`
  MODIFY `id_kejari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `tb_peraturan`
--
ALTER TABLE `tb_peraturan`
  MODIFY `id_peraturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_perintah`
--
ALTER TABLE `tb_perintah`
  MODIFY `id_perintah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_struktural`
--
ALTER TABLE `tb_struktural`
  MODIFY `id_struktural` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
