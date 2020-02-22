<div style="display: none;" id="form_tambah_peraturan"  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/peraturan/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'tambahPeraturan')); ?>
              <div class="modal-body form">
                 <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
                  <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>Tambah</strong></center></h3>    
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Nomor Peraturan</label>
                    <div class="col-md-9">
                      <input name="nama_peraturan" id="nama_peraturan" value="" required placeholder="Nomor xx Tahun xxxx jo UU Nomor 20 Tahun xxxx" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Judul</label>
                    <div class="col-md-9">
                      <textarea id="judul_peraturan" name="judul_peraturan" rows="10" cols="10" required>
                      </textarea>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-2">Kateogri Berita</label>
                    <div class="col-md-9">
                     <select class="form-control" name="kat_peraturan" id="kat_peraturan" required="">
                        <option value="">Pilih</option>
                        <option>Undang-undang</option>
                        <option>Peraturan Pemerintah</option>
                        <option>Keputusan Presiden</option>
                        <option>Instruksi Presiden</option>
                        <option>Keputusan Menteri Pemberdayaan Aparatur Negara</option>
                        <option>Keputusan Jaksa Agung</option>
                        <option>Instruksi Jaksa Agung</option>
                        <option>Peraturan Lainnya</option>
                      </select>
                    </div>
                </div> 
                <div class="modal-footer">
                  <center>
                    <a  class="btn btn-success btn-lg" onclick="form_peraturan('2')" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Kembali</a>
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