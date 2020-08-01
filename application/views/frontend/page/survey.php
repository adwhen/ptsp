<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>-->

<style type="text/css">
    tr {
        border-top: 1px solid;border-bottom: 1px solid;width: 100%;
    }
</style>
 <?php  echo form_open_multipart('frontend/survey/index/go',array('class'=>"form-horizontal",'method'=>'POST','id'=>'surveyForm')); ?>
<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark">Survey</h3>
    <hr class="garisJudul">
</div>
<br>
<div class="container-fluid" style="text-align:left;width:70%">
    <a href="<?php echo base_url('frontend/survey') ?>" class="btn btn-success">Survey</a>
    <a href="<?php echo base_url('frontend/survey/hasil') ?>" class="btn btn-danger">Hasil Survey</a>
    <div class="row">
        <div class="col">
            <div class="accordion" id="accordionExample">
                <br>
                <label class="label-control">Nama</label>
                <input required class="form-control" type="text" name="nama_survey">
            </div>
        </div>
        <div class="col">
            <div class="accordion" id="accordionExample">
                <br>
                <label class="label-control">NIK</label>
                <input required class="form-control" type="number" name="nik_survey">
            </div>
        </div>
        <div class="col">
            <div class="accordion" id="accordionExample">
                <br>
                <label class="label-control">Pekerjaan</label>
                <input required class="form-control" type="text" name="pekerjaan_survey">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="accordion" id="accordionExample">
                <br>
                <label class="label-control">Jenis Kelamin</label>
                <select required class="form-control" type="text" name="jk_survey">
                    <option value="">Pilih</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="accordion" id="accordionExample">
                <br>
                <label class="label-control">Pendidikan</label>
                <select required class="form-control" type="text" name="pendidikan_survey">
                    <option value="">Pilih</option>
                    <option>Tidak Sekolah</option>
                    <option>SD/MA</option>
                    <option>SMP/MTS</option>
                    <option>SMA/SMK</option>
                    <option>D1</option>
                    <option>D2</option>
                    <option>D3</option>
                    <option>S1/D4</option>
                    <option>S2</option>
                    <option>S3</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="accordion" id="accordionExample">
                <br>
                <label class="label-control">Usia</label>
                <select required class="form-control" type="text" name="usia_survey">
                    <option value="">Pilih</option>
                    <option><30</option>
                    <option>30-50</option>
                    <option>>50</option>
                </select>
            </div>
        </div>
    </div>
   
     <div class="row">
        <div class="col">
            <br>
           
            <div class="accordion" id="accordionExample">
            
                <table style="border-top: 1px solid;border-bottom: 1px solid;width: 100%;" >
                    <thead>
                        <th style="width:50%;text-align:center">Pertanyaan</th>
                        <th style="width:10%;text-align:center">Sangat Puas</th>
                        <th style="width:10%;text-align:center">Puas</th>
                        <th style="width:10%;text-align:center">Biasa</th>
                        <th style="width:10%;text-align:center">Kurang Puas</th>
                    </thead>
                    <tbody>
                    <?php $no=0; foreach($soal as $key){ ?>
                        <tr>
                            <td><?php echo $key['pertanyaan'] ?><input type="hidden" name="soal[<?php echo $no; ?>]" value="<?php echo $key['id'] ?>"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="4" style="width: 17px; height: 17px;"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="3" style="width: 17px; height: 17px;"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="2" style="width: 17px; height: 17px;"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="1" style="width: 17px; height: 17px;"></td>
                        </tr>
                    <?php $no++; } ?>
                    </tbody>
                </table>

                <div class="row">
                        <div class="col">
                            <div class="accordion" id="accordionExample">
                                <br>

                                <label class="label-control">Jika anda mempunyai saran dapat mengetikan di kolom di bawah ini<br>Saran</label>
                                <textarea class="form-control" name="saran_survey"></textarea>
                            </div>
                        </div>
                </div>
                <br>
                <label class="label-control">Maukah anda memberikan informasi tentang anda dimana kami akan menyimpan data anda dengan baik, dan jika ada program kami dapat mengambari anda</label>

                 <div class="row">
                        <div class="col">
                            <div class="accordion" id="accordionExample">
                                <label class="label-control">Email</label>
                                <input class="form-control" type="email" name="email_survey">
                            </div>
                        </div>
                        <div class="col">
                            <div class="accordion" id="accordionExample">
                                <label class="label-control">HP/Whatsapp</label>
                                <input class="form-control" type="text" name="no_survey">
                            </div>
                        </div>
                    </div>
                <center>

                    <br>
                    <button  onClick="take_snapshot()" type="submit" class="btn btn-primary btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan" id="tmbl" name="tombol" value="TRUE">Simpan</button></center>
                
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
</form>

<script language="JavaScript">
    // Webcam.set({
    //     width: 490,
    //     height: 390,
    //     image_format: 'jpeg',
    //     jpeg_quality: 90
    // });
  
    // Webcam.attach( '#my_camera' );
  
    // function take_snapshot() {
    //     Webcam.snap( function(data_uri) {
    //         $(".image-tag").val(data_uri);
    //         // document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
    //     } );
    //     $('#tmbl').submit();
    // }
</script>