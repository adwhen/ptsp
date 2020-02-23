<div class="container-fluid" style="text-align:center;width:95%">
    <h3 class="text-center text-dark">BERITA</h3>
    <hr class="garisJudul">
    <br>
    <div class="card-columns">
        <?php foreach($data as $dt){?>
        <div class="card h-100">
            <img class="card-img-top" src="<?php echo base_url('/asset/assets_front') ?>/img/kajatigedung.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dt['judul_berita'];?></h5>
                <?php echo $dt['isi_berita'];?><br><br>
                <a href="<?php echo base_url('frontend/berita/beritaDetail/').$dt['id_berita'];?>">See More&nbsp;&nbsp;<i style="color:#000;" class="fa fa-arrow-right"></i> </a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <?php }?>
    </div>
</div>