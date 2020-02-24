<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark">SARANA</h3>
    <hr class="garisJudul">
    <br>
    <div class="card-columns">
        <?php foreach($data as $dt){?>
        <div class="card saranaImgDiv">
            <img class="card-img-top saranaImg" src="<?php echo $dt['url_file'];?>" alt="Card image cap">
            <div class="saranaImgBut">
                <div class="saranaImgTxt"><button type="button" onclick="getSrc('<?php echo $dt['url_file'];?>','Nama Sarana 1','Keterangan 1')" class="btn text-white" data-toggle="modal" data-target="#modalSarana">Lihat Detail</button></div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<br>
<br>
<br>
<br>

<!-- Modal -->
<div class="modal fade" id="modalSarana" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col">
                    <img id="imgModal" style="margin: auto;display: block;width: 100%;">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-10">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama Sarana</td>
                                <td>:</td>
                                <td id="namaSarana"></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>:</td>
                                <td id="ketSarana"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-1">
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    var modal = document.getElementById("modalSarana");
    var modalImg = document.getElementById("imgModal");

    function getSrc(src,nama,ket) {
        modalImg.src = src;
        $("#modalTitle").text(nama);
        $("#namaSarana").text(nama);
        $("#ketSarana").text(ket);
    }

    var span = document.getElementsByClassName("closeFoto")[0];
    span.onclick = function() { 
      modal.style.display = "none";
    }
</script>