<?php
$this->load->view('admin/snippet/header');
$this->load->view('admin/snippet/sidebar');
 ?>
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
            <li class="active"> STRUKTUR ORGANISASI</li>
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
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#tambah_struktural">
                Tambah Data
          </button>
        </div>
        <center>
        <p class="loading"></p>
        </center>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <br>
      <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>STRUKTUR ORGANISASI</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Jabatan</th>
              <th>Foto</th>
              <th>Aksi</th>
            </thead>
            <tbody id="showdata">
            <?php $x=1; $no=0; foreach($data as $dt){?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $dt['nama_struktural'];?></td>
                <td><?php echo $dt['nip_pegawai'];?></td>
                <td><?php echo $dt['jabatan_struktural']?></td>
                <td><img width="30px" src="<?php echo $dt['url_file'] ?>"></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      
                        <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_struktural" onclick="struktural_ubah('<?php echo $this->Mcrypt->encrypt($dt['id_struktural']);?>','<?php echo $this->Mcrypt->encrypt($dt['id_file']) ?>','<?php echo $dt['nama_struktural'] ?>','<?php echo $dt['jabatan_struktural'] ?>','<?php echo $dt['nip_pegawai'] ?>')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>

 
                        <button onclick="struktural_hapus('<?php echo $this->Mcrypt->encrypt($dt['id_struktural']);?>','<?php echo $this->Mcrypt->encrypt($dt['id_file']) ?>','<?php echo $no; ?>')" data-balloon="Hapus" data-balloon-pos="up" data-toggle="modal" data-target="#hapus_struktural" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>

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
<script type="text/javascript">
  function struktural_ubah(id_struktural,id_file,nama_struktural,jabatan_struktural,nip_pegawai) {
    $('#jbtn1').removeAttr('selected');
    $('#jbtn2').removeAttr('selected');
    $('#jbtn3').removeAttr('selected');
    $('#jbtn4').removeAttr('selected');
    $('#jbtn5').removeAttr('selected');
    $('#jbtn6').removeAttr('selected');
    $('#jbtn7').removeAttr('selected');
    $('#jbtn8').removeAttr('selected');
    $('#jbtn9').removeAttr('selected');
    $('#jbtn10').removeAttr('selected');


    $('#id_struktural1').val(id_struktural);
    $('#id_file1').val(id_file);
    $('#nama_struktural1').val(nama_struktural);
    if(jabatan_struktural=="Kepala Kejaksaan Tinggi"){
      $('#jbtn1').attr('selected',"true");
    }else if(jabatan_struktural=="Wakil Kepala Kejaksaan Tinggi"){
      $('#jbtn2').attr('selected',"true");
    }else if(jabatan_struktural=="Kepala Bagian Tata Usaha"){
      $('#jbtn3').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Pembinaan"){
      $('#jbtn4').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Intelijen"){
      $('#jbtn5').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Tindak Pidana Umum"){
      $('#jbtn6').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Tindak Pidana Khusus"){
      $('#jbtn7').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Perdata dan Tata Usaha Negara"){
      $('#jbtn8').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Pengawasan"){
      $('#jbtn9').attr('selected',"true");
    }else if(jabatan_struktural=="Koordinator"){
      $('#jbtn10').attr('selected',"true");
    }
    $('#nip_pegawai1').val(nip_pegawai);

  }
</script>
<script type="text/javascript">
function struktural_hapus(id_struktural,id_file,no) {
  var str="apakah anda ingin menghapus pada baris ke "+no+" ?";
   $('#id_struktural3').val(id_struktural);
   $('#id_file3').val(id_file);
   $('#showstruktural').html(str);
  }
</script>
<div class="modal fade" id="tambah_struktural">
  <?php  echo form_open_multipart('admin/struktural/tambah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'tambahData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah struktural Foto</h4>
              </div>
              <div class="modal-body">
                 
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama</label>
                    <div class="col-md-9">
                      <input name="nama_struktural" id="nama_struktural" required="" value="" required placeholder="Nama" class="form-control" type="text">
                    </div>
                </div>              
                 <div class="form-group">
                    <label class="control-label col-md-2">NIP</label>
                    <div class="col-md-9">
                     <input  name="nip_pegawai" id="nip_pegawai" type="text" maxlength="18" size="18" class="form-control" required>
                    </div>
                </div>  
                <div class="form-group">
                      <label class="control-label col-md-2">Jabatan</label>
                      <div class="col-md-9">
                       <select name="jabatan_struktural" id="jabatan_struktural" type="text" class="form-control" required>
                        <option value="">Pilih</option>
                        <option>Kepala Kejaksaan Tinggi</option>
                        <option>Wakil Kepala Kejaksaan Tinggi</option>
                        <option>Kepala Bagian Tata Usaha</option>
                        <option>Asisten Pembinaan</option>
                        <option>Asisten Intelijen</option>
                        <option>Asisten Tindak Pidana Umum</option>
                        <option>Asisten Tindak Pidana Khusus</option>
                        <option>Asisten Perdata dan Tata Usaha Negara</option>
                        <option>Asisten Pengawasan</option>
                        <option>Koordinator</option>     
                       </select>
                      </div>
                </div>  
                <div class="form-group">
                      <label class="control-label col-md-2">File</label>
                      <div class="col-md-9">
                       <input  type="file" name="file"  required>
                      </div>
                </div>  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="button_tambah" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
        </div>
  </form>          <!-- /.modal-dialog -->
</div>
<div class="modal modal-primary fade" id="ubah_struktural">
         <?php  echo form_open_multipart('admin/struktural/ubah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'ubahData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Foto</h4>
              </div>
              <div class="modal-body">
              <input type="hidden" name="id_file" id="id_file1">
              <input type="hidden" name="id_struktural" id="id_struktural1">
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama</label>
                    <div class="col-md-9">
                      <input name="nama_struktural" id="nama_struktural1" required="" value="" required placeholder="Nama Foto" class="form-control" type="text">
                    </div>
                </div>              
                 <div class="form-group">
                    <label class="control-label col-md-2">NIP</label>
                    <div class="col-md-9">
                     <input  name="nip_pegawai" id="nip_pegawai1"  type="text" maxlength="18" size="18" class="form-control" required>
                    </div>
                </div>  
                <div class="form-group">
                      <label class="control-label col-md-2">Jabatan</label>
                      <div class="col-md-9">
                      <select name="jabatan_struktural" id="jabatan_struktural" type="text" class="form-control" required>
                        <option value="">Pilih</option>
                        <option id="jbtn1">Kepala Kejaksaan Tinggi</option>
                        <option id="jbtn2">Wakil Kepala Kejaksaan Tinggi</option>
                        <option id="jbtn3">Kepala Bagian Tata Usaha</option>
                        <option id="jbtn4">Asisten Pembinaan</option>
                        <option id="jbtn5">Asisten Intelijen</option>
                        <option id="jbtn6">Asisten Tindak Pidana Umum</option>
                        <option id="jbtn7">Asisten Tindak Pidana Khusus</option>
                        <option id="jbtn8">Asisten Perdata dan Tata Usaha Negara</option>
                        <option id="jbtn9">Asisten Pengawasan</option>
                        <option id="jbtn10">Koordinator</option>     
                       </select>
                      </div>
                </div>  
                <div class="form-group">
                      <label class="control-label col-md-2">File</label>
                      <div class="col-md-9">
                       <input  type="file" name="file"  required>
                      </div>
                </div>  
              </div>

              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="button_edit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
            </form> 
          </div>

</div>
<div class="modal modal-danger fade" id="hapus_struktural">
  <?php  echo form_open_multipart('admin/struktural/hapus/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'hapusData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Struktural</h4>
              </div>
              <div class="modal-body">
               <input type="hidden" name="id_file" id="id_file3">
               <input type="hidden" name="id_struktural" id="id_struktural3"> 
              <div class="modal-body form" id="showstruktural">
                
              </div> 
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="button_hapus" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
  </form>          <!-- /.modal-dialog -->
</div>
<?php
$this->load->view('admin/snippet/footer');
?>