<?php 
$this->load->view('admin/snippet/header');
$this->load->view('admin/snippet/sidebar');?>
<div id="tabel_kejari"  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <ol class="breadcrumb" style="font-size: 15px">
            <a href="<?php echo base_url('admin/berkas/'.$this->uri->segment(3));?>" style="font-size: 25px;" data-balloon="Kembali" data-balloon-pos="up" title="Kembali"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="<?php echo base_url('admin/beranda');?>">Admin</a></li>
            <li class="active"> Kejaksaan Tinggi Negeri</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col" style="text-align: right;">   
          <button onclick="form_kejari('1')" type="button" class="btn btn-default" data-toggle="modal">
                Tambah Data
          </button>
        </div>
        <p class="loading"></p>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <br>
      <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>KEJAKSAAN TINGGI NEGERI</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="table6" class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>nama File</th>
              <th>Alamat</th>
              <th>Pimpinan</th>
              <th>Aksi</th>
            </thead>
            <tbody id="showdata">
            <?php $x=1; $no=0; foreach($data as $dt){?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $dt['nama_kejari'];?></td>
                <td><?php echo $dt['alamat_kejari'];?></td>
                <td><?php echo $dt['ketua_kejari'];?></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      
                        <button onclick="form_kejari('3','<?php echo $this->encryption->encrypt($dt['id_kejari']);?>','<?php echo $dt['nama_kejari'];?>','<?php echo $dt['alamat_kejari'];?>','<?php echo $dt['ketua_kejari'];?>','<?php echo $dt['url_kejari']; ?>')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>

 
                        <button onclick="form_kejari('4','<?php echo $this->encryption->encrypt($dt['id_kejari']);?>','<?php echo $dt['nama_kejari'];?>','<?php echo $dt['alamat_kejari'];?>','<?php echo $dt['ketua_kejari'];?>','<?php echo $dt['url_kejari']; ?>')"  class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>

                    </div>
                  </center>
                </td>
              </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<!-- Form tambah  -->
<div style="display: none;" id="form_tambah_kejari"  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/kejari/tambah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'tambahKejari')); ?>
              <div class="modal-body form">
                 <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
                  <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>Tambah</strong></center></h3>    
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Kejari</label>
                    <div class="col-md-9">
                      <input name="nama_kejari" id="nama_kejari" value="" required placeholder="Kejaksaan Tinggi Negeri Kota" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Alamat</label>
                  <div class="col-md-9">
                    <textarea name="alamat_kejari" id="alamat_kejari" class="form-control" placeholder="Enter ..." rows="3"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Pimpinan Kejari</label>
                    <div class="col-md-9">
                      <input name="ketua_kejari" id="ketua_kejari" value="" required placeholder="Judul Berita" class="form-control" type="text">
                    </div>
                </div> 
                <div class="form-group">
                  <label class="control-label col-md-2">WEBSITE KEJARI</label>
                    <div class="col-md-9">
                      <input name="url_kejari" id="url_kejari" value="" required placeholder="Judul Berita" class="form-control" type="text">
                    </div>
                </div> 
                     
                <div class="modal-footer">
                  <center>
                    <a  class="btn btn-success btn-lg" onclick="form_kejari('2')" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-lg"  title="Simpan">Simpan</button>
                  </center>
                </div>
                
            
          </div>
          </form>
          <!-- /.row -->
        </section>
    </div>

    <!-- /.content -->
</div>
<div style="display: none;" id="form_ubah_kejari"  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/kejari/ubah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'editKejari')); ?>
              <div class="modal-body form">
                <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center; margin-bottom: 10px;">
                  <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>Ubah</strong></center></h3>    
                </div>
                <input type="hidden" name="id_kejari" id="id_kejari1">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Kejari</label>
                    <div class="col-md-9">
                      <input name="nama_kejari" id="nama_kejari1" value="" required placeholder="Kejaksaan Tinggi Negeri Kota" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Alamat</label>
                  <div class="col-md-9">
                    <textarea name="alamat_kejari" id="alamat_kejari1" class="form-control" placeholder="Enter ..." rows="3"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Pimpinan Kejari</label>
                    <div class="col-md-9">
                      <input name="ketua_kejari" id="ketua_kejari1" value="" required placeholder="Judul Berita" class="form-control" type="text">
                    </div>
                </div> 
                <div class="form-group">
                  <label class="control-label col-md-2">WEBSITE KEJARI</label>
                    <div class="col-md-9">
                      <input name="url_kejari" id="url_kejari1" value="" required placeholder="Judul Berita" class="form-control" type="text">
                    </div>
                </div> 
                     
                <div class="modal-footer">
                  <center>
                    <a  class="btn btn-success btn-lg" onclick="form_kejari('2')" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Kembali</a>
                    <button id="button_ubah_kejari" class="btn btn-primary btn-lg"  title="Simpan">Simpan</button>
                  </center>
                </div>
                
            
          </div>
          </form>
          <!-- /.row -->
        </section>
    </div>

    <!-- /.content -->
</div>

<div style="display: none;" id="form_hapus_kejari"  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/kejari/hapus/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'hapusKejari')); ?>
              <div class="modal-body form">
                <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center; margin-bottom: 10px;">
                  <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>Hapus</strong></center></h3>    
                </div>
                <input type="hidden" name="id_kejari" id="id_kejari2">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Kejari</label>
                    <div class="col-md-9">
                      <input readonly="" name="nama_kejari" id="nama_kejari2" value="" required placeholder="Kejaksaan Tinggi Negeri Kota" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Alamat</label>
                  <div class="col-md-9">
                    <textarea readonly="" name="alamat_kejari" id="alamat_kejari2" class="form-control" placeholder="Enter ..." rows="3"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Pimpinan Kejari</label>
                    <div class="col-md-9">
                      <input readonly="" name="ketua_kejari" id="ketua_kejari2" value="" required placeholder="Judul Berita" class="form-control" type="text">
                    </div>
                </div> 
                <div class="form-group">
                  <label class="control-label col-md-2">WEBSITE KEJARI</label>
                    <div class="col-md-9">
                      <input readonly="" name="url_kejari" id="url_kejari2" value="" required placeholder="Judul Berita" class="form-control" type="text">
                    </div>
                </div> 
                     
                <div class="modal-footer">
                  <center>
                    <a  class="btn btn-success btn-lg" onclick="form_kejari('2')" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Kembali</a>
                    <button id="button_hapus_kejari" class="btn btn-primary btn-lg"  title="Simpan">Simpan</button>
                  </center>
                </div>
                
            
          </div>
          </form>
          <!-- /.row -->
        </section>
    </div>

    <!-- /.content -->
</div>
<!-- Form hapus  -->
<?php $this->load->view('admin/snippet/footer');?>
<script type="text/javascript">
function form_kejari(no,id_kejari,nama_kejari,alamat_kejari,ketua_kejari,url_kejari) {
  if(no==1){
    $("#tabel_kejari").hide();
    $("#form_tambah_kejari").show();
    $("#form_ubah_kejari").hide();
    $("#form_hapus_kejari").hide();
  }else if(no==2){
    $("#tabel_kejari").show();
    $("#form_tambah_kejari").hide();
    $("#form_ubah_kejari").hide();
    $("#form_hapus_kejari").hide();
  }else if(no==3){
    $("#id_kejari1").val(id_kejari);
    $("#nama_kejari1").val(nama_kejari);
    $("#alamat_kejari1").val(alamat_kejari);
    $("#ketua_kejari1").val(ketua_kejari);
    $("#url_kejari1").val(url_kejari);
    $("#tabel_kejari").hide();
    $("#form_tambah_kejari").hide();
    $("#form_ubah_kejari").show();
    $("#form_hapus_kejari").hide();
  }else if(no==4){
    $("#id_kejari2").val(id_kejari);
    $("#nama_kejari2").val(nama_kejari);
    $("#alamat_kejari2").val(alamat_kejari);
    $("#ketua_kejari2").val(ketua_kejari);
    $("#url_kejari2").val(url_kejari);
    $("#tabel_kejari").hide();
    $("#form_tambah_kejari").hide();
    $("#form_ubah_kejari").hide();
    $("#form_hapus_kejari").show();
  }

}
</script>
<script type="text/javascript">
$(document).ready(function(){


       $('#button_ubah_kejari').click(function(){
          $('#editKejari').submit(function(event) {

                // mencegah browser mensubmit form.
          event.preventDefault();
          // tampilkan pesan sedang upload
          $('.loading').html('Prosess...');
          $.ajax({
            type: 'POST',
            url: $('#editKejari').attr('action'),
            data: new FormData(this), 
            contentType: false,
            cache: false,             
            processData:false,
            success : function(data){

              //div preview kita kosongkan lagi
              var hasil=JSON.parse(data);
              $('#editKejari').trigger('reset');
              $('#showdata').html('');
              $('#showdata').html(hasil.master);
              $("#tabel_kejari").show();
              $("#form_tambah_kejari").hide();
              $("#form_edit_kejari").hide();
              //mulai memproses respon dari upload.php
              if(data.error){
                  $('.loading').html(data.error)
              }else{
                  $('.loading').html(hasil.message)
              }     
            },error : function(data){
              alert('Something wrong..');
            } 
          });

          });                  
       });  
        
      $('#button_hapus_kejari').click(function(){
          $('#hapusKejari').submit(function(event) {

                // mencegah browser mensubmit form.
          event.preventDefault();
          // tampilkan pesan sedang upload
          $('.loading').html('Prosess...');
          $.ajax({
            type: 'POST',
            url: $('#hapusKejari').attr('action'),
            data: new FormData(this), 
            contentType: false,
            cache: false,             
            processData:false,
            success : function(data){

              //div preview kita kosongkan lagi
              var hasil=JSON.parse(data);
              $('#hapusKejari').trigger('reset');
              $('#showdata').html('');
              $('#showdata').html(hasil.master);
              $("#tabel_kejari").show();
              $("#form_tambah_kejari").hide();
              $("#form_edit_kejari").hide();
              $("#form_hapus_kejari").hide();
              //mulai memproses respon dari upload.php
              if(data.error){
                  $('.loading').html(data.error)
              }else{
                  $('.loading').html(hasil.message)
              }     
            },error : function(data){
              alert('Something wrong..');
            } 
          });

          });                  
       });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
          $('#tambahKejari').submit(function(event) {
                // mencegah browser mensubmit form.
          event.preventDefault();
          // tampilkan pesan sedang upload
          $('.loading').html('Prosess...');
          $.ajax({
            type: 'POST',
            url: $('#tambahKejari').attr('action'),
            data: new FormData(this), 
            contentType: false,
            cache: false,             
            processData:false,
            success : function(data){
              //div preview kita kosongkan lagi
              var hasil=JSON.parse(data);
              $('#tambahKejari').trigger('reset');
              $('#showdata').html('');
              $('#showdata').html(hasil.master);
              $("#tabel_kejari").show();
              $("#form_tambah_kejari").hide();
              $("#form_edit_kejari").hide();
              //mulai memproses respon dari upload.php
              if(data.error){
                  $('.loading').html(data.error)
              }else{
                  $('.loading').html(hasil.message)
              }     
            },error : function(data){
              alert('Something wrong..');
            } 
          });

          });  

       });
</script>

