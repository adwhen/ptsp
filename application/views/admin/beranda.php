<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Small boxes (Stat box) -->
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Berita</span>
              <span class="info-box-number"><?php echo $berita; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Galeri</span>
              <span class="info-box-number"><?php echo $galeri; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">File/Pdf</span>
              <span class="info-box-number"><?php echo $pdf; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Survey</span>
              <span class="info-box-number"><?php echo $survey; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
</div>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pengumuman</h3>
              <center>
              <p class="loading"></p>
              </center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            

            <?php  echo form_open_multipart('admin/beranda/tambah/',array('class'=>"form-horizontal",'method'=>'POST','id' =>'pengumuman')); ?>
              <div class="box-body">
                <div class="input-group input-group-sm">
                  
                <input type="hidden" value="<?php echo $this->Mcrypt->encrypt($pengumuman[0]['id_pengumuman']) ?>" name="id_pengumuman">
                <input name="isi_pengumuman" value="<?php echo $pengumuman[0]['isi_pengumuman']; ?>" class="form-control" type="text">
                    <span class="input-group-btn">
                      <button id="btn_p" class="btn btn-info btn-flat" type="submit">Simpan</button>
                    </span>
                </div>
                <div class="input-group input-group-sm">
                  <br>
                <marquee id="isi"><?php echo $pengumuman[0]['isi_pengumuman']; ?></marquee>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              </div>
              <!-- /.box-footer -->
            </form>
      </div>
  </div>
</div>

      <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
