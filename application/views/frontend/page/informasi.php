<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark"><?php echo ucwords($jenis) ?></h3>
    <hr class="garisJudul">
</div>
<br>
<div class="container-fluid" style="text-align:center;width:70%">
    <?php foreach($data as $dt){?>
    <i class="fa fa-file-pdf" style="font-size:20px">&nbsp;<a href="<?php echo $dt['url_file'];?>" target="_blank"><?php echo ucwords($dt['nama_file']);?></a></i>
    <?php }?>
</div>
<br>
<br>