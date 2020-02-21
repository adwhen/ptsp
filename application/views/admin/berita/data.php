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
            <li class="active"> MANAJEMEN BERITA</li>
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
          <a href="<?php echo base_url('admin/berita/form');?>">
          <button data-balloon="Tambah" data-balloon-pos="up" class="btn btn-success" title="Tambah"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
          </a>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <br>
      <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>BERITA</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="table6" class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>Judul</th>
              <th>Publish</th>
              <th>Update</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </thead>
            <tbody>
            <?php $x=1; $no=0; foreach($data as $dt){?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $dt['judul_berita'];?></td>
                <td><?php echo $dt['tgl_publish'];?></td>
                <td><?php echo $dt['tgl_update'];?></td>
                <td><?php echo $dt['kat_berita'];?></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      <a href="<?php echo base_url('ba8/form/'.$this->uri->segment(3).'/'.$dt['id_berita']);?>">
                        <button data-balloon="Ubah" data-balloon-pos="up" data-toggle="modal" data-target="#edit-data" class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>
                      </a>
                      <a href="<?php echo base_url('ba8/hapus/'.$this->uri->segment(3).'/'.$dt['id_berita']);?>">
                        <button data-balloon="Hapus" data-balloon-pos="up" data-toggle="modal" data-target="#hapus-data" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                      </a>
                      <a href="<?php echo base_url('ba8/cetak/'.$this->uri->segment(3).'/'.$dt['id_berita']);?>" target="_blank">
                        <button data-balloon="Lihat IS" data-balloon-pos="up" class="btn btn-default" title="Lihat Isi" target="_blank"><i class="fa  fa-sticky-note-o" aria-hidden="true"></i></button>
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