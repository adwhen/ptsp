<style type="text/css">
    tr {
        border-top: 1px solid;border-bottom: 1px solid;width: 100%;
    }
</style>
 <?php  echo form_open_multipart('frontend/survey/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
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
                <input class="form-control" type="text" name="nama_survey">
            </div>
        </div>
        <div class="col">
            <div class="accordion" id="accordionExample">
                <br>
                <label class="label-control">Pekerjaan</label>
                <input class="form-control" type="text" name="pekerjaan_survey">
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col">
            <br>
           
            <div class="accordion" id="accordionExample">
            
                <table style="border-top: 1px solid;border-bottom: 1px solid;width: 100%;" >
                    <thead>
                        <th>Pertanyaan</th>
                        <th>Sangat Memuaskan</th>
                        <th>Memuaskan</th>
                        <th>Biasa</th>
                        <th>Kurang Memuaskan</th>
                        <th>Sangat Kurang Memuaskan</th>
                    </thead>
                    <tbody>
                    <?php $no=0; foreach($soal as $key){ ?>
                        <tr>
                            <td><?php echo $key['pertanyaan'] ?><input type="hidden" name="soal[<?php echo $no; ?>]" value="<?php echo $key['id'] ?>"></td>
                            <td><input type="radio" name="pil[<?php echo $no; ?>]" value="5"></td>
                            <td><input type="radio" name="pil[<?php echo $no; ?>]" value="4"></td>
                            <td><input type="radio" name="pil[<?php echo $no; ?>]" value="3"></td>
                            <td><input type="radio" name="pil[<?php echo $no; ?>]" value="2"></td>
                            <td><input type="radio" name="pil[<?php echo $no; ?>]" value="1"></td>
                        </tr>
                    <?php $no++; } ?>
                    </tbody>
                </table>
                <center>
                    <br>
                    <button type="submit" onclick="return confirm('Lihat Kembali sebelum melakukan penyimpanan');" class="btn btn-primary btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan" name="tombol" value="TRUE">Simpan</button></center>
                
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