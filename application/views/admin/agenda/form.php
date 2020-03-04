<style type="text/css">
  #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 30%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 60px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-9">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/agenda/form/'.$this->uri->segment(4),array('class'=>"form-horizontal",'method'=>'POST')); ?>
              <div class="modal-body form">
                <input type="hidden" name="id_berita" value="<?php echo $id ?>">
                <div class="form-group">
                  <label class="control-label col-md-2">Judul Berita</label>
                    <div class="col-md-9">
                      <input name="judul_berita" id="judul_berita" value="<?php echo $data[0]['judul_berita'] ?>" required placeholder="Judul Berita" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Tanggal Berita Publish</label>
                    <div class="col-md-9">
                    <input name="tgl_publish" id="tgl_publish" value="<?php echo date('Y-m-d'); ?>" required class="form-control" type="date">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Kateogri Berita</label>
                    <div class="col-md-9">
                     <select class="form-control" name="kat_berita" id="kat_berita" required="">
                        <option value="agenda">Agenda</option>
                      </select>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="control-label col-md-2">Isi Berita</label>
                    <div class="col-md-9">
                      <textarea id="editor1" name="isi_berita" rows="10" cols="80" required>
                        <?php echo $data[0]['isi_berita']; ?>
                      </textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">URL Cover Berita</label>
                    <div class="col-md-9">
                    <input name="cover_berita" id="cover_berita" value="<?php echo $data[0][
                    'cover_berita']; ?>" required class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">URL Video</label>
                    <div class="col-md-9">
                    <input name="video_url" id="video_url" value="<?php echo $data[0][
                    'video_url']; ?>" class="form-control" type="text">
                    </div>
                </div>                     
                <div class="modal-footer">
                  <center><button type="submit" onclick="return confirm('Lihat Kembali sebelum melakukan penyimpanan');" class="btn btn-primary btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Simpan</button></center>
                </div>
                
            </form>
          </div>
          <div class="col-md-12">

                    <div class="container">
                      <span id="gambar" style="display: none;" onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                      <img id="expandedImg" style="width: 100%;">

                      <div id="imgtext"></div>
                      
                    </div>
                  <div id="preview" class="col-md-3"></div>

          </div>
          <!-- /.row -->
        </section>
    </div>
    <div class="col-md-3">
        <section class="invoice">
          <!-- info row -->
          <div style="text-align:center">
            <h2>FOTO</h2>
            <p>Untuk Menambah Foto isi dulu judul berita dan ketegori</p>
            <?php  echo form_open_multipart('admin/berita/upload',array('class'=>"form-horizontal",'method'=>'POST','id'=>'image-upload')); ?>
              <input type="hidden" name="id_berita" value="<?php echo $id ?>">
              <input type="hidden" name="kat_file" name="kat_berita" id="kat_berita2" value="<?php echo $data[0]['judul_berita'] ?>">
              <input name="judul_berita" id="judul_berita2" value="<?php echo $data[0]['judul_berita'] ?>" required class="form-control" type="hidden">
              <input <?php if(count($data)==0){echo "disabled";}?> type="file" name="file" id="image" required />
            </form>
            <p class="loading"></p>
            <div class="row" >
              <div class="col-md-12" id="image-place">
                        <?php foreach($foto as $key){ ?>
                        <img src="<?php echo $key['url_file'] ?>" style="height:100px;" onclick="gmbr(this);">
                        <br>
                        <?php } ?>
                      
                    </div>
              </div>
        </div>
          <!-- /.row -->
        </section>
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<div id="myModal" class="modal">
  <span onclick="tutup()" class="close">&times;</span>
  <img style="width: 30%;" class="modal-content" id="img01">
  <div id="caption"></div>
</div>
                    <script>
                    function myFunction(imgs) {
                      $('#gambar').show();
                      var expandImg = document.getElementById("expandedImg");
                      var imgText = document.getElementById("imgtext");
                      expandImg.src = imgs.src;
                      imgText.innerHTML = '<input class="form-control" readonly value="'+imgs.src+'" id="myvalue"><button class="btn btn-default"  onclick="copyToClipboard()"><i class="fa fa-file">Copy text</i></button>';
                      expandImg.parentElement.style .display = "block";
                    }
                    function gmbr(imgs){
                      var modal = document.getElementById("myModal");

                      // Get the image and insert it inside the modal - use its "alt" text as a caption
                      var img = document.getElementById("myImg");
                      var modalImg = document.getElementById("img01");
                      var captionText = document.getElementById("caption");

                        modal.style.display = "block";
                        modalImg.src = imgs.src;
                        captionText.innerHTML = '<input class="form-control" readonly value="'+imgs.src+'" id="myvalue"><button class="btn btn-default"  onclick="copyToClipboard()"><i class="fa fa-file">Copy text</i></button>';

                      // Get the <span> element that closes the modal

                      // When the user clicks on <span> (x), close the modal
                      
                    }
                    function tutup(){
                      var modal = document.getElementById("myModal");
                        modal.style.display = "none";
                    }
                    // span.onclick = function() { 
                    //     
                    //   }
                    </script>