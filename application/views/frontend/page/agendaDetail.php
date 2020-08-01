<div class="container-fluid" style="float:center;width:75%">
    <br>
    <h4><?php echo $data[0]['judul_berita'];?></h4>
    <hr style="border: 2px solid green;float: left;width: 100%;">
    <br>
    <p class="card-text text-right"><i class="fa fa-calendar-alt"></i> <?php echo tgl_indo($data[0]['tgl_update']);?></p>
    <br>
</div>
<div class="container-fluid" style="text-align:center;width:75%">
    <img src="<?php echo $data[0]['cover_berita']?>" class="img-fluid lazyload" style="text-align:center" alt="Responsive image">
</div>
<br>
<div class="container-fluid" style="text-align:justify;width:75%">
    <?php echo $data[0]['isi_berita'];?>
</div>
<br>
<div class="container-fluid" style="width:75%">
    <center>
    <h5 style="font-size: 25px;">Agenda Terkait</h5>
    <br>
    <div class="table-responsive">
        <table class="table" style="width:60%;">
            <tbody>
                <tr>
                    <?php foreach($terkait as $trk){
                    if($trk['id_berita']!=$data[0]['id_berita']){?>
                    <td>
                    <div class="card" style="width: 15rem;height: 350px;">
                        <div id="beritaFoto" style="background-image:url(<?php echo $trk['cover_berita'];?>);height: 200px;"></div>
                        <div class="card-body">
                            <h5 class="card-title text-justify"><?php echo $trk['judul_berita'];?></h5>
                        </div>
                        <br>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo tgl_indo($trk['tgl_update']);?></small><a style="float: right;" href="<?php echo base_url('frontend/berita/beritaDetail/').$trk['id_berita'];?>">Lihat Berita</a>
                        </div>
                    </div>
                </td>
                    <?php }}?>
                </tr>
            </tbody>
        </table>
    </div>
    </center>
</div>
<br>