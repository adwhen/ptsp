<div class="container-fluid" style="width:95%">
    <br>
    <h4><?php echo $data[0]['judul_berita'];?></h4>
    <hr style="border: 2px solid green;float: left;width: 100%;">
    <br>
    <p class="card-text text-right"><i class="fa fa-calendar-alt"></i> <?php echo tgl_indo($data[0]['tgl_update']);?></p>
    <br>
</div>
<div class="container-fluid" style="text-align:center;width:95%">
    <img src="<?php echo $data[0]['cover_berita']?>" class="img-fluid" style="text-align:center" alt="Responsive image">
</div>
<br>
<div class="container-fluid text-justify" style="text-align:center;width:80%">
    <?php echo $data[0]['isi_berita'];?>
</div>
<br>
<?php if(!empty($data[0]['video_url'])){?>
<div class="container-fluid" style="width:60%">
    <center>
    <iframe style="width:100%;height:400px" src="<?php echo $data[0]['video_url'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </center>
</div>
<?php } ?>
<br>
<div class="container-fluid" style="width:80%">
    <center>
    <h5 style="font-size: 25px;">Berita Terkait</h5>
    <br>
    <table class="table" style="width:60%;">
        <tbody>
            <tr>
                <?php foreach($terkait as $trk){
                if($trk['id_berita']!=$data[0]['id_berita']){?>
                <td>
                    <div class="card" style="width: 15rem;height: 350px;">
                        <img class="card-img-top img-fluid" src="<?php echo $trk['cover_berita']?>" style="max-height: 180px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-justify"><?php echo $trk['judul_berita'];?></h5><br>
                            <a href="<?php echo base_url('frontend/berita/beritaDetail/').$trk['id_berita'];?>">Lihat Berita</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo tgl_indo($trk['tgl_update']);?></small>
                        </div>
                    </div>
                </td>
                <?php }}?>
            </tr>
        </tbody>
    </table>
    </center>
</div>
<br>