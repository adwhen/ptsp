<?php 
$this->load->view('admin/snippet/header');
$this->load->view('admin/snippet/sidebar');?>
<div id="form_edit" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/survey/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'form')); ?>
              <div class="modal-body form"> 
                
                 <div class="form-group">
                 	<div style="background-color: #00a65a;color: white;margin-bottom: 10px;" class="col-md-12">
                    <div class="row">
                      <div id="tambah_baris" style="margin-top: 25px;display: none;" class="col-md-2"><a class="btn btn-default btn-sm" href="#" type="input" style="color: black;" onclick="tambah_survey()">Tambah</a></div>
                      <div class="col-md-8"><center><H2><label class="control-label" for="inputSuccess">Survey</label></H2></center></div>

                    </div>
                  </div>
                    <div style="display: none;" class="col-md-12" id="show_survey">
                      <?php $a=0; foreach($survey as $key){ ?>
                        <?php if($a==0){ ?>
                          <input name="pertanyaan[]" id="survey" value="<?php echo $key['pertanyaan']; ?>" required placeholder="Pertanyaan" class="form-control" type="text">
                        <br>
                        <?php $a++; }else{ ?>
                          <input name="pertanyaan[]" id="survey" value="<?php echo $key['pertanyaan']; ?>" placeholder="Pertanyaan" class="form-control" type="text">
                        <br>
                        <?php } ?>
                      <?php } ?>
                    </div>
                    <div class="col-md-12" id="tampil_survey">
                      <?php $a=0; foreach($survey as $key){ ?>
                        <?php if($a==0){ ?>
                          <input disabled="" value="<?php echo $key['pertanyaan']; ?>" required placeholder="Pertanyaan" class="form-control" type="text">
                        <br>
                        <?php $a++; }else{ ?>
                          <input disabled="" value="<?php echo $key['pertanyaan']; ?>" placeholder="Pertanyaan" class="form-control" type="text">
                        <br>
                        <?php } ?>
                      <?php } ?>
                    </div>
                </div> 

                <div class="modal-footer">
                  <center><a onclick="tampil()" class="btn btn-success btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" id="edit" title="Edit">Edit</a>
                    <a onclick="kembali()" id="kmbl" style="display: none;" class="btn btn-success btn-lg" data-balloon="Simpan Data" data-balloon-pos="up"  title="Kembali">Kembali</a>
                  <button style="display: none;" type="submit" class="btn btn-primary btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan" id="simpan">Simpan</button>
                  
                  </center>
                </div>
                
            </form>
          </div>
          <!-- /.row -->
        </section>
    </div>

</div>




<?php $this->load->view('admin/snippet/footer');?>

<script type="text/javascript">
	function tambah_survey() {
		var tambah= '<input name="pertanyaan[]" id="survey" value="" placeholder="Pertanyaan" class="form-control" type="text"><br>';
		$("#show_survey").append(tambah);
	}

  function tampil(){
    $("#tampil_survey").hide();
    $("#show_survey").show();
     $("#tambah_baris").show();
    $("#simpan").show();
    $("#kmbl").show();
    $("#edit").hide();
  }function kembali(){
    $("#tampil_survey").show();
    $("#show_survey").hide();
     $("#tambah_baris").hide();
    $("#simpan").hide();
    $("#kmbl").hide();
    $("#edit").show();
  }


</script>