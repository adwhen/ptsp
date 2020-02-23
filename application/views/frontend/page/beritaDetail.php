<div class="container-fluid" style="width:95%">
    <br>
    <h4><?php echo $data[0]['judul_berita'];?></h4>
    <hr style="border: 2px solid green;float: left;width: 100%;">
    <br>
    <p class="card-text text-right"><i class="fa fa-calendar-alt"></i> <?php echo tgl_indo($data[0]['tgl_update']);?></p>
    <br>
</div>
<div class="container-fluid" style="text-align:center;width:95%">
    <img src="<?php echo base_url('/asset/assets_front') ?>/img/berita.jpeg" class="img-fluid" style="text-align:center" alt="Responsive image">
</div>
<br>
<div class="container-fluid text-justify" style="text-align:center;width:80%">
    <?php echo $data[0]['isi_berita'];?>
</div>
<br>
<div class="container-fluid" style="width:80%">
    <h5 style="font-size: 25px;">Berita Terkait</h5>
    <br>
    <div class="card-deck">
        <?php foreach($terkait as $trk){?>
        <div class="card">
            <img class="card-img-top" src="<?php echo base_url('/asset/assets_front') ?>/img/berita.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-justify"><?php echo $trk['judul_berita'];?></h5>
                <?php echo $trk['isi_berita'];?>
            </div>
            <div class="card-footer">
                <small class="text-muted"><?php echo tgl_indo($trk['tgl_update']);?></small>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<br>