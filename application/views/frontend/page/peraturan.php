<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark">PERATURAN</h3>
    <hr class="garisJudul">
</div>
<br>
<div class="container-fluid" style="text-align:left;width:70%">
    <div class="row">
        <div class="col">
            <div class="accordion" id="accordionExample">
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per1" aria-expanded="true" aria-controls="collapseOne">
                                Undang-undang
                            </button>
                        </h5>
                    </div>

                    <div id="per1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <table>
                            <tbody>
                                <?php foreach($uu as $uu){?>
                                <tr>
                                    <td><?php echo $uu['nama_peraturan'] ?></td>
                                    <td><?php echo $uu['judul_peraturan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per2" aria-expanded="true" aria-controls="collapseOne">
                                Peraturan Pemerintah
                            </button>
                        </h5>
                    </div>

                    <div id="per2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <table>
                            <tbody>
                                <?php foreach($pp as $pp){?>
                                <tr>
                                    <td><?php echo $pp['nama_peraturan'] ?></td>
                                    <td><?php echo $pp['judul_peraturan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per3" aria-expanded="true" aria-controls="collapseOne">
                                Keputuran Presiden
                            </button>
                        </h5>
                    </div>

                    <div id="per3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <table>
                            <tbody>
                                <?php foreach($kepres as $kepres){?>
                                <tr>
                                    <td><?php echo $kepres['nama_peraturan'] ?></td>
                                    <td><?php echo $kepres['judul_peraturan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per4" aria-expanded="true" aria-controls="collapseOne">
                                Instruksi Presiden
                            </button>
                        </h5>
                    </div>

                    <div id="per4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <table>
                            <tbody>
                                <?php foreach($inpres as $inpres){?>
                                <tr>
                                    <td><?php echo $inpres['nama_peraturan'] ?></td>
                                    <td><?php echo $inpres['judul_peraturan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="accordion" id="accordionExample2">
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per5" aria-expanded="true" aria-controls="collapseOne">
                                Keputusan Menteri Pemberdayaan Aparatur Negara
                            </button>
                        </h5>
                    </div>

                    <div id="per5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
                        <div class="card-body">
                        <table>
                            <tbody>
                                <?php foreach($kepmpan as $kepmpan){?>
                                <tr>
                                    <td><?php echo $kepmpan['nama_peraturan'] ?></td>
                                    <td><?php echo $kepmpan['judul_peraturan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per6" aria-expanded="true" aria-controls="collapseOne">
                                Keputusan Jaksa Agung
                            </button>
                        </h5>
                    </div>

                    <div id="per6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
                        <div class="card-body">
                        <table>
                            <tbody>
                                <?php foreach($kepja as $kepja){?>
                                <tr>
                                    <td><?php echo $kepja['nama_peraturan'] ?></td>
                                    <td><?php echo $kepja['judul_peraturan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per7" aria-expanded="true" aria-controls="collapseOne">
                                Instruksi Jaksa Agung
                            </button>
                        </h5>
                    </div>

                    <div id="per7" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
                        <div class="card-body">
                        <table>
                            <tbody>
                                <?php foreach($insja as $insja){?>
                                <tr>
                                    <td><?php echo $insja['nama_peraturan'] ?></td>
                                    <td><?php echo $insja['judul_peraturan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per8" aria-expanded="true" aria-controls="collapseOne">
                                Peraturan Lainnya
                            </button>
                        </h5>
                    </div>

                    <div id="per8" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
                        <div class="card-body">
                        <table>
                            <tbody>
                                <?php foreach($lain as $lain){?>
                                <tr>
                                    <td><?php echo $lain['nama_peraturan'] ?></td>
                                    <td><?php echo $lain['judul_peraturan'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
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