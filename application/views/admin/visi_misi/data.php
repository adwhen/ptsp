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

            <?php  echo form_open_multipart('admin/visi_misi/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
              <div class="modal-body form"> 
                <div class="form-group">
                	<div style="background-color: #00a65a;color: white;margin-bottom: 10px;" class="col-md-12"><center><H2><label class="control-label" for="inputSuccess">VISI</label></H2></center></div>
                    <div class="col-md-12">
                      <input type="hidden" name="id_visi" value="<?php echo $this->Mcrypt->encrypt($visi[0]['id_visimisi']); ?>">
                      <textarea style="width: 100%;" name="visi" rows="10" cols="80" required><?php echo $visi[0]['isi_visimisi']; ?>
                      </textarea>
                    </div>
                </div>
                 <div class="form-group">
                 	<div style="background-color: #00a65a;color: white;margin-bottom: 10px;" class="col-md-12">
                    <div class="row">
                      <div style="margin-top: 25px" class="col-md-2"><a class="btn btn-default btn-sm" href="#" type="input" style="color: black;" onclick="tambah_misi()">Tambah</a></div>
                      <div class="col-md-8"><center><H2><label class="control-label" for="inputSuccess">MISI</label></H2></center></div>
                      
                    </div>
                  </div>
                    <div class="col-md-12" id="show_misi">
                      <?php $a=0; foreach($misi as $key){ ?>
                        <?php if($a==0){ ?>
                          <input name="misi[]" id="misi" value="<?php echo $key['isi_visimisi']; ?>" required placeholder="Misi" class="form-control" type="text">
                        <br>
                        <?php $a++; }else{ ?>
                          <input name="misi[]" id="misi" value="<?php echo $key['isi_visimisi']; ?>" placeholder="Misi" class="form-control" type="text">
                        <br>
                        <?php } ?>
                      <?php } ?>
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
                <h3 style="color:green;text-align: center;">Visi</h3>
                <div class="text-justify" style="font-size: 21px;">
                <?php echo $visi[0]['isi_visimisi'] ?>
                </div>
                </div>
            <h3 style="color:green;text-align: center;">Misi</h3>

            <ul class="text-justify" style="list-style-type: square;font-size: 21px;">
              <?php foreach($misi as $key){ ?>
                <li><?php echo $key['isi_visimisi'] ?></li>
              <?php } ?>
            </ul>
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