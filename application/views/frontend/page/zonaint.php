<div class="container col-sm-12" id="zonaintegritas">
    <center>
        <a href="zonaintegritas.html">
            <img src="<?php echo base_url('/asset/assets_front') ?>/img/zonaintegritas3.png" style="width:80%;">
        </a>
    </center>
</div>
<br>
<br>
<div class="container-fluid shadow-lg" style="text-align:center;width:82%;">
    <br>
    <div class="card-columns">
        <?php foreach($data as $dt){?>
        <div class="card">
            <img class="card-img-top" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dt['judul_berita'];?></h5>
                <p class="card-text"><?php echo $dt['isi_berita'];?><br><br>
                <a href="<?php echo base_url('frontend/berita/beritaDetail/').$dt['id_berita'];?>">See More&nbsp;&nbsp;<i style="color:#000;" class="fa fa-arrow-right"></i> </a></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<br>
<br>
<br>
<br>