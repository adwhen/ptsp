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

        <!-- WEBCAM -->
        <div hidden="" class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            
        </div>
        <!-- WEBCAM -->
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
            <br>
           
            <div class="accordion" id="accordionExample">
            
                <table style="border-top: 1px solid;border-bottom: 1px solid;width: 100%;" >
                    <thead>
                        <th style="width:50%;text-align:center">Pertanyaan</th>
                        <th style="width:10%;text-align:center">Sangat Memuaskan</th>
                        <th style="width:10%;text-align:center">Memuaskan</th>
                        <th style="width:10%;text-align:center">Biasa</th>
                        <th style="width:10%;text-align:center">Kurang Memuaskan</th>
                        <th style="width:10%;text-align:center">Sangat Kurang Memuaskan</th>
                    </thead>
                    <tbody>
                    <?php $no=0; foreach($soal as $key){ ?>
                        <tr>
                            <td><?php echo $key['pertanyaan'] ?><input type="hidden" name="soal[<?php echo $no; ?>]" value="<?php echo $key['id'] ?>"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="5"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="4"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="3"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="2"></td>
                            <td style="width:10%;text-align:center"><input required type="radio" name="pil[<?php echo $no; ?>]" value="1"></td>
                        </tr>
                    <?php $no++; } ?>
                    </tbody>
                </table>
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