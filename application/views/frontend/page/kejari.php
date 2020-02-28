<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark">KEJAKSAAN NEGERI</h3>
    <hr class="garisJudul">
</div>
<br>
<div class="container-fluid" style="text-align:left;width:70%">
    <div class="row">
        <div class="col-sm col-lg-6">
            <div class="accordion" id="accordionExample">
                <br>
                <?php for($i=0;$i<count($data)/2;$i++){?>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#<?php echo 'per'.$i?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $data[$i]['nama_kejari'] ?>
                            </button>
                        </h5>
                    </div>

                    <div id="<?php echo 'per'.$i?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Kepala Kejaksaan Negeri : <?php echo $data[$i]['ketua_kejari'] ?>
                            <br>
                            Alamat : <?php echo $data[$i]['alamat_kejari'] ?>
                            <br>
                            Website : <a href="<?php echo $data[$i]['url_kejari'] ?>" target="_blank"><?php echo $data[$i]['url_kejari'] ?></a>
                        </div>
                    </div>
                </div>
                <br>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm col-lg-6">
            <div class="accordion" id="accordionExample2">
                <br>
                <?php for($i=(count($data)/2)+1;$i<count($data);$i++){?>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#<?php echo 'per'.floor($i)?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $data[$i]['nama_kejari'] ?>
                            </button>
                        </h5>
                    </div>

                    <div id="<?php echo 'per'.floor($i)?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
                        <div class="card-body">
                            Kepala Kejaksaan Negeri : <?php echo $data[$i]['ketua_kejari'] ?>
                            <br>
                            Alamat : <?php echo $data[$i]['alamat_kejari'] ?>
                            <br>
                            Website : <a href="<?php echo $data[$i]['url_kejari'] ?>" target="_blank"><?php echo $data[$i]['url_kejari'] ?></a>
                        </div>
                    </div>
                </div>
                <br>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>