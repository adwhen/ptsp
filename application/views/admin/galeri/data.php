<style type="text/css">
  td{
    word-wrap: break-word;
    width: 300px;
  }
</style>
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
            <li class="active"> MANAJEMEN GALERI</li>
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
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
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
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>GALERI</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-md-12">
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
                <td style="word-wrap: break-all"><?php echo $dt['url_file']?></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      
                        <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#modal_ubah" onclick="modal_ubah('<?php echo $this->Mcrypt->encrypt($dt['id_file']);?>','<?php echo $dt['nama_file'];?>','<?php echo $dt['url_file'];?>','<?php echo $dt['kat_file'];?>')" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>

 
                        <button onclick="modal_hapus('<?php echo $this->Mcrypt->encrypt($dt['id_file']);?>','<?php echo $dt['nama_file'];?>','<?php echo $dt['url_file'];?>','<?php echo $dt['kat_file'];?>')" data-balloon="Hapus" data-balloon-pos="up" data-toggle="modal" data-target="#hapus-data" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>

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
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<script type="text/javascript">
  function modal_ubah(id_file,nama_file,url_file,kat_file) {
    $('#id_file2').val(id_file);
    $('#nama_file2').val(nama_file);
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
function modal_hapus(id_file,nama_file,url_file,kat_file) {
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