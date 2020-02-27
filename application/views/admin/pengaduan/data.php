<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <ol class="breadcrumb" style="font-size: 15px">
            <li><a href="<?php echo base_url('admin/beranda');?>">Admin</a></li>
            <li class="active"> MANAJEMEN PENGADUAN</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
        </div>
        <!-- /.col -->
        <p class="loading"></p>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <br>
      <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>PENGADUAN</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-sm-12 table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>Nama</th>
              <th>Surel</th>
              <th>No. Telepon</th>
              <th>Pesan</th>
              <th>Aksi</th>
            </thead>
            <tbody id="showdata">
            <?php $no=0; foreach($data as $dt){?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $dt['nama_pengaduan'];?></td>
                <td><?php echo $dt['nama_pengaduan'];?></td>
                <td><?php echo $dt['notelp_pengaduan'];?></td>
                <td><?php echo $dt['pesan_pengaduan'];?></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      
                        <a href="<?php echo $dt['url_file']?>" data-balloon="Lihat File" data-balloon-pos="up" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i>&nbsp;Lihat File</a>

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