<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
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
                  <textarea style="margin: 0px; width: 100%; height: 121px;" name="isi_pengumuman" class="form-control"><?php echo $pengumuman[0]['isi_pengumuman']; ?></textarea>
                      <span class="input-group-btn">
                        <button style="height: 121px;" id="btn_p" class="btn btn-info btn-flat" type="submit">Simpan</button>
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
  <div class="col-md-6">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Sandi</h3>
              <center>
              <p class="loading"></p>
              </center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            

            <?php  echo form_open_multipart('admin/beranda/user/',array('class'=>"form-horizontal",'method'=>'POST','id' =>'')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputEmail3">Sandi</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="password" onkeyup="sandi()" id="password"  type="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputPassword3">Konfirmasi Sandi</label>

                  <div class="col-sm-10">
                    <input class="form-control" onkeyup="sandi()" name="passwordC" id="passwordC" type="password" placeholder="Password Confirmation">
                  </div>
                </div>
                <div class="box-footer">
                  <div id="notice">
                    <span style="color: red;"> <i class="fa  fa-close"></i> Sandi Minimal 6 Huruf!!</span>
                  </div>
                  <button disabled="" id="button_sandi" class="btn btn-info pull-right" type="submit">Simpan</button>
                </div>
              <!-- /.box-footer -->
            </div>
            </form>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Tambah Slide Home</a></li>
              <li><a href="#tab_2" data-toggle="tab">Slide Home</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tabel</a></li>
            </ul>

            <div class="tab-content">
              <center><?php echo $this->session->flashdata('msg'); ?></center>
              <div class="tab-pane active" id="tab_1">
                <?php  echo form_open_multipart('admin/beranda/foto/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="inputPassword3">Foto</label>

                      <div class="col-sm-10">
                        <input class="form-control" name="file" type="file" placeholder="Password Confirmation">
                      </div>
                    </div>
                    <div class="box-footer">
                      <button id="button_sandi" class="btn btn-info pull-right" type="submit">Simpan</button>
                    </div>
                  </form>
                </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="slideshow-container">
                  <?php $jumlah=count($beranda); ?>
                  <?php $no=1; foreach($beranda as $key){ ?>
                    <div class="mySlides fade">
                      <div class="numbertext"><?php echo $no++; ?> / <?php echo $jumlah; ?></div>
                      <img src="<?php echo url_serv($key['url_file']) ?>" style="width:100%;height: 300px;">
                      
                    </div>
                  <?php } ?>
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>

                  </div>
                  <br>

                  <div style="text-align:center">
                  <?php $no=1; foreach($beranda as $key){ ?>
                    <span class="dot" onclick="currentSlide(<?php echo $no++; ?>)"></span>  
                  <?php } ?>
                  </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                    <?php $no=1; foreach($beranda as $key){ ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $key['nama_file']?></td>
                        <td><a href="<?php echo base_url('admin/beranda/hapus_foto/'.$this->Mcrypt->encrypt($key['id_file'])) ?>"><button onclick="return confirm('Apakah Anda Ingin Menghapus Foto ini?')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button></a></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
  </div>
  <div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Pengumuman Pop-Up</a></li>
            </ul>

            <div class="tab-content">
              <center><?php echo $this->session->flashdata('msg1'); ?></center>
              <div class="tab-pane active" id="tab_1">
                <?php  echo form_open_multipart('admin/beranda/pop_up/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="inputPassword3">Pop-Up</label>

                      <div class="col-sm-10">
                        <input class="form-control" name="file" type="file">
                      </div>
                    </div>
                    <div class="box-footer">
                      <button class="btn btn-info pull-right" type="submit">Simpan</button>
                      <?php if($popup[0]['ket_file']=="activate"){ ?>
                        <a href="<?php echo base_url('admin/beranda/active') ?>" class="btn btn-danger pull-left" type="submit">Matikan</a>
                      <?php }else{ ?>
                        <a href="<?php echo base_url('admin/beranda/active') ?>" class="btn btn-success pull-left" type="submit">Aktifkan</a>
                      <?php } ?>
                    </div>
                  </form>
                </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="slideshow-container">
                  <?php $jumlah=count($beranda); ?>
                  <?php $no=1; foreach($beranda as $key){ ?>
                    <div class="mySlides fade">
                      <div class="numbertext"><?php echo $no++; ?> / <?php echo $jumlah; ?></div>
                      <img src="<?php echo $key['url_file'] ?>" style="width:100%;height: 300px;">
                      
                    </div>
                  <?php } ?>
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>

                  </div>
                  <br>

                  <div style="text-align:center">
                  <?php $no=1; foreach($beranda as $key){ ?>
                    <span class="dot" onclick="currentSlide(<?php echo $no++; ?>)"></span>  
                  <?php } ?>
                  </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                    <?php $no=1; foreach($beranda as $key){ ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $key['nama_file']?></td>
                        <td><a href="<?php echo base_url('admin/beranda/hapus_foto/'.$this->Mcrypt->encrypt($key['id_file'])) ?>"><button onclick="return confirm('Apakah Anda Ingin Menghapus Foto ini?')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button></a></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
  </div>
</div>

      <!-- /.row -->

    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">
  function sandi() {
   var password=$('#password').val()
   var passwordC=$('#passwordC').val()

    if(password.length>=5 & passwordC.length>=5){
      

      if(password == passwordC){
        $('#button_sandi').removeAttr('disabled');  
        $('#notice').html('<span style="color: green;"> <i class="fa fa-check"></i> Sandi Cocok!!</span>')
      }else{
        $('#notice').html('<span style="color: red;"> <i class="fa  fa-close"></i> Sandi Tidak Cocok!!</span>')
        $('#button_sandi').attr('disabled','');
      }

    }else{
      $('#button_sandi').attr('disabled','');
      $('#notice').html('<span style="color: red;"> <i class="fa  fa-close"></i> Sandi Minimal 6 Huruf!!</span>')
    }
  }
</script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1500); // Change image every 2 seconds
}
</script>