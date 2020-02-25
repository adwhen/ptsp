<?php 
$this->load->view('admin/snippet/header');
$this->load->view('admin/snippet/sidebar');?>

<div id="tabel_peraturan"  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <ol class="breadcrumb" style="font-size: 15px">
            <a href="<?php echo base_url('admin/berkas/'.$this->uri->segment(3));?>" style="font-size: 25px;" data-balloon="Kembali" data-balloon-pos="up" title="Kembali"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="<?php echo base_url('admin/beranda');?>">Admin</a></li>
            <li class="active"> Peraturan Pemerintah</li>
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
          <button onclick="form_peraturan('1')" type="button" class="btn btn-success" data-toggle="modal">
                Tambah Data
          </button>
        </div>
        <center>
        <p class="loading"></p><?php echo $this->session->flashdata('msg'); ?>
        </center>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <br>
      <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>PERATURAN PEMERINTAH KEJATI</strong></center></h3>    
      </div> <br>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header --> 
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">#</th>
                  <th>Nomor Peraturan</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th width="30px">Aksi</th>
                </tr>
                </thead>
                <tbody>
            <?php $no=1; foreach($data as $dt){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $dt['nama_peraturan']; ?></td>
                  <td><?php echo $dt['judul_peraturan']; ?></td>
                  <td><?php echo $dt['kat_peraturan']; ?></td>
                  <th><a href="<?php echo base_url('admin/peraturan/ubah/'.$this->encryption->encrypt($dt['id_peraturan'])) ?>">
                    <button class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button></a>
                    <button onclick="modal_hapus('<?php echo $this->encryption->encrypt($dt['id_peraturan']);?>','<?php echo $no++; ?>')" data-balloon="Hapus" data-balloon-pos="up" data-toggle="modal" data-target="#hapus-peraturan" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                </tr>

            <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nomor Peraturan</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Aksi</th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<?php $this->load->view('admin/peraturan/form_tambah_peraturan');?>
<?php $this->load->view('admin/peraturan/form_hapus_peraturan');?>
<?php $this->load->view('admin/snippet/footer');?>
<script type="text/javascript">

</script>
<script type="text/javascript">
  function form_peraturan(no,id_peraturan,nama_peraturan,judul_peraturan,kat_peraturan) {
   if(no==1){
      $('#tabel_peraturan').hide()
      $('#form_tambah_peraturan').show()
      $('#form_hapus_peraturan').hide()
      $('#form_ubah_peraturan').hide()
   }else if(no==2){
      $('#tabel_peraturan').show()
      $('#form_tambah_peraturan').hide()
      $('#form_hapus_peraturan').hide()
      $('#form_ubah_peraturan').hide()
   }else{
      $('#tabel_peraturan').hide()
      $('#form_tambah_peraturan').hide()
      $('#form_hapus_peraturan').show()
      $('#form_ubah_peraturan').hide()
   }
  }
</script>
<script type="text/javascript">
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('judul_peraturan')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

function modal_hapus(id_peraturan,no) {
  $('#id_peraturan3').val(id_peraturan);
  $("#noticePeraturan").html("apakah anda ingin hapus file ini pada nomor "+no+" ?")
}
</script>
<div class="modal modal-danger fade" id="hapus-peraturan">
  <?php  echo form_open_multipart('admin/peraturan/hapus/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'hapusPeraturan')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Peraturan</h4>
              </div>
              <div class="modal-body">
               <input type="hidden" name="id_peraturan" id="id_peraturan3"> 
              <div class="modal-body form" id="noticePeraturan">
                  
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


