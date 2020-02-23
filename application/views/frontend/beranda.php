<!-- Carousel -->
<div class="slide-wrapper" id="menuAtas">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Third slide">
            </div>
        </div>
    </div>
    <div class="red container-fluid">
        <div class="red-content" id="divButton">
            <div class="container-fluid containerMenuAtas" id="containerMenuAtas">
                <br>
                <center>
                    <a href="http://www.denpasarkota.go.id/home" id="logoMenuAtas" class="logo"><img
                            class="logoKajati" src="<?php echo base_url('/asset/assets_front') ?>/img/logoatas.png" style="width:430px" alt=""></a>
                </center>
                <br><br><br>
                <form id="w0" action="/search/filter" method="post">
                    <input type="hidden" name="frontend-csrf"
                        value="VnV4VlMyWEQUH0luZUszMTkSAS8GcGpwAg81IBlCExYdKiwdB0hoAQ==">
                    <div class="input-group intro-searchform">
                        <input type="text" class="form-control kolomSearch" name="keywords" value=""
                            size="50" placeholder="Apa yang Anda Cari?" required="" style="color:black;">
                        &nbsp;&nbsp;
                        <span class="input-group-btn">
                            <button class="btn btn-success buttonSearch" style="background:#097319;"
                                type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <br>
                <div class="card-columns">
                    <button class="btn btn-primary text-white buttonUtama" data-tooltip='Button 1'><i
                            id="iconButton" class="fa fa-edit"></i><br>REGISTRASI USER</button>
                    <button class="btn btn-danger text-white buttonUtama" data-tooltip='Button 2'><i
                            id="iconButton" class="fa fa-paper-plane"></i><br>SILAPTIPIKOR</button>
                    <button class="btn btn-warning text-white buttonUtama" data-tooltip='Button 3'><i
                            id="iconButton" class="fa fa-at"></i><br>APLIKASI LAIN 1</button>
                    <button class="btn btn-info text-white buttonUtama" data-tooltip='Button 4'><i
                            id="iconButton" class="fa fa-globe"></i><br>APLIKASI LAIN 2</button>
                    <button class="btn btn-success text-white buttonUtama" data-tooltip='Button 5'><i
                            id="iconButton" class="fa fa-images"></i><br>GALERI</button>
                    <a href="<?php echo base_url('frontend/berita');?>" class="btn btn-secondary text-white buttonUtama"
                        data-tooltip='Button 6'><i id="iconButton"
                            class="fa fa-newspaper"></i><br>BERITA</a>
                    <a href="login.html" class="btn btn-success text-white buttonUtama"
                        data-tooltip='Button 7'><i id="iconButton" class="fa fa-power-off"></i><br>LOGIN</a>
                    <button class="btn btn-warning text-white buttonUtama" data-tooltip='Button 8'><i
                            id="iconButton" class="fa fa-id-card"></i><br>PROFIL PEGAWAI</button>
                    <button class="btn btn-danger text-white buttonUtama" data-tooltip='Button 9'><i
                            id="iconButton" class="fa fa-info-circle"></i><br>INFORMASI PERKARA</button>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>

<div class="container col-sm-12" id="banner1">
    <div class="row">
        <div class="col">
            <br>
            <h3 class="text-center text-white" style="font-size:40px">TRI KRAMA ADHYAKSA</h3>
            <br>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card-columns">
            <div class="card text-white cardTriKrama"
                style="height:200px;background: rgba(42, 110, 72, 1);border:0px;">
                <div class="card-body">
                    <h5 class="card-title text-center">SATYA</h5>
                    <p class="card-text text-justify">Kesetiaan yang bersumber pada rasa jujur, baik
                        terhadap Tuhan Yang Maha Esa, terhadap diri pribadi dan keluarga maupun kepada
                        sesama manusia.<br><br></p>
                </div>
            </div>
            <div class="card text-dark cardTriKrama"
                style="height:200px;background: rgba(209, 209, 10, 1);border:0px;">
                <div class="card-body">
                    <h5 class="card-title text-center">ADHI</h5>
                    <p class="card-text text-justify">Kesempurnaan dalam bertugas dan berunsur utama
                        pemilikan rasa tanggung jawab, bertanggung jawab baik terhadap Tuhan Yang Maha Esa,
                        terhadap keluarga dan terhadap sesama manusia.</p>
                </div>
            </div>
            <div class="card text-white cardTriKrama"
                style="height:200px;background: rgba(4, 89, 42, 1);border:0px;">
                <div class="card-body">
                    <h5 class="card-title text-center">WICAKSANA</h5>
                    <p class="card-text text-justify">Bijaksana dalam tutur kata dan tingkah laku, khususnya
                        dalam penetapan kekuasaan dan kewenangannya.</p>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="container col-sm-12" id="banner2">
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center" style="margin-top:5px;">Jaksa Agung Republik Indonesia</h5>
                        <img class="card-img cardJaksa" src="<?php echo base_url('/asset/assets_front') ?>/img/jaksa.jpg" alt="Card image">
                        <h5 class="text-center" style="margin-top:20px;">DR. H. ST. Burhanuddin</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card" style="background: rgba(225, 227, 34, 1);border:0px;">
                    <div class="card-body">
                        <h3 style="color:green;text-align: center;">Perintah Harian Jaksa Agung</h3>
                        <ol class="text-justify" style="font-size: 18px;">
                            <li>Tingkatkan Sensitifitas Dan Intensitas Kepekaan Dalam Melaksanakan Tugas Dan
                                Tanggung Jawab Penegakan Hukum Dengan Cerdas, Lugas Dan Berintegritas.</li>
                            <li>Posisikan Diri Secara Personal, Fungsional, Dan Instansional Yang Kukuh
                                Mengenggam Serta Menjunjung Tinggi Harkat Dan Kehomatan Profesi Selaku Insan
                                Adhyaksa Agar Pantas Dipuji Dan Dihargai.</li>
                            <li>Menyadari Dan Menjaga Diri Sebagai Pendamping, Akselerator, Pengawal Dan
                                Pengaman Jalannya Pemerintahan Dan Pembangunan Yang Dapat Dipercaya Dan
                                Diandalkan.</li>
                            <li>Bekerja Dan Berkarya Tanpa Pamrih Dengan Baik Sepenuh Hati, Meniadakan
                                Perbedaan Perlakukan Dan Pelayanan Agar Memberi Manfaat, Memenuhi Harapan
                                Kuat Dari Masyarakat.</li>
                            <li>Pupuk Dan Tumbuh Kembangkan Semangat Bekerja Bersama Semua Pihak Dalam
                                Bingkai Hubungan Yang Solid Dan Sinergis, Demi Upaya Merawat Keberagaman Dan
                                Kebhinekaan, Bagi Kebesaran Bangsa Dan Keutuhan Negara Kesatuan Republik
                                Indonesia Yang Harmonis.</li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="container-fluid" style="width:92%">
    <div class="row">
        <div class="col-sm-3"><br>
            <div class="card text-center shadow">
                <div class="card-header bg-success">
                    <h4 class="text-center text-white ">Pejabat Struktural</h4>
                    <hr
                        style="border: 2px solid yellow;float: center;width: 80%;margin-bottom:unset;margin-top:unset;">
                </div>
                <div class="card-body">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="www.facebook.com"><img class="d-block w-100"
                                        src="<?php echo base_url('/asset/assets_front') ?>/img/jaksa.jpg" alt="First slide"></a>
                                <br>
                                <h5 style="font-size:14px">Kepala Kejaksaan Tinggi Bengkulu</h5>
                                <p>Namanya</p>
                                <a href="">Lihat Struktural</a>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/jaksa.jpg" alt="Second slide">
                                <br>
                                <h5 style="font-size:14px">Wakil Kepala Kejaksaan Tinggi Bengkulu</h5>
                                <p>Namanya</p>
                                <a href="">Lihat Struktural</a>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/jaksa.jpg" alt="Third slide">
                                <br>
                                <h5 style="font-size:14px">Asisten Pembinaan</h5>
                                <p>Namanya</p>
                                <a href="">Lihat Struktural</a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9"><br>
            <div class="card text-center shadow">
                <div class="card-header bg-success">
                    <h4 class="text-center text-white">Berita Kejaksaan Tinggi</h4>
                    <hr
                        style="border: 2px solid yellow;float: center;width: 30%;margin-bottom:unset;margin-top:unset;">
                </div>
                <div class="card-body">
                    <div class="beritaAwal1">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="www.facebook.com"><img class="d-block w-100"
                                            src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="First slide"></a>
                                    <br>
                                    <h5>Ini adalah Judul Berita 1</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="">See More ...</a>
                                    <br>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                        alt="Second slide">
                                    <br>
                                    <h5>Ini adalah Judul Berita 2</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="">See More ...</a>
                                    <br>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                        alt="Third slide">
                                    <br>
                                    <h5>Ini adalah Judul Berita 3</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="">See More ...</a>
                                    <br>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators3"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators3"
                                role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="beritaAwal2">
                        <div class="list-group">
                            <a href="agendaDetail.html"
                                class="list-group-item list-group-item-action flex-column align-items-start zoomBerita">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="<?php echo base_url('/asset/assets_front') ?>/img/logovisi.png" class="img-fluid"
                                            style="text-align:center" alt="Responsive image">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <h5 style="text-align: left;font-size:16px;">Upacara Peringantan
                                                Hari Pahlawan Ke-74 Tahun 2019</h5>
                                        </div>
                                        <div class="row" style="text-align: left;">
                                            <h5 style="text-align: left;font-size:12px;"><i
                                                    class="fa fa-calendar-alt"></i> Rabu, 22 Februari 2020
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="agendaDetail.html"
                                class="list-group-item list-group-item-action flex-column align-items-start zoomBerita">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" class="img-fluid"
                                            style="text-align:center" alt="Responsive image">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <h5 style="text-align: left;font-size:16px;">Kajati Bengkulu
                                                Memantau Pendaftaran CPNS Kejaksaan Republik Indonesia</h5>
                                        </div>
                                        <div class="row" style="text-align: left;">
                                            <h5 style="text-align: left;font-size:12px;"><i
                                                    class="fa fa-calendar-alt"></i> Rabu, 22 Februari 2020
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="agendaDetail.html"
                                class="list-group-item list-group-item-action flex-column align-items-start zoomBerita">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="<?php echo base_url('/asset/assets_front') ?>/img/logovisi.png" class="img-fluid"
                                            style="text-align:center" alt="Responsive image">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <h5 style="text-align: left;font-size:16px;">Monitoring dan
                                                Evaluasi terhadap Program Diklat Tahun 2017</h5>
                                        </div>
                                        <div class="row" style="text-align: left;">
                                            <h5 style="text-align: left;font-size:12px;"><i
                                                    class="fa fa-calendar-alt"></i> Rabu, 22 Februari 2020
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="agendaDetail.html"
                                class="list-group-item list-group-item-action flex-column align-items-start zoomBerita">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" class="img-fluid"
                                            style="text-align:center" alt="Responsive image">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <h5 style="text-align: left;font-size:16px;">Penyerahan Hewan
                                                Qurban dari Kementrian Desa, PDT dan Transmigrasi RI ke
                                                Kejati Bengkulu</h5>
                                        </div>
                                        <div class="row" style="text-align: left;">
                                            <h5 style="text-align: left;font-size:12px;"><i
                                                    class="fa fa-calendar-alt"></i> Rabu, 22 Februari 2020
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container col-sm-12" id="banner4">
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center text-black">Agenda</h3>
                <hr class="garisJudul">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-deck">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Rangkaian Lomba Kejaksaan Tinggi</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Upacara Peringantan Hari Pahlawan Ke-74 Tahun 2019</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Penyerahan Hewan Qurban dari Kementrian Desa, PDT dan
                                            Transmigrasi RI ke Kejati Bengkulu</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Monitoring dan Evaluasi terhadap Program Diklat Tahun 2017</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-deck">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Penyerahan Hewan Qurban dari Kementrian Desa, PDT dan
                                            Transmigrasi RI ke Kejati Bengkulu</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Monitoring dan Evaluasi terhadap Program Diklat Tahun 2017</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Rangkaian Lomba Kejaksaan Tinggi</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Upacara Peringantan Hari Pahlawan Ke-74 Tahun 2019</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-deck">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Upacara Peringantan Hari Pahlawan Ke-74 Tahun 2019</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Penyerahan Hewan Qurban dari Kementrian Desa, PDT dan
                                            Transmigrasi RI ke Kejati Bengkulu</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Monitoring dan Evaluasi terhadap Program Diklat Tahun 2017</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png"
                                            alt="Card image">
                                        <h5 class="text-justify" style="margin-top:20px;font-size:16px">
                                            Rangkaian Lomba Kejaksaan Tinggi</h5>
                                        <a href="agendaDetail.html">Lihat Agenda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<br>

<div class="container col-sm-12" id="zonaintegritas">
    <center>
        <a href="zonaintegritas.html">
            <img src="<?php echo base_url('/asset/assets_front') ?>/img/zonaintegritas3.png" style="width:80%;">
        </a>
    </center>
</div>

<div class="container-fluid" style="width:82%">
    <div class="row">
        <div class="col-sm-5"><br>
            <div class="card text-center shadow">
                <div class="card-header bg-success">
                    <h4 class="text-center text-white ">Video</h4>
                    <hr
                        style="border: 2px solid yellow;float: center;width: 20%;margin-bottom:unset;margin-top:unset;">
                </div>
                <div class="card-body">
                    <iframe style="width:100%;height:345px"
                        src="https://www.youtube.com/embed/videoseries?list=PLBPVBwFbSAKdz-tgvo1VTqrMyCe5SBCb5"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-sm-7"><br>
            <div class="card text-center shadow">
                <div class="card-header bg-success">
                    <h4 class="text-center text-white">Foto</h4>
                    <hr
                        style="border: 2px solid yellow;float: center;width: 20%;margin-bottom:unset;margin-top:unset;">
                </div>
                <div class="card-body">
                    <div class="card-columns">
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/berita.jpeg" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/berita.jpeg" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/berita.jpeg" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>