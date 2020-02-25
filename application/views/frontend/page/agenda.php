<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark">AGENDA</h3>
    <hr class="garisJudul">
</div>
<br>
<div class="container-fluid" style="text-align:center;width:70%">
    <div class="list-group">
        <?php foreach($data as $dt){?>
        <a href="<?php echo base_url('frontend/agenda/agendaDetail/').$dt['id_berita'];?>" class="list-group-item list-group-item-action flex-column align-items-start zoomBerita">
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo $dt['cover_berita']?>" class="img-fluid" style="width:100%;" alt="Responsive image">
                </div>
                <div class="col-8">
                    <div class="row">
                        <h5 style="text-align: left;font-size:16px;"><?php echo $dt['judul_berita']?></h5>
                    </div>
                    <div class="row text-justify">
                        <?php echo substr($dt['isi_berita'],0,150).' [. . .]';?>
                    </div>
                    <div class="row" style="text-align: left;">
                        <h5 style="text-align: left;font-size:12px;"><i class="fa fa-calendar-alt"></i> <?php echo tgl_indo($dt['tgl_update'])?></h5>
                    </div>
                </div>
            </div>
        </a>
        <br>
        <?php } ?>
    </div>
</div>
<br>
<div class="container-fluid" style="text-align:center;width:70%">
    <div class="row justify-content-center">
        <div class="col-2">
            <?php 
                echo $this->pagination->create_links();
            ?>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>