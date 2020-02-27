<nav class="navbar fixed-top navbar-expand-md navbar-light" id="myNav">
    <a class="navbar-brand" href="#">
        <img style="width:250px;" src="#" alt="" id="myLogo">
    </a>
    <button class="navbar-toggler" style="margin-bottom:5px;margin-top:5px" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="#body">Menu</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menuNav text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('frontend/visimisi');?>">Visi & Misi</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('frontend/struktural');?>">Struktural</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('frontend/sarana');?>">Sarana</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="<?php echo base_url('frontend/peraturan');?>">Peraturan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="<?php echo base_url('frontend/kejari');?>">Kejari</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menuNav text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informasi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('frontend/agenda');?>">Agenda</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('frontend/informasi/index/renja');?>">Rencana Kerja</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('frontend/informasi/index/pembinaan');?>">Pembinaan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('frontend/informasi/index/intelijen');?>">Intelijen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('frontend/informasi/index/pidum');?>">Pidana Umum</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('frontend/informasi/index/pidsus');?>">Pidana Khusus</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('frontend/informasi/index/ptun');?>">Perdata dan Tata Usaha Negara</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('frontend/informasi/index/pengawasan');?>">Pengawasan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('frontend/informasi/index/pengadaan');?>">Pengadaan</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="<?php echo base_url('frontend/berita');?>">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="<?php echo base_url('frontend/galeri');?>">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="<?php echo base_url('frontend/zonaint');?>">Zona Integritas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="<?php echo base_url('frontend/survey');?>">Survey</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="<?php echo base_url('frontend/pengaduan');?>">Pengaduan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNav text-white" href="<?php echo base_url('frontend/kontak');?>">Kontak</a>
            </li>
        </ul>
    </div>
</nav>