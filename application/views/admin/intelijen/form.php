<?php $this->load->view('admin/snippet/header'); ?>
<?php $this->load->view('admin/snippet/sidebar'); ?>
<?php $list=$this->db->query('SELECT * FROM tb_informasi group by judul_informasi')->result_array();?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <div class="col-md-12">
        <section class="invoice">
          <!-- info row -->
          <div class="row invoice-info">
            <?php echo validation_errors(); ?>

            <?php  echo form_open_multipart('admin/intelijen/form/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
              <div class="modal-body form">
                <input type="hidden" name="id_informasi" value="<?php echo $id ?>">
                <div class="form-group">
                  <label class="control-label col-md-2">Judul</label>
                    <div class="col-md-9">
                      <input class="form-control" list="judul" name="judul_informasi" id="judul_informasi" type="text" value="<?php echo $data[0]['judul_informasi'] ?>">
                      <datalist id="judul">
                        <?php foreach($list as $key){ ?>
                            <option value="<?php echo $key['judul_informasi'] ?>">
                        <?php } ?>
                      </datalist>
                    </div>
                </div>
                
                  <div class="form-group">
                      <label class="control-label col-md-2">Sub Judul</label>
                        <div class="col-md-9">
                        <input name="sub_informasi" id="sub_informasi" value="<?php echo $data[0]['sub_informasi'] ?>"  required class="form-control" type="text">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-md-2">Nama</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="<?php echo $file[0]['nama_file'] ?>" name="nama_file">

                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2">File PDF</label>
                        <div class="col-md-9">
                        <input name="file" type="file">
                        <a target="_blank" href="<?php echo $file[0]['url_file'] ?>"><?php echo $file[0]['nama_file'] ?></a>
                        </div>
                    </div>
                <div id="form">    
                </div>                   
                <div class="modal-footer">
                  <center><button type="submit" class="btn btn-primary btn-lg" data-balloon="Simpan Data" data-balloon-pos="up" title="Simpan">Simpan</button></center>
                </div>
                
            </form>
          </div>
          <!-- /.row -->
        </section>
    </div>

    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<?php $this->load->view('admin/snippet/footer'); ?>

