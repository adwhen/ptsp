<?php 
$this->load->view('admin/snippet/header');
$this->load->view('admin/snippet/sidebar');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <ol class="breadcrumb" style="font-size: 15px">
            <a href="<?php echo base_url('admin/berkas/'.$this->uri->segment(3));?>" style="font-size: 25px;" data-balloon="Kembali" data-balloon-pos="up" title="Kembali"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="<?php echo base_url('admin/beranda');?>">Admin</a></li>
            <li class="active"> INFORMASI RENCANA KERJA</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col" style="text-align: right;">
          <a href="<?php echo base_url('admin/renja/form');?>">
          <button data-balloon="Tambah" data-balloon-pos="up" class="btn btn-success" title="Tambah"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
          </a>
        </div>
        <!-- /.col -->
      </div>
      <center><?php echo $this->session->flashdata('msg'); ?></center>
      <!-- /.row -->
      <br>
      <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>INFORMASI RENCANA KERJA</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>Judul</th>
              <th>Sub Judul</th>
              <th>Kategori</th>
              <th>Nama</th>
              <th>Aksi</th>
            </thead>
            <tbody>
            <?php $x=1; $no=0; foreach($data as $dt){?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $dt['judul_informasi'];?></td>
                <td><?php echo $dt['sub_informasi'];?></td>
                <td><?php echo $dt['kat_informasi'];?></td>
                <td><a target="_blank" href="<?php echo $dt['url_file'] ?>"><?php echo $dt['nama_file'];?></a></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      <a href="<?php echo base_url('admin/renja/form/'.$this->Mcrypt->encrypt($dt['id_informasi']));?>">
                        <button data-balloon="Ubah" data-balloon-pos="up" data-toggle="modal" data-target="#edit-data" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                      </a>
                      <button onclick="modal_hapus('<?php echo $no; ?>','<?php echo $this->Mcrypt->encrypt($dt['id_informasi']) ?>')" data-balloon="Hapus" data-balloon-pos="up" data-toggle="modal" data-target="#hapus-renja" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                      </a>
                    </div>
                  </center>
                </td>
              </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<div class="modal modal-danger fade" id="hapus-renja">
  <?php  echo form_open_multipart('admin/renja/hapus/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'hapusPeraturan')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Rencana Kerja</h4>
              </div>
              <div class="modal-body">
               <input type="hidden" name="id_informasi" id="id_informasi2"> 
              <div class="modal-body form" id="noticeBerita">
                  
              </div> 
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" id="button_hapus" class="btn btn-primary">Simpan Perubahan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
  </form>          <!-- /.modal-dialog -->
</div>
<script type="text/javascript">
  function modal_hapus(no,id_informasi) {
    $('#id_informasi2').val(id_informasi);
    $("#noticeBerita").html("apakah anda ingin hapus Rencan Kerja ini pada nomor "+no+" ?")
  }
</script>
<?php $this->load->view('admin/snippet/footer');
?>
