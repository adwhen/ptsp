<div style="display: none;" id="form_hapus_peraturan"  class="content-wrapper">
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