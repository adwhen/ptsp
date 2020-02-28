<div class="container-fluid" style="text-align:center;width:85%">
    <h3 class="text-center text-dark">PENGADUAN</h3>
    <hr class="garisJudul">
</div>
<br>
<div class="container-fluid" style="text-align:left;width:90%">
    <?=$this->session->flashdata('notif')?>
    <div class="row">
        <div class="col-sm col-lg-6">
            <div class="accordion" id="accordionExample">
                <br>
                Beberapa Pertanyaan Yang Sering Ditanyakan (FAQ) berkaitan dengan penyampaian kritik dan saran melalui website Kejaksaan Tinggi Bengkulu, dapat anda lihat pada kolom di bawah.
                <br>
                <br>
                <h4>FAQ</h4>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per1" aria-expanded="true" aria-controls="collapseOne">
                                Siapa yang boleh menyampaikan kritik dan saran?
                            </button>
                        </h5>
                    </div>

                    <div id="per1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        Masyarakat umum yang mengunjungi website ini
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#per2" aria-expanded="true" aria-controls="collapseOne">
                                Bagaimana cara menyampaikan pengaduan?
                            </button>
                        </h5>
                    </div>

                    <div id="per2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <table class="table table-borderless text-justify">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Isilah kolom-kolom yg tersedia pada fitur pengaduan yang tersedia dalam website ini.</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Uraikan hal yang Anda laporkan pada kolom Pengaduan. Upayakan Anda menuliskannya dalam bahasa Indonesia yang baik dan jelas.</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm col-lg-6">
            <br>
            <?php  echo form_open_multipart('frontend/pengaduan/tambah/',array('class'=>"form-horizontal",'method'=>'POST')); ?>
                <div class="form-group">
                  <label class="control-label col-md-12">Nama Anda</label>
                    <div class="col-md-12">
                      <input name="nama" value="" required class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12">NIK KTP</label>
                    <div class="col-md-12">
                      <input name="nik_ktp" value="" required class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12">Surel Anda</label>
                    <div class="col-md-12">
                      <input name="surel"value="" required class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12">No. Telepon</label>
                  <div class="col-md-12">
                    <input name="notelp"  value="" required class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12">Subjek</label>
                    <div class="col-md-12">
                      <input name="subjek" required value="" class="form-control" type="text">
                    </div>
                </div> 
                <div class="form-group">
                  <label class="control-label col-md-12">Kategori Laporan</label>
                    <div class="col-md-12">
                      <select name="kategori" type="text" class="form-control" required>
                        <option value="">Pilih</option>
                        <option>Umum</option>
                        <option>Perdata</option>
                        <option>Pidana</option>
                        <option>Tata Usaha Negara</option>
                        <option>Lainnya</option>
                       </select>
                    </div>
                </div> 
                <div class="form-group">
                  <label class="control-label col-md-12">Pesan Anda</label>
                    <div class="col-md-12">
                      <textarea name="pesan" required class="form-control" rows="3"></textarea>
                    </div>
                </div> 
                <div class="form-group">
                  <label class="control-label col-md-12">File</label>
                    <div class="col-md-12">
                      <input name="file" required value="" required class="form-control" type="file">
                    </div>
                </div>
                <div class="form-group">
                    <br>
                    <center>
                        <button class="btn btn-success">Simpan</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>