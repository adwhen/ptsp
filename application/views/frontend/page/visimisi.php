<div class="container" style="width:95%;">
    <div class="row">
        <div class="col">
            <h3 class="text-center text-dark">VISI & MISI KEJATI BENGKULU</h3>
            <hr class="garisJudul">
        </div>
    </div>
</div>

<br>

<div class="container" style="width:100%;">
        <div class="logoVisi">
            <img src="<?php echo base_url('/asset/assets_front') ?>/img/logovisi.png" class="img-fluid" style="text-align:center" alt="Responsive image">
        </div>
        <div class="tulisanVisi">
            <h3 style="color:green;text-align: center;">Visi</h3>
            <p class="text-justify" style="font-size: 21px;"><?php echo $visi[0]['isi_visimisi'];?></p>
        </div>
</div>

<br><br>

<div class="container" style="width:100%;">
    <br>
    <div class="col">
        <h3 style="color:green;text-align: center;">Misi</h3>
        <ul class="text-justify" style="list-style-type: square;font-size: 21px;">
            <?php foreach($misi as $dt){?>
            <li><?php echo $dt['isi_visimisi'];?></li>
            <?php }?>
        </ul>
    </div>
</div>
<br>
<br>
<br>
<br>