<?php 
$this->load->view('admin/snippet/header');
$this->load->view('admin/snippet/sidebar');?>

<div  id="form_ubah_peraturan"  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/Peraturan/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'editPeraturan')); ?>
              <div class="modal-body form">
                <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center; margin-bottom: 10px;">
                  <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>Ubah</strong></center></h3>    
                </div>
                <input type="hidden" value="<?php echo $this->encryption->encrypt($data[0]['id_peraturan']); ?>" name="id_peraturan" id="id_peraturan1">
                <div class="form-group">
                  <label class="control-label col-md-2">Nomor Peraturan</label>
                    <div class="col-md-9">
                      <input name="nama_peraturan" id="nama_peraturan1" value="<?php echo $data[0]['nama_peraturan'] ?>" required placeholder="Nomor xx Tahun xxxx jo UU Nomor 20 Tahun xxxx" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Judul</label>
                    <div class="col-md-9">
                      <textarea id="judul_peraturan2" name="judul_peraturan" rows="10" cols="10" required><?php echo $data[0]['judul_peraturan'] ?>
                      </textarea>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-2">Kateogri Berita</label>
                    <div class="col-md-9">
                     <select class="form-control" name="kat_peraturan" id="kat_peraturan" required="">
                        <option value="">Pilih</option>
                        <option <?php if($data[0]['kat_peraturan']=="Undang-undang"){echo "selected";} ?>>Undang-undang</option>
                        <option  <?php if($data[0]['kat_peraturan']=="Keputusan Presiden"){echo "selected";} ?>>Keputusan Presiden</option>
                        <option  <?php if($data[0]['kat_peraturan']=="Peraturan Pemerintah"){echo "selected";} ?>>Peraturan Pemerintah</option>
                        <option  <?php if($data[0]['kat_peraturan']=="Instruksi Presiden"){echo "selected";} ?>>Instruksi Presiden</option>
                        <option  <?php if($data[0]['kat_peraturan']=="Keputusan Menteri Pemberdayaan Aparatur Negara"){echo "selected";} ?>>Keputusan Menteri Pemberdayaan Aparatur Negara</option>
                        <option  <?php if($data[0]['kat_peraturan']=="Keputusan Jaksa Agung"){echo "selected";} ?>>Keputusan Jaksa Agung</option>
                        <option  <?php if($data[0]['kat_peraturan']=="Instruksi Jaksa Agung"){echo "selected";} ?>>Instruksi Jaksa Agung</option>
                        <option  <?php if($data[0]['kat_peraturan']=="Peraturan Lainnya"){echo "selected";} ?>>Peraturan Lainnya</option>
                      </select>
                    </div>
                </div> 
                     
                <div class="modal-footer">
                  <center>
                    <a href="<?php echo base_url('admin/Peraturan') ?>" class="btn btn-success btn-lg"data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Kembali</a>
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
<?php $this->load->view('admin/snippet/footer');?>
<script type="text/javascript">
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('judul_peraturan2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>