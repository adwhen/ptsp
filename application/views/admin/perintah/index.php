<?php 
$this->load->view('admin/snippet/header');
$this->load->view('admin/snippet/sidebar');?>
<div id="form_edit" style="display: none;" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/perintah/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
              <div class="modal-body form">
               <div class="form-group">
                <input type="hidden" name="id_perintah" value="<?php echo $this->encryption->encrypt($visi[0]['id_visimisi']); ?>">
                  <div style="background-color: #00a65a;color: white;margin-bottom: 10px;" class="col-md-12"><center><H2><label class="control-label" for="inputSuccess">Perintah Jaksa</label></H2></center></div>
                    <div class="col-md-6">
                      <label class="control-label">Nama Perintah</label>
                      <input type="text" name="nama_perintah" value="<?php echo $data[0]['nama_perintah'] ?>"  class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label class="control-label">Nama Jaksa Agung</label>
                      <input type="text" name="nama_jaksa" value="<?php echo $data[0]['nama_jaksa'] ?>"  class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                  <div style="background-color: #00a65a;color: white;margin-bottom: 10px;" class="col-md-12"><center><H2><label class="control-label" for="inputSuccess">Isi Perintah</label></H2></center></div>
                    <div class="col-md-12">
                      <textarea id="editor1" name="isi_perintah" rows="10" cols="80" required>
                        <?php echo $data[0]['isi_perintah']; ?>
                      </textarea>
                    </div>
                </div>
                <div class="form-group">
                  <div style="background-color: #00a65a;color: white;margin-bottom: 10px;" class="col-md-12"><center><H2><label class="control-label" for="inputSuccess">File</label></H2></center></div>
                    <div class="col-md-6">
                      <input type="File" name="file" class="form-control">
                    </div>
                    <div class="col-md-6" >
                      <center>
                      <div id="preview">
                        <img height="200px" src="<?php echo $foto[0]['url_file']; ?>">
                      </div>
                      </center>
                    </div>
                </div>
                <div class="modal-footer">
                  <center><a onclick="tampil()" class="btn btn-success btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Lihat</a>
                  <button type="submit" class="btn btn-primary btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Simpan</button></center>
                </div>
                
            </form>
          </div>
          <!-- /.row -->
        </section>
    </div>

</div>
<div id="form_tampil" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
              <div class="modal-body form"> 
                <div class="col">
                  <div class="tulisanVisi">
                <h3 style="color:green;text-align: center;"><?php echo $data[0]['nama_perintah']; ?></h3>
                <div class="text-justify" style="font-size: 21px;">
                <?php echo $data[0]['isi_perintah']; ?>
                </div>
                </div>
        </div>
            
                <div class="modal-footer">
                  <center><button type="submit" onclick="form_edit()" class="btn btn-primary btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Edit</button></center>
                </div>
          </div>
          <!-- /.row -->
        </section>
    </div>

</div>



<?php $this->load->view('admin/snippet/footer');?>

<script type="text/javascript">
  function tambah_misi() {
    var tambah= '<input name="misi[]" id="misi" value="" placeholder="Misi" class="form-control" type="text"><br>';
    $("#show_misi").append(tambah);
  }
  function form_edit(){
    $('#form_edit').show();
    $('#form_tampil').hide();
  }

  function tampil(){
    $('#form_edit').hide();
    $('#form_tampil').show();
  }

</script>