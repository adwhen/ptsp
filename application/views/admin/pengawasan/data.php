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
            <li class="active"> INFORMASI PENGAWASAN</li>
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
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_pengawasan">
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
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>INFORMASI PENGAWASAN</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>nama File</th>
              <th>Kateogori</th>
              <th>Url</th>
              <th>Aksi</th>
            </thead>
            <tbody id="showdata">
            <?php $x=1; $no=0; foreach($data as $dt){?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $dt['nama_file'];?></td>
                <td><?php echo $dt['kat_file'];?></td>
                <td><?php echo $dt['url_file']?></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      
                        <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_pengawasan" onclick="pengawasan_ubah('<?php echo $this->Mcrypt->encrypt($dt['id_file']);?>','<?php echo $dt['nama_file'];?>','<?php echo $dt['url_file'];?>','<?php echo $dt['kat_file'];?>','<?php echo $dt['tgl_file'] ?>')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>

 
                        <button onclick="pengawasan_hapus('<?php echo $this->Mcrypt->encrypt($dt['id_file']);?>','<?php echo $dt['nama_file'];?>','<?php echo $dt['url_file'];?>','<?php echo $dt['kat_file'];?>','<?php echo $dt['tgl_file'] ?>')" data-balloon="Hapus" data-balloon-pos="up" data-toggle="modal" data-target="#hapus_pengawasan" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>

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
  function pengawasan_ubah(id_file,nama_file,url_file,kat_file,tgl_file) {
    var string = '<label class="control-label col-md-2">Tanggal</label><div class="col-md-9"><input class="form-control" type="date" name="tgl_file" value="'+tgl_file+'" id="tgl_file2" required></div>'

    $('#id_file2').val(id_file);
    $('#nama_file2').val(nama_file);
    $('#tgl_html').html(string)
    if(kat_file=='sarana'){
      $('#sarana').attr('selected',"true");
      $('#galeri').removeAttr('selected');
    }else if(kat_file=='galeri'){
      $('#galeri').attr('selected',"true");
      $('#sarana').removeAttr('selected');
    }else{
      $('#sarana').removeAttr('selected');
      $('#galeri').removeAttr('selected');
    }
    $('#preview').html('');
    var img = $('<img height="100">'); 
        img.attr('src', url_file);
        img.appendTo('#preview');
  }
</script>
<script type="text/javascript">
function pengawasan_hapus(id_file,nama_file,url_file,kat_file,tgl_file) {
    $('#id_file3').val(id_file);
    $('#nama_file3').val(nama_file);
    if(kat_file=='sarana'){
      $('#sarana3').attr('selected',"true");
      $('#umum3').removeAttr('selected');
    }else if(kat_file=='umum'){
      $('#umum3').attr('selected',"true");
      $('#sarana3').removeAttr('selected');
    }else{
      $('#sarana3').removeAttr('selected');
      $('#umum3').removeAttr('selected');
    }
    $('#preview3').html('');
    var img = $('<img height="100">'); 
        img.attr('src', url_file);
        img.appendTo('#preview3');
  }
</script>
<div class="modal fade" id="tambah_pengawasan">
  <?php  echo form_open_multipart('admin/pengawasan/tambah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'tambahData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah pengawasan Foto</h4>
              </div>
              <div class="modal-body">
                 
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Foto</label>
                    <div class="col-md-9">
                      <input name="nama_file" id="nama_file" required="" value="" required placeholder="Nama Foto" class="form-control" type="text">
                    </div>
                </div>              
                 <div class="form-group">
                    <label class="control-label col-md-2">Kateogri</label>
                    <div class="col-md-9">
                     <select class="form-control" name="kat_file" id="kat_file" required="">
                        <option value="pengawasan">pengawasan</option>
                      </select>
                    </div>
                </div>  
              </div>
              <div class="form-group">
                    <label class="control-label col-md-2">Tanggal</label>
                    <div class="col-md-9">
                     <input class="form-control" type="date" name="tgl_file" id="tgl_file" value="<?php echo date('Y-m-d') ?>" required>
                    </div>
              </div>  
              <div class="form-group">
                    <label class="control-label col-md-2">File</label>
                    <div class="col-md-9">
                     <input  type="file" name="file" id="file" required>
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
  </form>          <!-- /.modal-dialog -->
</div>
<div class="modal modal-primary fade" id="ubah_pengawasan">
         <?php  echo form_open_multipart('admin/pengawasan/ubah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'ubahData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Galeri Foto</h4>
              </div>
              <div class="modal-body">
              <input type="hidden" name="id_file" id="id_file2">
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Foto</label>
                    <div class="col-md-9">
                      <input name="nama_file" id="nama_file2" value="" required placeholder="Nama Foto" class="form-control" type="text">
                    </div>
                </div>              
                <div class="form-group">
                    <label class="control-label col-md-2">Kateogri</label>
                    <div class="col-md-9">
                     <select class="form-control" name="kat_file" id="kat_file" required="">
                        <option value="pengawasan">pengawasan</option>
                      </select>
                    </div>
                </div>  
              <div class="form-group" id="tgl_html">
                    
              </div>   
                <div class="form-group">
                    <label class="control-label col-md-2">File</label>
                    <div class="col-md-9">
                     <input type="file" name="file" id="file2" required>
                    </div>
                </div>  
              </div>
              <div  class="form-group">
                <div class="col-md-12">
                  <center>
                    <div id="preview"></div>
                  </center>
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
<div class="modal modal-danger fade" id="hapus_pengawasan">
  <?php  echo form_open_multipart('admin/pengawasan/hapus/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'hapusData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HAPUS pengawasan</h4>
              </div>
              <div class="modal-body">
               <input type="hidden" name="id_file" id="id_file3"> 
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Foto</label>
                    <div class="col-md-9">
                      <input readonly name="nama_file" id="nama_file3" value="" required placeholder="Nama Foto" class="form-control" type="text">
                    </div>
                </div>              
                 <div hidden="" class="form-group">
                    <label class="control-label col-md-2">Kateogri</label>
                    <div class="col-md-9">
                     <select  readonly class="form-control" name="kat_file" id="kat_file3" required="">
                        <option value="">Pilih</option>
                       <option id="sarana3" value="sarana">Sarana</option>
                        <option id="galeri3" value="galeri">Galeri</option>
                      </select>
                    </div>
                </div> 
                <div  class="form-group">
                <div class="col-md-12">
                  <center>
                    <div id="preview3"></div>
                  </center>
                </div>
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