-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 07:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `kat_berita` varchar(32) NOT NULL,
  `cover_berita` tinytext DEFAULT NULL,
  `video_url` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_publish`, `tgl_update`, `kat_berita`, `cover_berita`, `video_url`) VALUES
(2, 'Monitoring dan Evaluasi terhadap Program Diklat Tahun 2017', '<p>Pada Kegiatan Monitoring dan Evaluasi terhadap Program Diklat Tahun 2017 Sekretaris Badan Pendidikan dan Pelatihan Kejaksaan Republik Indonesia menyampaikan pesan kepada seluruh peserta diklat tahun 2017 bahwa apa yang sudah diberikan oleh Badan Diklat Kejaksaan Agung RI hendaknya menjadi Institusi Kejaksaan lebih meningkatkan kualitas kinerja sebagai institusi penegak hukum di Repulik ini</p>\r\n', '2020-02-23', '2020-03-10', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583126568.jpg', 'https://www.youtube.com/watch?v=wiLRScvBX7Q&feature=youtu.be'),
(5, 'Kejaksaan Negeri Kepahiang Eksekusi Uang Pengganti', '<p>Kejaksaan Negeri Kepahiang melakukan eksekusi uang pengganti perkara tindak pidana korupsi pengadaan lahan untuk gedung Tourist Information Center (TIC) Tahun Anggaran 2015 ke Kas Negara berdasarkan Putusan Kasasi Mahkamah Agung RI Nomor : 2084 K/Pid.Sus/2019 sebesar Rp. 3.522.600.000,- (tiga milyar lima ratus dua puluh dua juta enam ratus ribu rupiah)</p>\r\n', '2020-02-23', '2020-03-02', 'pidana', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583111564.jpg', ''),
(7, 'Upacara Peringantan Hari Pahlawan Ke-74 Tahun 2019', '<p>Penyelenggaran Upacara Peringantan Hari Pahlawan Ke-74 Tahun 2019 dengan tema &ldquo;Aku Pahlawan Masa Kini&rdquo; yang dilaksanakan Kejaksaan Tinggi Bengkulu di pimpin oleh Kepala Kejaksaan Tinggi Bengkulu (Amandra Syah Arwan, S.H., M.H.) pada Senin 11 November 2019 pukul 08.00 wib di lapangan kantor&nbsp;Kejaksaan Tinggi Bengkulu&nbsp;di ikuti oleh pejabat pembantu unsur pimpinan dan seluruh pegawai Kejaksaan Tinggi Bengkulu maupun Kejaksaan Negeri Bengkulu.</p>\r\n', '2019-11-12', '2020-02-28', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863148.PNG', ''),
(8, 'Monitoring dan Evaluasi BADIKLAT KEJAGUNG R.I.', '<p>Tim Badan Pendidikan dan Pelatihan Kejaksaan Agung Republik Indonesia yang dipimpin oleh Bapak Herman Donaldus Moang Lose Da Silava, S.H (Jaksa Fungsional), Bapak Abdul Aziz, S.H., M.Hum (Kabag Sunproglap dan Panil) dan Ibu Titik Purwanti, S.s (Kasubbag Evaluasi dan Pelaporan) melakukan Monitoring dan Evaluasi Terhadap Program Kegiatan Pendidikan dan Pelatihan Tahun 2018 pada Kamis 07 November 2019 di Aula Sasana Bina Karya&nbsp;Kejaksaan Tinggi Bengkulu di dampingi oleh Bapak Gatot Guno Sembodo, S.H. (Plh. Asisten Pembinaan) dan di ikuti oleh seluruh pejabat Kejaksaan Tinggi Bengkulu, Kepala Kejaksaan Negeri se-wilayah hukum Bengkulu dan Seluruh pegawai yang telah mengikuti program Diklat Tahun 2018.</p>\r\n', '2019-11-08', '2020-03-02', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583121657.jpg', ''),
(9, 'Qurban Ied Adha Kejati Bengkulu', '<p>Kejaksaan Tinggi Bengkulu beserta jajarannya melakukan pemotongan hewan qurban dalam rangka Hari Raya Idul Adha 1439 H yang dilakukan di halaman Kantor pada hari Rabu (22/08/2018) jam 08.30 wib.</p>\r\n\r\n<p>Pada Tahun ini terdapat 4 (empat) ekor sapi yang dilakukan penyembelihan yang diikuti oleh Kepala Kejaksaan Tinggi Bengkulu (Baginda Polin Lumban Gaol, SH., MH.), Para Asisten, Para Koordinator dan dari Kementrian Desa, PDT dan Transmigrasi Republik Indonesia.</p>\r\n\r\n<hr />\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134577.jpg\" style=\"height:768px; width:1024px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134566.jpg\" style=\"height:768px; width:1024px\" /></p>\r\n', '2018-08-24', '2020-03-02', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134517.jpg', ''),
(10, 'Penyerahan Hewan Qurban dari Kementrian Desa, PDT dan Transmigrasi RI ke Kejati Bengkulu', '<p>Kementrian Desa, PDT dan Transmigrasi Republik Indonesia menyerahkan hewan qurban berupa 1 (satu) ekor sapi kepada Kejaksaan Tinggi Bengkulu melalui Bapak Wakil Kepala Kejaksaan Tinggi Bengkulu (Rorogo Zega, SH., MH) yang di dampingi oleh Para Asisten di halaman Kantor Kejaksaan Tinggi Bengkulu.</p>\r\n', '2018-08-23', '2020-03-02', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134171.jpg', ''),
(11, 'Kajati Bengkulu Memantau Pendaftaran CPNS Kejaksaan Republik Indonesia', '<p>Kepala Kejaksaan Tinggi Bengkulu Amandra Syah Arwan, S.H., M.H. di dampingi oleh Asisten Pembinaan dan Kepala Bagian Tata Usaha melakukan pemantauan langsung terhadap pelaksanaan pendaftaran Calon Pegawai Negeri Sipil di Kantor Kejaksaan Tinggi Bengkulu.</p>\r\n', '2018-10-18', '2020-03-02', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134815.jpg', ''),
(12, 'HUT RI Ke-73', '<p>Kejaksaan Tinggi dan Kejaksaan Negeri Bengkulu melakukan upacara Hari Ulang Tahun Kemerdekaan Republik Indonesia ke-73 di halaman Kantor Kejaksaan Tinggi Bengkulu yang dipimpin oleh Inspektur Upacara Kepala Kejaksaan Tinggi bengkulu (Baginda Polin Lumban Gaol, SH,. MH.) dengan tema &ldquo;73 Tahun Kerja Kita Membangun Bangsa&rdquo;.</p>\r\n', '2018-08-23', '2020-03-02', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134915.jpg', ''),
(14, 'Sidang Perkara Dugaan Korupsi Dinas DPRD', '<p>Sidang perkara an.tersangka Feri Lastoni dan Samsul Asri dalam perkara dugaan korupsi anggaran bahan bakar minyak dan pemeliharaan kendaraan dinas DPRD tahun 2017. Sidang dilaksanakan pada hari kamis 27 Februari 2020 dengan pemeriksaan terhadap 11 orang saksi diantara nya 7 (tujuh) orang anggota dewan yaitu :</p>\r\n\r\n<p>1. Husni Tamrin, S.H., M.H.</p>\r\n\r\n<p>2. Ulil Umidi</p>\r\n\r\n<p>3. Okti Fitriani</p>\r\n\r\n<p>4. Romania, S.H.</p>\r\n\r\n<p>5. Ansori</p>\r\n\r\n<p>6. Teno Haikal</p>\r\n\r\n<p>7. Yudi Harsan</p>\r\n\r\n<p>8. Sekwan Kab. Seluma an. Edi Supriadi</p>\r\n\r\n<p>9. Kabag Keuangan Kab. Seluma an. Khairudin</p>\r\n\r\n<p>10. Kabag Verifikasi an. Sanjaya</p>\r\n\r\n<p>11. Kabag Urusan Dalam an. Omi Hariadi</p>\r\n', '2020-02-27', '2020-03-02', 'hukum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863113.jpg', ''),
(15, 'Gladi Pencanangan Zona Integritas di Lingkungan Kejaksaan Tinggi Bengkulu', '<p>Pelaksanaan gladi resik acara Pencanangan Zona Integritas dengan Arief wirawan, S.H., M.H. selaku komandan upacara yang dilaksanakan pada tanggal 12 Februari 2020 yang diikuti oleh seluruh pegawai pada Kejati dan Kejari Bengkulu.</p>\r\n\r\n<p>Latihan ini dilaksanakan di halaman Kantor Kejaksaan Tinggi Bengkulu dan sebagai upaya optimalisasi dari usaha Kejati bengkulu untuk meraih Wilayah Bebas dari Korupsi dan Wilayah Birokrasi Bersih Melayani (WBBM) Tahun 2020.</p>\r\n', '2020-02-27', '2020-03-02', 'zi', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134022.jpeg', ''),
(16, 'Bimbingan teknik tentang langkah-langkah strategis pelaksanaaan anggaran dan pertanggungjawaban penggunaan anggaran tahun 2020', '<p>Bimbingan teknik tentang langkah-langkah strategis pelaksanaaan anggaran dan pertanggungjawaban penggunaan anggaran tahun 2020</p>\r\n', '2020-02-27', '2020-02-28', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862630.jpg', ''),
(17, 'Pelaksanaan CAT CPNS Kejaksaan Tahun 2020', '<p>Pelaksanaan Test CPNS dengan menggunakan Sistem&nbsp; CAT di hari kedua, selasa 18 Februari 2020. Para peserta diberikan motivasi langsung dari Bapak Kepala Kejaksaan Tinggi Bengkulu, Amandra Syah Arwan, S.H., M.H dan didampingi oleh jajaran dari Kejaksaan Tinggi Bengkulu</p>\r\n', '2020-02-27', '2020-02-28', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862741.jpg', ''),
(18, 'Dr. Tantri Adriani Manurung, S.H., M.H, Wakil Kepala Kejaksaan Tinggi memimpin video conference', '<p>Video Conference&nbsp; yang dilaksanakan pada 6 Februari 2020 di Kejaksaan Tinggi Bengkulu dihadiri oleh Dr. Tantri Adriani Manurung, S.H., M.H selaku Wakil Kepala Kejaksaan Tinggi Bengkulu mewakili Kepala Kejaksaan Tinggi Bengkulu, Amandra Syah Arwan, S.H., M.H yang sedang melaksanakan penandatanganan MoU dengan LPS di Jakarta.</p>\r\n\r\n<p>Acara diikuti oleh seluruh jajaran di Kejaksaan Tinggi Bengkulu yaitu Asisten/Kabag TU, Koordniator, Kasi/Kasubbag dan Jaksa Fungsional</p>\r\n', '2020-02-27', '2020-02-28', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863180.jpg', ''),
(19, 'Penandatanganan PKS (MoU) antara Kejaksaan Tinggi Bengkulu dengan BPN Kanwil Bengkulu', '<p>Penandatanganan PKS (MoU) antara Kejaksaan Tinggi Bengkulu dengan BPN Kanwil Bengkulu</p>\r\n', '2020-02-27', '2020-02-28', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863035.jpg', ''),
(20, 'Penandatanganan MoU antara Kejaksaan Tinggi Bengkulu dengan KPU Provinsi Bengkulu', '<p>Penandatanganan perjanjian kerja sama (MoU) antara Kejaksaan Tinggi Bengkulu dengan KPU Provinsi Bengkulu dihadiri langsung oleh Bapak kepala Kejaksaan Tinggi Bengkulu, Amandra Syah Arwan, S.H., M.H dan Asisten Perdata dan Tata Usaha Negera beserta jajaran di Bidang Datun</p>\r\n', '2020-02-27', '2020-02-28', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862998.jpg', ''),
(21, 'Peresmian Kantor Kejaksaan Negeri Bengkulu Tengah', '<p>Peresmian Kantor Kejaksaan Negeri Bengkulu Tengah di Karang Tinggi, Bengkulu Tengah pada hari selasa, 14 Januari 2020. Bapak Kepala Kejaksaan Tinggi Bengkulu, Amandra Syah Arwan, S.H., M.H beserta ibu ketua IAD wilayah Bengkulu, ibu Ani Amandra meresmikan Kantor Kejaksaan Negeri Bengkulu Tengah. Acara diikuti oleh para jajaran dari Kejaksaan Tinggi Bengkulu, Kepala Kejaksaan Negeri se-wilayah hukum Kejaksaan Tinggi Bengkulu dan juga dihadiri oleh Bupati Benteng, Kapolres dan Kapolsek serta Dandim Bengkulu Tengah</p>\r\n', '2020-02-27', '2020-02-28', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863079.jpg', ''),
(22, 'Pelantikan dan Serah Terima Jabatan Ketua IAD Daerah Lebong dan Bengkulu Tengah', '<p>Pelantikan dan Serah Terima Jabatan Ketua IAD Daerah Lebong dan Bengkulu Tengah yang dipimpin langsung oleh Ibu Ketua IAD wilayah Bengkulu, Ibu Ani Amandra</p>\r\n', '2020-02-27', '2020-02-28', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862941.jpg', ''),
(23, 'Pencanangan Zona Integritas', '<p>Pada tanggal 12 Februari 2020 telah dilaksanakan Pencanangan Zona Integritas pada Kejaksaan Tinggi Bengkulu yang merupakan&nbsp;upaya pencegahan dan pemberantasan korupsi, Presiden Republik Indonesia (Inpres Nomor 17 Tahun 2011) menginstruksikan kepada para menteri dan kepala lembaga negara serta Kepala Daerah untuk mengambil langkah-langkah yang diperlukan sesuai tugas, fungsi, dan kewenangan masing-masing dalam rangka pencegahan dan pemberantasan korupsi Tahun 2012, dengan merujuk pada Prioritas Pembangunan Nasional dalam Rencana Pembangunan Jangka Menengah Nasional Tahun 2010-2014 dan Rencana Kerja Pemerintah Tahun 2012. Salah satu strateginya adalah &ldquo;Strategi Pencegahan&rdquo;.</p>\r\n\r\n<p>Kegiatan ini dipimpin langsung oleh Kepala Kejaksaan Tinggi Bengkulu (Amandra Syah Arwan, S.H., M.H.) di dampingi oleh Wakil Kepala Kejaksaan Tinggi Bengkulu (Dr. Tanti Adriani Manurung, S.H., M.H.) serta seluruh unsur pembantu pimpinan dan pegawai Kejaksaan Tinggi Bengkulu.</p>\r\n\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583133617.jpeg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583133958.jpeg\" style=\"height:607px; width:1080px\" /></p>\r\n', '2020-02-28', '2020-03-02', 'zi', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583133184.jpeg', ''),
(24, 'Tes CAT Kejaksaan', '<p>Pelaksanaan Test CPNS Kejaksaan RI Tahun 2020 dengan menggunakan CAT laksanakan di Kantor Badan Kepegawain Negara Provinsi Bengkulu pada hari Senin tanggal 17 Februari 2020&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583135890.jpeg\" style=\"height:608px; width:1080px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583135905.jpeg\" style=\"height:608px; width:1080px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583135914.jpeg\" style=\"height:608px; width:1080px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-03-02', '2020-03-02', 'pembinaan', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583135897.jpeg', ''),
(25, 'Apel Bulan Maret 2020', '<p><strong>BENGKULU</strong> &ndash; Senin (2/3) Kejaksaan Tinggi Bengkulu Apel Bulanan di halaman kantor Kejaksaan Tinggi Bengkulu. Seluruh pegawai Kejati dan Kejari Bengkulu mengikuti apel bulanan secara tertib yang di pimpin oleh Asisten Intelijen Kejati Bengkulu (Pramono Mulyo, SH., MH).</p>\r\n\r\n<p>&ldquo;Yang pertama kami minta agar seluruh ASN Kejaksaan memiliki netralitas dalam prosesi pelaksanaa pilkada serentak khususnya di Provinsi Bengkulu,&rdquo; ungkap Pembinan Apel, Pramono.</p>\r\n\r\n<p>Selain meminta sikap netral, insan adhyaksa juga diberikan kebebasan untuk memberikan hak pilihnya kepada calon pimpinan tertinggi di Provinsi Bengkulu guna pembangunan atau perbaikan Provinsi Bengkulu.<strong>(aww)</strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583160408.jpeg\" style=\"height:720px; width:1280px\" /></p>\r\n', '2020-03-02', '2020-03-02', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583160336.jpeg', ''),
(26, 'Pelayanan Hukum Gratis', '<p><strong>BENGKULU</strong> &ndash; Senin (2/3) Asisten Intelijen Kejaksaan Tinggi Bengkulu melakukan Pelayanan Hukum dan Konsultasi Hukum Gratis di Bengcoolen Mall beserta jajaran intel, pelayanan terkait pemahaman terhadap pengenalan hukum dan metode menghindari hukuman dengan cara-cara yang di atur dalam Undang-undang.</p>\r\n\r\n<p>&ldquo;Yang pertama kami minta agar bisa memfasilitasi seluruh masyarakat Kota Bengkulu untuk dapat menyikapi dampak bila terkena hukuman dan memberikan pengetahuan seluas-luasnya dalam memahami arti hukum di lingkungan masyarakat serta manfaat daripada pengenalan hukum&rdquo; ungkap Asisten Intelijen, Pramono.</p>\r\n\r\n<p>Selain meminta masyarakat untuk lebih mengenal hukum, warga juga diminta untuk menjauhi semua kegiatan yang nantinya akan menimbulkan ternjadinya tindak kriminal yang akan merugikan bagi pelakunya, dengan mengepankan moto Penegak Hukum &quot;Kenali Hukum Jauhi Hukuman&quot;.</p>\r\n\r\n<p>Pelaksanan kegiatan ini nantinya akan terus dilakukan setiap 1 (satu) bulan sekali dan akan dilakukan ditempat-tempat keramaian yang mana masyarakat membutuhkan informasi perihal hukum. <strong>(aww)</strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583163963.jpeg\" style=\"height:864px; width:1152px\" /></p>\r\n', '2020-03-02', '2020-03-02', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583163954.jpeg', ''),
(27, 'Pelantikan Wakil Kepala Kejaksaan Tinggi', '<p><strong>Bengkulu</strong> - Rabu (15/1)<strong> </strong>Kepala Kejaksaan Tinggi Bengkulu Amandra Syah Arwan, SH, MH. melakukan pelantikan dan pengambilan sumpah jabatan serta serah terima jabatan Pejabat Eselon II &amp; III di Lingkungan Kejaksaan Tinggi Bengkulu.</p>\r\n\r\n<p>Beberapa Pejabat yang mendapatkan Promosi adalah Kepala Bagian Tata Usaha, Kepala Kejaksaan Negeri dan Koordinator pada Kejaksaan Tinggi Bengkulu, &quot;saya ingatkan kepada rekan-rekan untuk melaksanakan tugas ini dengan sebaik-baiknya dan penuh rasa tanggung jawab&quot; ungkap Kajati Bengkulu.</p>\r\n\r\n<p>Pelaksanaan serah terima ini dilaksankan di Aula Sasana Kejaksaan Tinggi Bengkulu dan di ikuti oleh seluruh Pejabat pada wilayah Kejati Bengkulu.</p>\r\n\r\n<hr />\r\n<p><img alt=\"\" src=\"http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583330450.jpeg\" style=\"height:1080px; width:1080px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-03-04', '2020-03-04', 'umum', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583329050.jpeg', ''),
(28, 'Inspeksi Umum JAMWAS RI', '<p><strong>Bengkulu</strong> - Bahwa pada hari Senin tanggal 24 Februari 2020 Kejaksaan Tinggi Bengkulu menerima Tim Inspeksi Umum Inspektorat V pada Jaksa Agung Muda Bidang Pengawasan yang dipimpin oleh bapak Inspektur V Mangihut Sinaga, SH.MH bersama dengan Tim :<br />\r\n1. Andrizal SH.MH, Inspektur Muda Pegasum dan Pelengkapan<br />\r\n2. Dedy Suwardy Surachman SH.MH Inspektur Muda Pidum dan Datun<br />\r\n3. Sri Murni SH Pemeriksa Tugas Umum dan Pelengkapan<br />\r\n4. Nurul Hidayat, SH.MH Pemeriksa Datun<br />\r\n5. Luvia Claudia Huwae Pemeriksa Intelijen<br />\r\n6. Hartana SH.MH Pemeriksa Intelijen<br />\r\ndimana melaksanakan Inspeksi Umum mulai tanggal 24 Februari sampai dengan 28 Februari 2020 pada satuan kerja Kejaksaan Tinggi Bengkulu dan beberapa Kejaksaan Negeri di wilayah hukum Kejaksaan Tinggi Bengkulu</p>\r\n', '2020-03-09', '2020-03-09', 'umum', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583765170.jpeg', ''),
(29, 'Sosialisasi Pencegahan dan Penanggulangan Covid-19', '<p>Bengkulu - Kejaksaan Tinggi Bengkulu, Senin (9/3) melakukan sosialisasi dan pemeriksaan kesehatan terhadap seluruh jaksa dan pegawai kejaksaan guna pencegahan dan penanggulangan penyebaran wabah virus corona baru atau Covid-19.</p>\r\n\r\n<p>Wakil Kepala Kejaksaan Tinggi Bengkulu Dr. Tanti Adriani Manurung, S.H., M.H. di dampingi oleh Kepala Bidang P2P Dinas Kesehatan Provinsi Bengkulu ibu Lisyenti bahar, S.KM., MPPM. mengatakan pemeriksaan kesehatan ini dilakukan sesuai dengan instruksi Jaksa Agung Republik Indonesia ST Burhanuddin kepada seluruh jajaran kejaksaan baik ditingkat pusat maupun daerah, &quot;Tentunya kita tau bahwa virus corona sudah merebak tidak hanya di dunia tetapi juga sudah masuk ke Indonesia. Kita tentu harus mewaspadainya. Kegiatan ini juga perintah dari Jaksa Agung dan perlu disebar luaskan,&quot; kata Tanti.</p>\r\n\r\n<p>Selain pemeriksaan kesehatan, kegiatan ini juga untuk memberi edukasi kepada seluruh jaksa dan pegawai kejaksaan tentang penyebaran Covid-19, termasuk cara agar tidak tertular virus yang berasal dari Kota Wuhan, Republik Rakyat Tiongkok ini.</p>\r\n\r\n<p>Pemeriksaan kesehatan ini melibatkan tim medis dari Rumah Sakit M Yunus, Bengkulu. Pemeriksaan dilakukan menggunakan alat pemindai suhu tubuh yakni thermal gun.</p>\r\n\r\n<p>Berdasarkan hasil pemeriksaan, seluruh jaksa dan pegawai kejaksaan di Kejati Bengkulu dinyatakan sehat dan tidak ada yang terinfeksi Covid-19.</p>\r\n\r\n<p>&quot;Supaya semua teredukasi dan memahami bagaimana mencegah virus corona untuk diri sendiri, keluarga dan di lingkungan kantor. Mencegah tentu lebih baik,&quot; jelas Tanti.</p>\r\n\r\n<p>selain itu dijelaskan oleh ibu Lisyenti bahar, S.KM., MPPM. sebagai informasi bahwa di Bengkulu yang menjadi perhatian dalam hal penyebab kematian adalah HIV AID yang hinggsa saat ini berjumlah 1146 (data dinkes provinsi bengkulu).</p>\r\n\r\n<p>&quot;corona virus ini bisa ditangani dengan cepat dikarenakan penanganan yang baik akan mencegah kematian, banyak kasus kematian terjadi dikarenakan COVID19 menyerang saluran pernafasan sehingga mengakitkan kematian&quot; tegas Lisyenti.</p>\r\n\r\n<p>Hingga saat ini penyebab dari Covid-19 berasal dari hewan yaitu kelelawar dan ular, dapat di tularkan dan bisa juga hidup di hewan unggas seperti ayam dan bebek.</p>\r\n', '2020-03-09', '2020-03-09', 'umum', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583765741.jpeg', 'https://www.youtube.com/watch?v=XiSnhbGD3Jg'),
(30, 'Pertemuan Kejati Bengkulu dan Kanwil Pajak Bengkulu - Lampung', '<p><strong>Kejati Bengkulu</strong><strong>&nbsp;-</strong>&nbsp;Kasus virus<a href=\"https://www.liputan6.com/news/read/4219596/update-corona-per-provinsi-4-april-2020-dari-positif-sembuh-dan-meninggal\">&nbsp;Corona</a>&nbsp;atau Covid-19 kembali bertambah. Terkait hal ini, Kepala Kejaksaan Negeri Bengkulu Jaksa Utama Pratama Emilwan Ridwan, S.H., M.H. bersama Kepala Kepolisian Resor Bengkulu&nbsp;AKBP. Pahala Simanjuntak, SIK bersama melakukan aksi cepat tanggap dengan tema Sinergitas&nbsp;Kejaksaan dan Polri &quot;Meringankan Beban Warga menghadapi Covid19&quot;.</p>\r\n\r\n<p>Kegiatan ini dilakukan dengan membagikan Nasi Kotak kepada masyarakat kota Bengkulu dan disambut baik oleh warga.</p>\r\n\r\n<p>&quot;Sudah sepatutnya kita bersyukur dan meringankan beban warga karena kota Bengkulu masih diberikan kesempatan menyiapkan diri dan penyebaran covid19&quot; ungkap Emilwan.</p>\r\n', '2020-03-09', '2020-05-03', 'umum', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583766964.jpeg', 'https://www.youtube.com/watch?v=wiLRScvBX7Q');

-- --------------------------------------------------------

--
-- Table structure for table `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL,
  `nama_file` tinytext NOT NULL,
  `tgl_file` date NOT NULL,
  `url_file` tinytext NOT NULL,
  `kat_file` varchar(50) NOT NULL,
  `ket_file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `nama_file`, `tgl_file`, `url_file`, `kat_file`, `ket_file`) VALUES
(138, 'foto_berita1583483535.PNG', '0000-00-00', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583483535.PNG', 'jaksa_agung', NULL),
(151, 'sarana1', '0000-00-00', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/sarana11582861420.jpeg', '', NULL),
(153, 'Bimbingan teknik tentang langkah-langkah strategis pelaksanaaan anggaran dan pertanggungjawaban penggunaan anggaran tahun 2020_1582862630', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862630.jpg', '', '16'),
(154, 'Gladi Pencanangan Zona Integritas di Lingkungan Kejaksaan Tinggi Bengkulu_1582862688', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862688.jpg', '', '15'),
(155, 'Pelaksanaan CAT CPNS Kejaksaan Tahun 2020_1582862741', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862741.jpg', '', '17'),
(156, 'Pelantikan dan Serah Terima Jabatan Ketua IAD Daerah Lebong dan Bengkulu Tengah_1582862941', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862941.jpg', 'galeri', '22'),
(157, 'Penandatanganan MoU antara Kejaksaan Tinggi Bengkulu dengan KPU Provinsi Bengkulu_1582862998', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582862998.jpg', '', '20'),
(158, 'Penandatanganan PKS (MoU) antara Kejaksaan Tinggi Bengkulu dengan BPN Kanwil Bengkulu_1582863035', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863035.jpg', '', '19'),
(159, 'Peresmian Kantor Kejaksaan Negeri Bengkulu Tengah_1582863079', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863079.jpg', 'galeri', '21'),
(160, 'Sidang Perkara Dugaan Korupsi Dinas DPRD_1582863113', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863113.jpg', '', '14'),
(161, 'Upacara Peringantan Hari Pahlawan Ke-74 Tahun 2019_1582863148', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863148.PNG', '', '7'),
(162, 'Dr. Tantri Adriani Manurung, S.H., M.H, Wakil Kepala Kejaksaan Tinggi memimpin video conference_1582863180', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582863180.jpg', '', '18'),
(179, 'struktural1583558333', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583558333.jpeg', 'struktural', '68'),
(181, 'struktural1583556450', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583556450.jpeg', 'struktural', '69'),
(182, 'struktural1583556555', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583556555.jpeg', 'struktural', '70'),
(183, 'struktural1583556570', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583556570.jpeg', 'struktural', '72'),
(184, 'struktural1583556587', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583556587.jpeg', 'struktural', '71'),
(185, 'struktural1583558352', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583558352.jpeg', 'struktural', '67'),
(186, 'struktural1583558373', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583558373.jpeg', 'struktural', '74'),
(188, 'c', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/file/pdf1582877518.pdf', 'rencana kerja', '22'),
(189, 'Judul_1582883632', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582883632.jpg', '', '23'),
(190, 'Judul_1582883684', '2020-02-28', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1582883684.jpg', '', '23'),
(191, 'Kejaksaan Negeri Kepahiang Eksekusi Uang Pengganti_1583111564', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583111564.jpg', '', '5'),
(192, 'Monitoring dan Evaluasi terhadap Program Diklat Tahun 2017_1583111722', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583111722.jpg', '', '2'),
(193, 'struktural1583557187', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583557187.jpeg', 'struktural', '82'),
(194, 'struktural1583557207', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583557207.jpeg', 'struktural', '77'),
(195, 'struktural1583557232', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583557232.jpeg', 'struktural', '78'),
(196, 'struktural1583557293', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583557293.jpeg', 'struktural', '79'),
(197, 'struktural1583460607', '2020-03-06', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583460607.png', 'struktural', '80'),
(198, 'struktural1583557312', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583557312.jpeg', 'struktural', '81'),
(201, 'struktural1583557333', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583557333.jpeg', 'struktural', '76'),
(202, 'struktural1583557414', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/struktural1583557414.jpeg', 'struktural', '75'),
(203, 'Monitoring dan Evaluasi BADIKLAT KEJAGUNG R.I._1583121657', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583121657.jpg', '', '8'),
(204, 'Monitoring dan Evaluasi terhadap Program Diklat Tahun 2017_1583126568', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583126568.jpg', '', '2'),
(205, 'Qurban Ied Adha Kejati Bengkulu_1583126623', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583126623.jpg', '', '9'),
(206, 'Judul_1583133184', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583133184.jpeg', '', '23'),
(207, 'Judul_1583133617', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583133617.jpeg', '', '23'),
(208, 'Pencanangan Zona Integritas_1583133958', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583133958.jpeg', '', '23'),
(209, 'Gladi Pencanangan Zona Integritas di Lingkungan Kejaksaan Tinggi Bengkulu_1583134022', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134022.jpeg', '', '15'),
(210, 'Penyerahan Hewan Qurban dari Kementrian Desa, PDT dan Transmigrasi RI ke Kejati Bengkulu_1583134171', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134171.jpg', '', '10'),
(211, 'Qurban Ied Adha Kejati Bengkulu_1583134517', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134517.jpg', '', '9'),
(212, 'Qurban Ied Adha Kejati Bengkulu_1583134566', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134566.jpg', '', '9'),
(213, 'Qurban Ied Adha Kejati Bengkulu_1583134577', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134577.jpg', '', '9'),
(214, 'Kajati Bengkulu Memantau Pendaftaran CPNS Kejaksaan Republik Indonesia_1583134815', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134815.jpg', '', '11'),
(215, 'HUT RI Ke-73_1583134915', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583134915.jpg', '', '12'),
(216, 'Tes CAT Kejaksaan_1583135890', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583135890.jpeg', '', '24'),
(217, 'Tes CAT Kejaksaan_1583135897', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583135897.jpeg', '', '24'),
(218, 'Tes CAT Kejaksaan_1583135905', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583135905.jpeg', '', '24'),
(219, 'Tes CAT Kejaksaan_1583135914', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583135914.jpeg', '', '24'),
(220, 'Tes CPNS dengan CAT tahun 2020', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/Tes_CPNS_dengan_CAT_tahun_20201583136140.jpeg', 'pembinaan', NULL),
(221, 'Apel Bulan Maret 2020_1583160336', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583160336.jpeg', '', '25'),
(222, 'Apel Bulan Maret 2020_1583160408', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583160408.jpeg', '', '25'),
(223, 'home_1583161734.jpg', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/beranda/home_1583161734.jpg', 'beranda', NULL),
(225, 'Pelayanan Hukum Gratis_1583163954', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583163954.jpeg', '', '26'),
(226, 'Pelayanan Hukum Gratis_1583163963', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583163963.jpeg', '', '26'),
(227, 'home_1583164914.jpeg', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/beranda/home_1583164914.jpeg', 'beranda', NULL),
(228, 'home_1583164937.jpeg', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/beranda/home_1583164937.jpeg', 'beranda', NULL),
(229, 'home_1583164980.jpeg', '2020-03-02', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/beranda/home_1583164980.jpeg', 'beranda', NULL),
(230, 'Pencanangan WBK', '0000-00-00', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/Pencanangan_WBK1583324807.jpeg', 'galeri', NULL),
(231, 'Pelantikan Wakil Kepala Kejaksaan Tinggi_1583329050', '2020-03-04', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583329050.jpeg', '', '27'),
(232, 'Pelantikan Wakil Kepala Kejaksaan Tinggi_1583330450', '2020-03-04', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583330450.jpeg', '', '27'),
(233, 'Pelantikan Wakil Kepala Kejaksaan Tinggi_1583330479', '2020-03-04', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583330479.jpeg', '', '27'),
(234, 'Pelantikan Wakil Kepala Kejaksaan Tinggi_1583330500', '2020-03-04', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583330500.jpeg', '', '27'),
(235, 'HBA 60_1583563757', '2020-03-07', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583563757.jpg', '', '28'),
(236, 'Inspeksi Umum JAMWAS RI_1583765145', '2020-03-09', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583765145.jpeg', '', '28'),
(237, 'Inspeksi Umum JAMWAS RI_1583765170', '2020-03-09', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583765170.jpeg', '', '28'),
(238, 'Sosialisasi Pencegahan dan Penanggulangan Covid-19_1583765741', '2020-03-09', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583765741.jpeg', '', '29'),
(239, 'Pertemuan Kejati Bengkulu dan Kanwil Pajak Bengkulu - Lampung_1583766964', '2020-03-09', 'https://kejati-bengkulu.go.id/ptsp_kejati/asset/gambar/foto/foto_berita1583766964.jpeg', '', '30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` tinytext NOT NULL,
  `sub_informasi` tinytext NOT NULL,
  `kat_informasi` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `judul_informasi`, `sub_informasi`, `kat_informasi`) VALUES
(14, 'Data Informasi Intelijen Tahun 2019', 'Organisasi Masyarakat1', 'rencana kerja'),
(16, 'Data Informasi Intelijen Tahun 2019', 'Rencana Kerja 2019', 'intelijen'),
(17, 'Periode Januari-Desember 2018', 'DATA TINDAK PIDANA UMUM 2018', 'rencana kerja'),
(18, 'Periode Januari-Desember 20', 'DATA TINDAK PIDANA UMUM 2019', 'pidana umum'),
(19, 'judul informasi', 'sub informasi', 'pengawasan'),
(20, 'judul_informasi', 'sub_informasi', 'perdata dan tata usaha negara'),
(21, 'judul_informasi', 'sub_informasi', 'pidana khusus'),
(22, 'a', 'b', 'rencana kerja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawab`
--

CREATE TABLE `tb_jawab` (
  `id_jawab` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ket` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(217, 'Kejaksaan Negeri Bengkulu', 'Jl. Soekarno Hatta No.43 Bengkulu Telp. 0736-21233', 'EMILWAN RIDWAN, S.H., M.H', 'www.kejari-bengkulu.go.id'),
(218, 'Kejaksaan Negeri Bengkulu Utara', 'Jl. Sudirman No.236 Arga Makmur Telp. 0737-21003', 'ELWIN AGUSTIAN KHAHAR, S.H., M.H.', 'www.kejari-bengkuluutara.go.id'),
(219, 'Kejaksaan Negeri Kaur', 'Jl. Raya Lintas Barat Sumatera Gedung Sake Bintuhan Telp. 0739-61279', 'TATI VAIN SITANGGANG, S.H., M.H.', 'www.kejari-kaur.go.id'),
(220, 'Kejaksaan Negeri Rejang Lebong', 'Jl. Basuki Rahmat No. 9A Curup. Telp 0732-32596', 'CONNY TONGGO MASDELIMA, S.H.,M.H.', 'www.kejari-rejanglebong.go.id'),
(221, 'Kejaksaan Negeri Kepahiang', 'Jl. Raya Kepahiang Curup Telp. 0739', 'LALU SYAIFUDIN, S.H., M. Hum.', '-'),
(222, 'Kejaksaan Negeri Bengkulu Selatan', 'Jl. Bahmada Rustam No.31 Manna', 'NI MADE HERAWATI, S.H.', '-'),
(223, 'Kejaksaan Negeri Muko-Muko', 'Jl. Jed. Sudirman Bandar Ratu Muko-Muko Telp. 0737-71275', 'HENDRI ANTORO, S.Ag., S.H., M.H', '-'),
(224, 'Kejaksaan Negeri Seluma', 'Jl. Umar Ahmad No.38 Tais Telp 0736-91038', 'MUHAMMAD ALI AKBAR, S.H.,M.H.', '-'),
(225, 'Kejaksaan Negeri Lebong', 'Jl. Raya Lebong Arga Makmur No.3A Tubei Telp 0739-', 'FADIL REGAN, S.H., M.H.', '-'),
(226, 'Kejaksaan Negeri Bengkulu Tengah', 'Bengkulu Tengah', 'Dr. LAMBOK MARISI JAKOBUS SIDABUTAR, S.H., M.H.', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `soal_nilai` int(11) NOT NULL,
  `survey_nilai` int(11) NOT NULL,
  `nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `soal_nilai`, `survey_nilai`, `nilai`) VALUES
(1, 1, 1, 5),
(2, 2, 1, 5),
(3, 3, 1, 5),
(4, 4, 1, 5),
(5, 1, 2, 5),
(6, 2, 2, 4),
(7, 3, 2, 3),
(8, 4, 2, 2),
(9, 1, 3, 4),
(10, 2, 3, 5),
(11, 3, 3, 3),
(12, 4, 3, 2),
(13, 1, 4, 4),
(14, 2, 4, 3),
(15, 3, 4, 2),
(16, 4, 4, 2),
(17, 1, 5, 1),
(18, 2, 5, 1),
(19, 3, 5, 1),
(20, 4, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nama_pengaduan` tinytext NOT NULL,
  `surel_pengaduan` varchar(25) NOT NULL,
  `notelp_pengaduan` varchar(15) NOT NULL,
  `subjek_pengaduan` tinytext NOT NULL,
  `ktg_pengaduan` tinytext NOT NULL,
  `pesan_pengaduan` text NOT NULL,
  `url_file` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id_pengaduan`, `nama_pengaduan`, `surel_pengaduan`, `notelp_pengaduan`, `subjek_pengaduan`, `ktg_pengaduan`, `pesan_pengaduan`, `url_file`) VALUES
(1, 'a', 'a', 'a', 'a', 'Umum', 'a', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/file/1582800641.pdf'),
(2, 'b', 'b', 'b', 'b', 'Umum', 'b', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/file/1582802200.pdf'),
(3, 'c', 'c', 'c', 'c', 'Perdata', 'c', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/file/1582802451.pdf'),
(4, 'd', 'd', 'd', 'd', 'Pidana', 'd', 'http://kejati-bengkulu.go.id/ptsp_kejati/asset/file/1582802479.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `isi_pengumuman` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `isi_pengumuman`) VALUES
(1, 'Hasil Ujian CPNS Kejaksaan tahap TKD Tahun 2020 dapat di lihat pada situs resmi Kejaksaan pada tanggal 15 Maret 2020 www.rekrutmen.kejaksaan.go.id');

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
(1, 'Nomor 31 Tahun 1999 jo UU Nomor 20 Tahun 2001', '<p><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/UU_TIPIKOR.pdf\" target=\"_blank\">Nomor 31 Tahun 1999 jo UU Nomor 20 Tahun 2001 Pemberantasan Tindak Pidana Korupsi</a></p>\r\n', 'Undang-undang'),
(21, 'Nomor 9 Tahun 2003', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-9.pdf\" target=\"_blank\">Wewenang Pengangkatan, Pemindahan, dan Pemberhentian PNSD</a></em></p>\r\n', 'Peraturan Pemerintah'),
(22, 'Nomor 18 Tahun 2005', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Perpres-2005-18.pdf\" target=\"_blank\">Komisi Kejaksaan Republik Indonesia</a></em></p>\r\n', 'Keputusan Presiden'),
(24, 'Nomor 54 Tahun 2003', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/PP-2003-54-pa-PP-200-97.pdf\" target=\"_blank\">Perubahan atas PP Nomor 97 Tahun 2000 tentang Formasi PNS</a></em></p>\r\n', 'Peraturan Pemerintah'),
(25, 'Nomor 158 Tahun 2000', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Keppres-2000-158.pdf\" target=\"_blank\">Tunjangan Jabatan Fungsional Jaksa</a></em></p>\r\n', 'Keputusan Presiden'),
(26, 'Nomor 9 Tahun 2000', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Inpres-2000-9.pdf\" target=\"_blank\">Pengarusutamaan Gender dalam Pembangunan Nasional</a></em></p>\r\n', 'Instruksi Presiden'),
(27, 'Nomor 7 Tahun 1999', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Inpres-1999-7.pdf\" target=\"_blank\">Akuntabilitas Kinerja Instansi Pemerintah</a></em></p>\r\n', 'Instruksi Presiden'),
(28, 'Nomor 75 Tahun 2004', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Kepmenpan-2004-75.pdf\" target=\"_blank\">Pedoman Perhitungan Kebutuhan Pegawai Berdasarkan Beban Kerja dalam Rangka Penyusunan Formasi PNS</a></em></p>\r\n', 'Keputusan Menteri Pemberdayaan Aparatur Negara'),
(29, 'Nomor 23 Tahun 2004', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Kepmenpan-2004-23.pdf\" target=\"_blank\">Pedoman Penataan Pegawai Negeri Sipil</a></em></p>\r\n', 'Keputusan Menteri Pemberdayaan Aparatur Negara'),
(30, 'Nomor 9 Tahun 2002', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Kepmenpan-2002-09.pdf\" target=\"_blank\">Jabatan Fungsional Arsiparis dan Angka Kreditnya</a></em></p>\r\n', 'Keputusan Menteri Pemberdayaan Aparatur Negara'),
(31, 'KEP-150/A/J.A/07/2011', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Kepja-2011-150.pdf\" target=\"_blank\">Penetapan Kelas Jabatan Struktural dan Jabatan Fungsional Pegawai di Lingkungan Kejaksaan Republik Indonesia</a>.&nbsp;</em><em><a href=\"http://kt-jaten', 'Keputusan Jaksa Agung'),
(32, 'KEP-326/A/J.A/09/2005', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/Kepja-2005-326.pdf\" target=\"_blank\">Pendelegasian Wewenang untuk dan Atas Nama Jaksa Agung Republik Indonesia Menandatangani Keputusan Pengangkatan, Pemindahan, Pemberhentian, Peberian Tun', 'Keputusan Jaksa Agung'),
(33, 'INS-001/A/JA/06/201', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/INSJA-2011-001.pdf\" target=\"_blank\">Standar Operasional Prosedur Pelayanan Informasi Publik di Kejaksaan Republik Indonesia</a></em></p>\r\n', 'Instruksi Jaksa Agung'),
(34, 'INS-002/A/JA/1/2005', '<p><em><a href=\"http://kt-jateng.kejaksaan.go.id/uploads/peraturan/INSJA-2005-002.pdf\" target=\"_blank\">Instruksi Jaksa Agung tentang Perencanaan Stratejik dan Rencana Kinerja Kejaksaan RI Tahun 2005</a></em></p>\r\n', 'Instruksi Jaksa Agung');

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
(1, 'Arahan Jaksa Agung', 'DR. H. ST. Burhanuddin', '<ol>\r\n	<li>Penegakan hukum tidak lagi menitikberatkan kepada seberapa banyak perkara korupsi yang ditangani, namun lebih kepada upaya untuk menjamin suatu wilayah bebas dari korupsi.</li>\r\n	<li>Penegakan hukum guna mendukung investasi baik di pusat maupun di daerah.</li>\r\n	<li>Melakukan pendataan dan pengalihan fasilitas umum, fasilitas sosial, maupun aset-aset lainnya milik Pemerintah yang terbengkalai, tidak terurus atau di kuasai oleh pihak lain dengan melibatkan Instansi terkait.</li>\r\n	<li>Pemanfaatan IT untuk mendukung keberhasilan tugas-tugas Kejaksaan.</li>\r\n	<li>Menciptakan mekanisme pengawasan yang ketat untuk menjaga konsistensi pelaksanaan Zona Integritas menuju Wilayah Bebas dari Korupsi (WBK) dan Wilayah Birokrasi Bersih Melayani (WBBM).</li>\r\n	<li>Diperlukan sistem <em>complaint and handling </em><em>management </em>yang mampu meningkatkan pelayanan hukum terhadapa masyarakat.</li>\r\n	<li>Inovasi yang telah diterapkan selama ini di satuan kerja dan terbukti dapat mengoptimalkan kinerja secara efektif dan efisien, harus dapat di implementasikan dalam skala nasional.</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id` int(11) NOT NULL,
  `pertanyaan` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktural`
--

CREATE TABLE `tb_struktural` (
  `id_struktural` int(11) NOT NULL,
  `nama_struktural` tinytext NOT NULL,
  `nip_pegawai` int(18) NOT NULL,
  `jabatan_struktural` tinytext NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_struktural`
--

INSERT INTO `tb_struktural` (`id_struktural`, `nama_struktural`, `nip_pegawai`, `jabatan_struktural`, `level`) VALUES
(67, 'Amandra Syah Arwan, S.H., M.H.', 0, 'Kepala Kejaksaan Tinggi', 0),
(68, 'Dr. Tanti Adriani Manurung, S.H., M.H.', 0, 'Wakil Kepala Kejaksaan Tinggi', 0),
(69, 'Timotius Tri Ari Mulyanto, S.H., M.H.', 0, 'Asisten Pembinaan', 0),
(70, 'Pramono Mulyo, S.H., M.Hum.', 0, 'Asisten Intelijen', 0),
(71, 'Pandoe Pramoe Kartika, S.H.', 0, 'Asisten Tindak Pidana Khusus', 0),
(72, 'Helmi, S.H., M.H.', 0, 'Asisten Tindak Pidana Umum', 0),
(74, 'Setyo Pranoto, S.H., M.H.', 0, 'Asisten Perdata dan Tata Usaha Negara', 0),
(75, 'Gatot Guno Sembodo, S.H., M.H.', 0, 'Asisten Pengawasan', 0),
(76, 'Burhan, S.H., M.H.', 0, 'Kepala Bagian Tata Usaha', 0),
(77, 'Meilinda, S.H., M.H.', 0, 'Koordinator', 0),
(78, 'Armen Wijaya, S.H., M.H.', 0, 'Koordinator', 0),
(79, 'Adam Ohoiled, S.H., M.H.', 0, 'Koordinator', 0),
(80, 'Hendri Hanafi, S.H., M.H.', 0, 'Koordinator', 0),
(81, 'Muib, S.H., M.H.', 0, 'Koordinator', 0),
(82, 'Adi Nuryadin S, S.H., M.H.', 0, 'Koordinator', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_survey`
--

CREATE TABLE `tb_survey` (
  `id_survey` int(11) NOT NULL,
  `nama_survey` tinytext NOT NULL,
  `jk_survey` tinytext NOT NULL,
  `pekerjaan_survey` tinytext NOT NULL,
  `email_survey` tinytext NOT NULL,
  `no_survey` tinytext NOT NULL,
  `saran_survey` tinytext NOT NULL,
  `pendidikan_survey` tinytext NOT NULL,
  `usia_survey` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49');

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
(24, 'Kejaksaan sebagai lembaga penegak hukum yang bersih, efektif, efisien, transparan, akuntabel, untuk dapat memberikan pelayanan prima dalam mewujudkan supremasi hukum secara profesional, proporsional dan bermartabat yang berlandaskan keadilan, kebenaran, serta nilai – nilai kepatutan.                                                                       ', 'visi'),
(65, 'Mengoptimalkan pelaksanaan fungsi Kejaksaan dalam pelaksanaa tugas dan wewenang, baik dalam segi kualitas maupun kuantitas penanganan perkara seluruh tindak pidana, penanganan perkara Perdata dan Tata Usaha Negara, serta pengoptimalan kegiatan Intelijen Kejaksaan, secara profesional, proposional dan bermartabat melalui penerapan Standard Operating Procedure (SOP) yang tepat, cermat, terarah, efektif, dan efisien.', 'misi'),
(66, 'Mengoptimalkan peranan bidang Pembinaan dan Pengawasan dalam rangka mendukung pelaksanaan tugas bidang-bidang lainnya, terutama terkait dengan upaya penegakan hukum.', 'misi'),
(67, 'Mengoptimalkan tugas pelayanan publik di bidang hukum dengan penuh tanggung jawab, taat azas, efektif dan efisien, serta penghargaan terhadap hak-hak publik.', 'misi'),
(68, 'Melaksanakan pembenahan dan penataan kembali struktur organisasi Kejaksaan, pembenahan sistem informasi manajemen terutama pengimplementasian program quickwins agar dapat segera diakses oleh masyarakat, penyusunan cetak biru (blue print) pembangunan sumber daya manusia Kejaksaan jangka menengah dan jangka panjangtahun 2025, menerbitkan dan menata kembali manajemen administrasi keuangan, peningkatan sarana dan prasarana, serta peningkatan kesejahteraan pegawai melalui tunjangan kinerja atau remunerasi, agar kinerja Kejaksaan dapat berjalan lebih efektif, efisien, transparan, akuntabel dan optimal.', 'misi'),
(69, 'Membentuk aparat Kejaksaan yang handal, tangguh, profesional, bermoral dan beretika guna menunjang kelancaran pelaksanaan tugas pokok, fungsi dan wewenang, terutama dalam upaya penegakan hukum yang berkeadilan serta tugas-tugas lainnya yang terkait.', 'misi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tb_kejari`
--
ALTER TABLE `tb_kejari`
  ADD PRIMARY KEY (`id_kejari`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

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
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_struktural`
--
ALTER TABLE `tb_struktural`
  ADD PRIMARY KEY (`id_struktural`);

--
-- Indexes for table `tb_survey`
--
ALTER TABLE `tb_survey`
  ADD PRIMARY KEY (`id_survey`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_kejari`
--
ALTER TABLE `tb_kejari`
  MODIFY `id_kejari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_peraturan`
--
ALTER TABLE `tb_peraturan`
  MODIFY `id_peraturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_perintah`
--
ALTER TABLE `tb_perintah`
  MODIFY `id_perintah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_struktural`
--
ALTER TABLE `tb_struktural`
  MODIFY `id_struktural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_survey`
--
ALTER TABLE `tb_survey`
  MODIFY `id_survey` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
