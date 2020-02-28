<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark"><?php echo ucwords($jenis) ?></h3>
    <hr class="garisJudul">
</div>
<br>
<div class="container-fluid" style="text-align:center;width:70%">
    <?php if(!empty($data1)){?>
        <?php $x=0;$y=0; foreach($data1 as $dt){?>
        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample<?php echo $x ?>">
                    <br>
                    <div class="card">
                        <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#judul<?php echo $x ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $dt['judul_informasi']; ?>
                                </button>
                            </h5>
                        </div>

                        <div id="judul<?php echo $x ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo $x ?>">
                            <div class="card-body">
                            <?php foreach($data1[$x]['subJudul'] as $sub){?>
                            <div class="accordion" id="accordionsub<?php echo $y?>">
                                <h5 class="mb-0">
                                    <a class="text-left" style="width:100%;" type="button" data-toggle="collapse" data-target="#sub<?php echo $y ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $sub['sub_informasi']; ?>
                                    </a>
                                </h5>
                                <div id="sub<?php echo $y ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionsub<?php echo $y ?>">
                                <br>
                                <?php if($tipe=='pdf'){?>
                                <?php foreach($data1[$x][$y]['file'] as $file){ ?>
                                    <a class="text-left" href="<?php echo $file['url_file'] ?>"><?php echo $file['nama_file'].'<br>';?></a>
                                <?php }
                                }else{?>
                                    <div class="card-columns">
                                    <?php foreach($data1[$x][$y]['file'] as $file){?>
                                    <div class="card galeriImgDiv">
                                        <img class="card-img-top galeriImg" src="<?php echo $file['url_file'] ?>" alt="Card image cap">
                                        <div class="galeriImgBut">
                                            <div class="galeriImgTxt"><button onclick="getSrc('<?php echo $file['url_file'] ?>')" class="btn text-white" data-tooltip='Button 2'><i style="font-size:20px;margin-bottom:5px;" class="fa fa-search"></i></button></div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <?php $y++;}?>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                
            </div>
        </div>
        <?php $x++;}?>
    <?php }else{?>
        <?php $x=0;$y=0; foreach($data2 as $dt){?>
        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample<?php echo $x ?>">
                    <br>
                    <div class="card">
                        <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#periode<?php echo $x ?>" aria-expanded="true" aria-controls="collapseOne">
                                   Tahun <?php echo $dt['periode']; ?>
                                </button>
                            </h5>
                        </div>
                        <div id="periode<?php echo $x ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo $x ?>">
                            <div class="card-body">
                                <h5 class="mb-0">
                                    <div class="row">
                                        <?php foreach($data2[$x]['nama_file'] as $nm){?>
                                        <div class="col-sm col-lg-4 galeriImgDiv">
                                            <img class="card-img-top galeriImg" src="<?php echo $nm['url_file'] ?>" alt="Card image cap">
                                            <div class="galeriImgBut">
                                                <div class="galeriImgTxt"><button onclick="getSrc('<?php echo $nm['url_file'] ?>')" class="btn text-white" data-tooltip='Button 2'><i style="font-size:20px;margin-bottom:5px;" class="fa fa-search"></i></button></div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                
            </div>
        </div>
        <?php $x++;}?>
    <?php } ?>
</div>
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