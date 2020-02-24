<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-9">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/pembinaan/form/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
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
                        <option value="">Pilih</option>
                        <option <?php if($data[0]['kat_berita']=="umum"){echo "selected";} ?> value="umum">Umum</option>
                        <option <?php if($data[0]['kat_berita']=="zi"){echo "selected";} ?> value="zi">Zona Integritas</option>
                        <option <?php if($data[0]['kat_berita']=="hukum"){echo "selected";} ?> value="hukum">Hukum</option>
                        <option <?php if($data[0]['kat_berita']=="pembinaan"){echo "selected";} ?> value="pembinaan">Pembinaan</option>
                        <option <?php if($data[0]['kat_berita']=="pidana"){echo "selected";} ?> value="pidana">Pidana</option>
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
                <div class="modal-footer">
                  <center><button type="submit" class="btn btn-primary btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Simpan</button></center>
                </div>
                
            </form>
          </div>
          <div class="col-md-12">
                  <div class="row" id="image-place">
                        <?php foreach($foto as $key){ ?>
                        <img src="<?php echo $key['url_file'] ?>" style="height:100px;" onclick="myFunction(this);">
                        <?php } ?>
                     
                    </div>

                    <div class="container">
                      <span id="gambar" style="display: none;" onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                      <img id="expandedImg" style="width: 100%;">

                      <div id="imgtext"></div>
                      
                    </div>
                  <div id="preview" class="col-md-3"></div>
                    <script>
                    function myFunction(imgs) {
                      $('#gambar').show();
                      var expandImg = document.getElementById("expandedImg");
                      var imgText = document.getElementById("imgtext");
                      expandImg.src = imgs.src;
                      imgText.innerHTML = '<input class="form-control" readonly value="'+imgs.src+'" id="myvalue"><button class="btn btn-default"  onclick="copyToClipboard()"><i class="fa fa-file">Copy text</i></button>';
                      expandImg.parentElement.style.display = "block";
                    }
                    </script>
          </div>
          <!-- /.row -->
        </section>
    </div>

    <!-- /.content -->
    <div class="clearfix"></div>
</div>
