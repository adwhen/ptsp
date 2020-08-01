<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark">GALERI</h3>
    <hr class="garisJudul">
    <br>
    <div class="row">
        <?php foreach($data as $dt){?>
            <div class="col-sm col-lg-4">
                <div class="card galeriImgDiv h-100">
                    <img class="card-img-top galeriImg" src="<?php echo url_serv($dt['url_file']);?>" alt="Card image cap">
                    <div class="galeriImgBut">
                        <div class="galeriImgTxt"><button onclick="getSrc('<?php echo url_serv($dt['url_file']);?>')" class="btn text-white" data-tooltip='Button 2'><i style="font-size:20px;margin-bottom:5px;" class="fa fa-search"></i></button></div>
                    </div>
                </div>
            </div>
        <?php }?>
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

<!-- The Modal -->
<div id="modalGaleri" class="modalFoto">
    <span class="closeFoto"><button class="btn text-white" id="myImgGaleri"><i
                style="font-size:30px;margin-bottom:5px;" class="fa fa-times"></i></button></span>
    <img class="modal-content-foto" id="imgModal">
</div>

<script>
    var modal = document.getElementById("modalGaleri");
    var modalImg = document.getElementById("imgModal");

    function getSrc(src) {
        modal.style.display = "block";
        modalImg.src = src;
    };

    var span = document.getElementsByClassName("closeFoto")[0];
    span.onclick = function () {
        modal.style.display = "none";
    };
</script>